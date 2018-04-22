<?php

namespace App\Http\Controllers;
use App\Complain;
use App\Complain_mail_box;
use App\Delivery_address;
use App\Http\Controllers\Controller;
use App\Product;
use App\Product_return;
use App\Shop;
use App\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use Illuminate\Support\Facades\DB;
use Mail;
use Carbon\Carbon;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    //
    public function  getSignup(){
        $categories = Category::all();
        return view ('register', compact('categories'));
    }
    public function  postSignup(Request $request){
        $this->validate($request,[
            'email'=>'required|unique:users',
            'password'=>'required|min:4',
            'date_of_birth'=>'required',
            'location'=>'required'
        ]);
        $email=$request->input('email');
        $user= new User([
            'email'=>$email,
            'password'=>bcrypt($request->input('password')),
            'date_of_birth'=>$request->input('date_of_birth'),
            'location'=>$request->input('location'),
            'verifyToken' => Str::random(40)
        ]);
        $user->save();
        Auth::login($user);
        if(Session::has('oldUrl')){
            $oldurl=Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldurl);
        }
        return redirect()->back()->with('message', 'Registration Successful!');
    }
    public function  getSignin(){
        return view ('register');
    }
    public function  postSignin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:4',
        ]);
        $auth=Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]);
        if($auth){
            if(Session::has('oldUrl')){
                $oldurl=Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldurl);
            }
            return redirect()->route('user.profile');
        }
        else{
            return redirect()->back();
        }
    }
    public function  getProfile(){
        $extractID=Auth::user()->id;
        return view ('user__profile',compact('extractID'));
    }

    public function  getLogout(){
        Auth::logout();
        Session::forget('cart');
        return redirect()->route('user.signin');
    }

    public function  viewOrder(){
        $extractID=Auth::user()->id;
        $transaction= Auth::user()->transactionhistories;
        $transaction->transform(function($t,$key){
            $t->cart = unserialize($t->cart);
            return $t;
        });
        return view ('ViewOrder',compact('transaction','extractID'));
    }
    public function  address(){
        $extractID=Auth::user()->id;
        return view ('Address_New',compact('extractID'));
    }
    //undone
    public function  chngpass(){
        $extractID=Auth::user()->id;
        return view ('Change_Pass',compact('extractID'));
    }
    public function  complain(){
        $extractID=Auth::user()->id;
        $transaction= Auth::user()->transactionhistories;
        $transaction->transform(function($t,$key){
            $t->cart = unserialize($t->cart);
            return $t;
        });

        return view ('complain',compact('extractID','transaction'));
    }
    //till here
    public function  money(){
        return view ('money');
    }
    public function getAddress(){
    }
    public function postAddress(Request $request){
        $this->validate($request,[
            'newadd'=>'required',
        ]);
        $newaddress=new Delivery_address();
        $newaddress['address']=$request->input('newadd');
        Auth::user()->delivery_addresses()->save($newaddress);
        return redirect()->back()->with('message', 'Successfully Saved!');
    }

    //-----------------------shop owner controllers---------------------------------------
    public function layout(){
        return view('shop_input');
    }
    public function getShop(){
    }
    public function postShop(Request $request){
        $this->validate($request,[
            'name'=>'required|min:5',
            'desc'=>'required|min:25',
            'address'=>'required',
            'phone'=>'required|min:11|numeric',
            'open'=>'required',
            'close'=>'required',
            'bkash'=>'required|min:11|numeric',
        ]);
        $myshop= new Shop();
        $myshop['user_id']=Auth::user()->id;
        $myshop['shop_name']=$request->input('name');
        $myshop['description']=$request->input('desc');
        $myshop['address']=$request->input('address');
        $myshop['contact_no']=$request->input('phone');
        $myshop['opening_hour']=$request->input('open');
        $myshop['closing_hour']=$request->input('close');
        $myshop['bkash_no']=$request->input('bkash');
        $myshop->save();
        return redirect()->back()->with('message', 'Successfully Created!');
    }
    public function MyShop(){
        return view('MyShop');
    }
    public function calendar(){
        return view('Calendar');
    }
    public function ComplainProduct($id){
        $data['id']=$id;
        $extractID=Auth::user()->id;
        $complain=Complain::where('user_id',$extractID)->get();
        return view('WriteComplain',compact('id','extractID','complain'));
    }
    public function getAlert($id1){

    }
    public function postAlert(Request $request,$id1){
        $this->validate($request,[
            'msg'=>'required',
        ]);
        $data['id1']=$id1;
        $id=Auth::user()->id;
        $tran_id=Auth::user()->transactionhistories()->value('id');
        $complain= new Complain();
        $complain['user_id'] = $id;
        $complain['transactionhistory_id'] = $tran_id;
        $complain['prod_id'] = $id1;
        $complain['date_of_complain'] = Carbon::now()->format('Y-m-d');
        $complain['detail_text'] = $request->input('msg');
        $complain['complain_status'] = 'closed';
        $complain->save();
        return redirect()->back()->with('message', 'Successfully Posted!');
    }
    public function replies($id){
        $data['id']=$id;
        $extractID=Auth::user()->id;
        $mail_box=Complain_mail_box::all();
        return view('Replies',compact('mail_box','id','extractID'));
    }
    public function getUserReply(){

    }
    public function postUserReply( Request $request, $id , $id1){
        $this->validate($request,[

            'reply'=>'required'
        ]);
        $data['id']=$id;
        $data['id1']=$id1;
        $user=Auth::user()->email;
        $box =new Complain_mail_box;
        $box['complain_id'] = $id;
        $box['from'] = $user;
        $box['to'] = $id1;
        $box['mail_text'] = $request->get('reply');
        $box->save();
        return redirect()->route('mailbox',['id' => $id])->with('message', 'Successfully Added!');
    }
    public function P_Return(){
        $extractID=Auth::user()->id;
        $transaction= Auth::user()->transactionhistories;
        $transaction->transform(function($t,$key){
            $t->cart = unserialize($t->cart);
            return $t;
        });
        return view('product_return',compact('extractID','transaction'));
    }
    public function getReturn(){

    }
    public function postReturn( Request $request){
        $this->validate($request,[

            'prod_id'=>'required',
            'return' => 'required',
        ]);
        $tran_id=Auth::user()->transactionhistories()->value('id');
        $return= new Product_return;
        $return['transactionhistory_id'] = $tran_id;
        $return['prod_id'] = $request->get('prod_id');
        $return['return_status'] = 'not recieved';
        $return['detail_text'] = $request->get('return');
        $return->save();
        return redirect()->back()->with('message', 'Your request has been posted, you will be notified soon.');
    }

}
