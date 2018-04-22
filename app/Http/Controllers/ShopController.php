<?php

namespace App\Http\Controllers;



use App\Appliances_home_appliance;
use App\Appliances_home_appliance_attribute;
use App\Cameras_and_accessories_camera;
use App\Cameras_and_accessories_camera_attribute;
use App\Computing_desktop;
use App\Computing_desktop_attribute;
use App\Computing_macbook;
use App\Computing_macbook_attribute;
use App\Featured_product;
use App\Feedback;
use App\Item_image;
use App\Men_pajama;
use App\Men_pajama_attribute;
use App\Men_panjabi;
use App\Men_panjabi_attribute;
use App\Men_panjabi_pajama_set;
use App\Men_panjabi_pajama_set_attribute;
use App\Men_shirt;
use App\Men_shirt_attribute;
use App\Men_t_shirt;
use App\Men_tshirt_attribute;
use App\Mobiles_and_tablets_smartphone;
use App\mobiles_and_tablets_smartphone_attribute;
use App\Product;
use App\Shop;
use App\Shop_accounting;
use App\Table_name;
use App\Paymenttype;
use App\Shop_transaction;
use App\Shoppingcart;
use App\Transactionhistory;
use App\Delivery_address;
use App\Subcategory;
use App\Tv_and_electronics_3d_tv;
use App\Tv_and_electronics_3d_tv_attribute;
use App\Tv_and_electronics_led_tv;
use App\Tv_and_electronics_led_tv_attribute;
use App\User;
use App\Women_bag;
use App\Women_bag_attribute;
use App\Women_dupatta;
use App\Women_dupatta_attribute;
use App\Women_earring;
use App\Women_earring_attribute;
use App\Women_necklace;
use App\Women_necklace_attribute;
use App\Women_sharee;
use App\Women_sharee_attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Category;
use DB;
use App\Quotation;
use Flash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function Add(){
        $categories = Category::all();
        return view('AddingLayout',compact('categories'));
    }
    public function transaction(){
        $id=Auth::user()->shops()->value('id');
        $transaction=Shop_transaction::where('shop_id',$id)->get();
        return view('transaction',compact('id','transaction'));
    }
    public function shop_account(){
        $id=Auth::user()->shops()->value('id');
        $t=Shop_accounting::where('shop_id',$id)->get();
        return view('ShopBill',compact('t'));
    }

    public function feature(){
        $id=Auth::user()->shops()->value('id');
        $view=Featured_product::all()->where('shop_id',$id);
        return view('feature',compact('view'));
    }
    public function getFeature(){

    }
    public function postFeature(Request $request){
        $this->validate($request,[
            'fdate'=>'required',
            'tdate'=>'required',
            'fimg'=>'required',
        ]);
        $id=Auth::user()->shops()->value('id');
        $feature = new Featured_product();
        $feature['date_from']=$request->get('fdate');
        $feature['date_to']=$request->get('tdate');
        $feature['shop_id']=$id;
        if($file = $request->file('fimg')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\featured',$imgname);
            $img_name="\\featured\\".$imgname;
            $feature['featured_status']=$img_name;
        }
        $feature->save();
        return redirect()->back()->with('img_posted', 'Successfully Added!');

    }
    public function delete($id){
        $data['id']=$id;
        $item= Featured_product::findOrFail($id);
        $image=$item['featured_status'];
        unlink(public_path()."\images".$image);
        $item->delete();
        return redirect()->back()->with('deleted_item', 'Successfully Deleted!');
    }
    public function RequestLayout(){
        return view('RequestLayout');
    }
    public function ViewMyShop(){
        $id=Auth::user()->shops()->value('id');
        $featured=Featured_product::all()->where('shop_id',$id);
        $reviews = Feedback::all();
        $table=Table_name::all();
        foreach ($table as $a){
            $product[]=DB::table("$a->name")->where('shop_id','=',$id)->get();
        }
        return view('ShopLayout',compact('featured','product','reviews','table_name'));
    }
    public function getMsg(){

    }
    public function postMsg(Request $request){
        $this->validate($request,[
            'msg'=>'required',
        ]);
        $id=Auth::user()->shops()->value('user_id');
        $obj=new \App\Request();
        $obj['user_id']=$id;
        $obj['message']=$request->input('msg');
        $obj->save();
        return redirect()->back()->with('msg_posted', 'Successfully Sent!');
    }
    public function UserShopView($id){
        $data['id']=$id;
        $shop_name=Shop::where('id',$id)->value('shop_name');
        //$name=Shop::findOrFail($shop_name)->value('shop_name');
        $featured=Featured_product::all()->where('shop_id',$id);
        $table=Table_name::all();
        $reviews = Feedback::all();
        foreach ($table as $a){
            $product[]=DB::table("$a->name")->where('shop_id','=',$id)->get();
        }
        $AllProduct=Product::all();
        return view('UserShopLayout',compact('featured','product','shop_name','reviews','id','AllProduct'));
    }
    public function getShopSearch(){

    }
    public function postShopSearch(Request $request){
        $categories = Category::all();
        $reviews = Feedback::all();
        $shop_name=Shop::all();
        $search=$request->input('search');
        $table_names=Table_name::all();
        foreach ($table_names as $table){
            $name=$table->name;
            $products[]=DB::table($name)
                ->select('title','description','img_loc','price','shop_id','item_id')
                ->where('title', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%')
                ->orWhere('color', 'like', '%'.$search.'%')
                ->get();

        }
        return view('ShopSearch',compact('search','products','categories','shop_name','reviews'));
    }

}
