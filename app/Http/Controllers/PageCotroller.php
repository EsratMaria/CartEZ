<?php

namespace App\Http\Controllers;



use App\Appliances_home_appliance;
use App\Appliances_home_appliance_attribute;
use App\Appliances_kitchen_appliance;
use App\Appliances_kitchen_appliance_attribute;
use App\Cameras_and_accessories_accessory;
use App\Cameras_and_accessories_accessory_attribute;
use App\Cameras_and_accessories_camera;
use App\Cameras_and_accessories_camera_attribute;
use App\Computing_desktop;
use App\Computing_desktop_attribute;
use App\Computing_laptop_attribute;
use App\Computing_macbook;
use App\Computing_macbook_attribute;
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
use App\Mobiles_and_tablets_accessory;
use App\mobiles_and_tablets_accessory_attribute;
use App\Mobiles_and_tablets_featured_phone;
use App\mobiles_and_tablets_featured_phone_attribute;
use App\Mobiles_and_tablets_smartphone;
use App\mobiles_and_tablets_smartphone_attribute;
use App\Mobiles_and_tablets_tablet;
use App\mobiles_and_tablets_tablet_attribute;
use App\Shop;
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
use App\Tv_and_electronics_smart_tv;
use App\Tv_and_electronics_smart_tv_attribute;
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


class PageCotroller extends Controller
{
    //
    /**
     * @param $
     */
    public function index(){
        $categories = Category::all();
        return view('index', compact('categories','a'));
    }

    public function displayProducts($id1,$id) {
        $categories = Category::all();
        $subcategories=Subcategory::all();
        $data['id1']=$id1;
        $data['id']=$id;
        $category=Category::findorFail($id1);
        $subcategory=Subcategory::findOrFail($id);
        $catname=str_replace(' ','_',$category->cat_name);
        $subcatname=str_replace(' ','_',$subcategory->title);
        $table_name=strtolower($catname)."-".strtolower($subcatname);
        if($table_name == "men-panjabis"){
            $tn=Men_panjabi::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Men_panjabi_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
            //$price=DB::table($table_name)->distinct()->get(['price']);

        }
        elseif ($table_name == "men-pajamas"){
            $tn=Men_pajama::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Men_pajama_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "men-panjabi_pajama_sets"){
            $tn=Men_panjabi_pajama_set::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Men_panjabi_pajama_set_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "men-shirts"){
            $tn=Men_shirt::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Men_shirt_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "men-t_shirts"){
            $tn=Men_t_shirt::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Men_tshirt_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "women-sharees"){
            $tn=Women_sharee::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Women_sharee_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "women-dupattas"){
            $tn=Women_dupatta::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Women_dupatta_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "women-bags"){
            $tn=Women_bag::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Women_bag_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "women-necklaces"){
            $tn=Women_necklace::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Women_necklace_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "women-earrings"){
            $tn=Women_earring::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Women_earring_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "mobiles_and_tablets-smartphones"){
            $tn=Mobiles_and_tablets_smartphone::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=mobiles_and_tablets_smartphone_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "mobiles_and_tablets-tablets"){
            $tn=Mobiles_and_tablets_tablet::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=mobiles_and_tablets_tablet_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "mobiles_and_tablets-featured_phones"){
            $tn=Mobiles_and_tablets_featured_phone::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=mobiles_and_tablets_featured_phone_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "mobiles_and_tablets-accessories"){
            $tn=Mobiles_and_tablets_accessory::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=mobiles_and_tablets_accessory_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "computing-desktops"){
            $tn=Computing_desktop::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Computing_desktop_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "computing-macbooks"){
            $tn=Computing_macbook::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Computing_macbook_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "tv_and_electronics-3d_tvs"){
            $tn=Tv_and_electronics_3d_tv::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Tv_and_electronics_3d_tv_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "tv_and_electronics-led_tvs"){
            $tn=Tv_and_electronics_led_tv::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Tv_and_electronics_led_tv_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "tv_and_electronics-smart_tvs"){
            $tn=Tv_and_electronics_smart_tv::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Tv_and_electronics_smart_tv_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "cameras_and_accessories-cameras"){
            $tn=Cameras_and_accessories_camera::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Cameras_and_accessories_camera_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "cameras_and_accessories-accessories"){
            $tn=Cameras_and_accessories_accessory::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Cameras_and_accessories_accessory_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "appliances-home_appliances"){
            $tn=Appliances_home_appliance::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Appliances_home_appliance_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        elseif ($table_name == "appliances-kitchen_appliances"){
            $tn=Appliances_kitchen_appliance::all();
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Appliances_kitchen_appliance_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $reviews = Feedback::all();
        }
        else{
            "nothing to show";
        }
        $shop_name=Shop::all();

        return view('show_product',compact('table_name','categories','shop_name','subcategories','id1','id','tn','attribute_table_name','attribute_get_model','Filter_query','reviews','options','name'));
    }
    public function showdetails($table_name,$pid)
    {

        $categories = Category::all();
        $data['product_id'] = $pid;
        $data['table_name'] = $table_name;
        $shop_name = Shop::all();
        $query = DB::table($table_name)
            ->select('*')
            ->where('item_id', '=', $pid)
            ->get();
        $image = Item_image::all();
        $pro_img = DB::table('item_images')
            ->select('image_loc')
            ->where('prod_id', $pid)
            ->get();
        $reviews = DB::table('feedbacks')
            ->select('*')
            ->where('prod_id', $pid)
            ->get();
        $getName = User::all();
        $ExtractingName = Auth::user();
        //recommendation
        $product_id = collect(\DB::select("select id from products where prod_id='$pid'"))->pluck('id')->first();
        $filename = 'output2.txt';
        $lines = count(file($filename));
        $file = fopen($filename, 'r');
        $data = array();
        $value = array();
        //$product = array();
        //$recom_item = array();

        for ($i = 1; $i <= $lines; $i++) {
            $line = fgets($file);
            $data[] = $line;
        }
//        foreach ($data as $a) {
//            $arr = explode(" ", $a);
//            print_r($arr);
//            echo '<br>';
//        }

        foreach ($data as $a) {
            $arr = explode(" ", $a);
//            print_r($arr);
//            echo '<br>';
            if ($arr[0] == $product_id) {
                for ($j = 1; $j < sizeof($arr); $j = $j+1) {
                    $value[] = $arr[$j];
                }
            }

            echo '<br>';
        }


        $length = sizeof($value);
        for ($z = 0; $z < $length; $z++) {
            $product[] = DB::table('products')->where('id', '=', $value[$z])->get();
        }
        foreach ($product as $c) {

            foreach ($c as $v) {
                $recom_item[] = DB::table($v->table_name)->where('item_id', '=', $v->prod_id)->get();

            }
        }


        return view('show_details',compact('categories','image','pro_img','table_name','shop_name','query','reviews','getName','ExtractingName','recom_item'));
    }

    public function search(Request $request){
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
        return view('search_result',compact('search','products','categories','shop_name','reviews'));
    }
    public  function getAddToCart(Request $request, $table_name, $id){
        $data['table_name']=$table_name;
        //$data['id']=$id;
        if($table_name == "men-panjabis"){
            $product = Men_panjabi::find($id);
        }
        elseif ($table_name == "men-pajamas"){
            $product = Men_pajama::find($id);
        }
        elseif ($table_name == "men-panjabi_pajama_sets"){
            $product = Men_panjabi_pajama_set::find($id);
        }
        elseif ($table_name == "men-shirts"){
            $product = Men_shirt::find($id);
        }
        elseif ($table_name == "men-t_shirts"){
            $product = Men_t_shirt::find($id);
        }
        elseif ($table_name == "women-sharees"){
            $product = Women_sharee::find($id);
        }
        elseif ($table_name == "women-dupattas"){
            $product = Women_dupatta::find($id);
        }
        elseif ($table_name == "women-bags"){
            $product = Women_bag::find($id);
        }
        elseif ($table_name == "women-necklaces"){
            $product = Women_necklace::find($id);
        }
        elseif ($table_name == "women-earrings"){
            $product = Women_earring::find($id);
        }
        elseif ($table_name == "mobiles_and_tablets-smartphones"){
            $product = Mobiles_and_tablets_smartphone::find($id);
        }
        elseif ($table_name == "mobiles_and_tablets-tablets"){
            $product = Mobiles_and_tablets_tablet::find($id);
        }
        elseif ($table_name == "mobiles_and_tablets-featured_phones"){
            $product = Mobiles_and_tablets_featured_phone::find($id);
        }elseif ($table_name == "mobiles_and_tablets-accessories"){
            $product = Mobiles_and_tablets_accessory::find($id);
        }
        elseif ($table_name == "computing-desktops"){
            $product = Computing_desktop::find($id);
        }
        elseif ($table_name == "computing-macbooks"){
            $product = Computing_macbook::find($id);
        }
        elseif ($table_name == "tv_and_electronics-3d_tvs"){
            $product = Tv_and_electronics_3d_tv::find($id);
        }
        elseif ($table_name == "tv_and_electronics-led_tvs"){
            $product = Tv_and_electronics_led_tv::find($id);
        }
        elseif ($table_name == "cameras_and_accessories-cameras"){
            $product = Cameras_and_accessories_camera::find($id);
        }
        elseif ($table_name == "appliances-home_appliances"){
            $product = Appliances_home_appliance::find($id);
        }
        elseif ($table_name == "appliances-kitchen_appliances"){
            $product = Appliances_kitchen_appliance::find($id);
        }
        else{
            "nothing to show";
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Shoppingcart($oldCart);
        $cart->add($product, $product->item_id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function ContactUs(){
        $categories = Category::all();
        return view('contact',compact('categories'));

    }
    public function Register(){
        $categories = Category::all();
        $subcategories=Subcategory::all();
        return view('register',compact('categories','subcategories'));

    }
    public function getCart(){
        $categories = Category::all();
        if (!Session::has('cart')){
            return view('checkout',['products' => null ]);
        }
        $oldCart=Session::get('cart');
        $cart=new Shoppingcart($oldCart);
        return view('checkout', ['products' => $cart->items, 'totalPrice'=>$cart->totalPrice],compact('categories'));
    }
    public  function getCheckout(){
        if (!Session::has('cart')){
            return view('checkout');
        }
        $oldCart=Session::get('cart');
        $cart =new Shoppingcart($oldCart);
        $total= $cart->totalPrice;
        $payment = Paymenttype::all(['id','title']);
        $id=Auth::user()->delivery_addresses;
        return view('finalOrder',['total'=>$total,'payment'=>$payment,'id'=>$id]);
    }
    public  function postCheckout(Request $request){
        $categories = Category::all();
        if (!Session::has('cart')){
            return view('checkout');
        }
        $this->validate($request,[
            'bkash'=>'required|min:11|numeric',
            'address'=>'required',
        ]);
        $oldCart=Session::get('cart');
        $cart =new Shoppingcart($oldCart);
        $order= new Transactionhistory();
        $shop_transaction= new Shop_transaction();
        $order['shoppingcart_id']=rand(1000,9999999);
        $order['paymenttype_id']=$request->input('paymenttype');
        $order['purchase_date']=Carbon::now()->format('Y-m-d');
        $order['purchase_time']=Carbon::now()->format('h:i:s');
        $order['payment_status']='Pending';
        $order['delivery_status']='Ordered';
        $order['bkash_payment_id']=$request->input('bkash');
        $order['cart'] = serialize($cart);
        $order['price']=$cart->totalPrice;
        if($request->input('address')=='None'){
            $order['delivery_address'] = $request->input('new_address');
            Auth::user()->transactionhistories()->save($order);
            $address = new Delivery_address();
            $id=Auth::user()->id;
            $address['user_id']=$id;
            $address['address'] = $request->input('new_address');
            Auth::user()->delivery_addresses()->save($address);
            $products=$cart->items;
            foreach ($products as $data){
                $data1[] = [
                    'transactionhistory_id' => Auth::user()->transactionhistories()->value('id'),
                    'shop_id' => $data['item']['shop_id'],
                    'prod_id' => $data['item']['item_id'],
                    'quantity' => $data['qty'],
                    'order_date' => Auth::user()->transactionhistories()->value('purchase_date'),
                    'delivery_date' => Carbon::now()->addDays(10),
                    'shop_transaction_status' => 'Pending',
                ];
            }

            $result = Shop_transaction::insert($data1);
        }
        else {
            $order['delivery_address'] = $request->input('address');
            Auth::user()->transactionhistories()->save($order);
            $products=$cart->items;
            foreach ($products as $data){
                $data1[] = [
                    'transactionhistory_id' => Auth::user()->transactionhistories()->value('id'),
                    'shop_id' => $data['item']['shop_id'],
                    'prod_id' => $data['item']['item_id'],
                    'quantity' => $data['qty'],
                    'order_date' => Auth::user()->transactionhistories()->value('purchase_date'),
                    'delivery_date' => Carbon::now()->addDays(10),
                    'shop_transaction_status' => 'Pending',
                ];
            }

            $result = Shop_transaction::insert($data1);
            $check=Auth::user()->delivery_addresses()->where('address', $request->input('address'));
            $check1=Auth::user()->delivery_addresses();
            if(count($check)==0 OR count($check1)==0) {
                $address = new Delivery_address();
                $address['user_id']=Auth::user()->id;
                $address['address'] = $request->input('address');
                Auth::user()->delivery_addresses()->save($address);
            }
        }

        Session::forget('cart');
        return redirect()->route('home',compact('categories'))->with('success','successfully purchased products!');

    }
    public function getReview(){

    }
    public function postReview(Request $request){
        $this->validate($request,[
            'comment'=>'required|min:11',
            'rating'=>'required',
            'user_review_email'=>'required',
            'pid'=>'required',
        ]);
        $reviews=new Feedback();
        $reviews['feedback_text']=$request->input('comment');
        $reviews['rating_point']=$request->input('rating');
        $reviews['prod_id']=$request->input('pid');
        $email=DB::table('users')
            ->select('id')
            ->where('email', $request->input('user_review_email'))
            ->get();
        $reviews['user_id']=$email;
        Auth::user()->feedbacks()->save($reviews);
        return redirect()->back()->with('review_posted', 'Successfully Posted!');
    }
    public function getFilter(){

    }
    public function postFilter(Request $request){
        $categories = Category::all();
        $shop_name=Shop::all();
        $reviews=Feedback::all();
        $this->validate($request,[
            'radio'=>'required',
            'att'=>'required',
            'tn'=>'required',
        ]);
        $option=Input::get('radio');
        $table_name=$request->input('tn');
        if($table_name == "men-panjabis"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Men_panjabi_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "men-pajamas"){
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('size',$request->input('radio'))
                ->oRwhere('waist',$request->input('radio'))
                ->oRwhere('type',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "men-panjabi_pajama_sets"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Men_panjabi_pajama_set_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('size',$request->input('radio'))
                ->oRwhere('collar_neck',$request->input('radio'))
                ->oRwhere('cut_fit',$request->input('radio'))
                ->oRwhere('sleeve',$request->input('radio'))
                ->oRwhere('length',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->oRwhere('type',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "men-shirts"){
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('size',$request->input('radio'))
                ->oRwhere('collar_neck',$request->input('radio'))
                ->oRwhere('cut_fit',$request->input('radio'))
                ->oRwhere('sleeve',$request->input('radio'))
                ->oRwhere('shirt_type',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "men-t_shirts"){
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('size',$request->input('radio'))
                ->oRwhere('collar_neck',$request->input('radio'))
                ->oRwhere('cut_fit',$request->input('radio'))
                ->oRwhere('sleeve',$request->input('radio'))
                ->oRwhere('shirt_type',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "women-sharees"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Women_sharee_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "women-dupattas"){
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "women-bags"){
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "women-necklaces"){
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "women-earrings"){
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "mobiles_and_tablets-smartphones"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=mobiles_and_tablets_smartphone_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('brand',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('display',$request->input('radio'))
                ->oRwhere('ram',$request->input('radio'))
                ->oRwhere('processor',$request->input('radio'))
                ->oRwhere('model',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "mobiles_and_tablets-accessories"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=mobiles_and_tablets_accessory_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('brand',$request->input('radio'))
                ->oRwhere('type',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "mobiles_and_tablets-featured_phones"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=mobiles_and_tablets_featured_phone_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('brand',$request->input('radio'))
                ->oRwhere('display',$request->input('radio'))
                ->oRwhere('ram',$request->input('radio'))
                ->oRwhere('model',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "computing-desktops"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Computing_desktop_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('brand',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('processor',$request->input('radio'))
                ->oRwhere('hard_disk',$request->input('radio'))
                ->oRwhere('mother_board',$request->input('radio'))
                ->oRwhere('monitor',$request->input('radio'))
                ->oRwhere('graphics_card',$request->input('radio'))
                ->oRwhere('cpu',$request->input('radio'))
                ->oRwhere('display',$request->input('radio'))
                ->oRwhere('dimension',$request->input('radio'))
                ->oRwhere('ram',$request->input('radio'))
                ->oRwhere('audio',$request->input('radio'))
                ->oRwhere('mouse',$request->input('radio'))
                ->oRwhere('keyboard',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "computing-macbooks"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Computing_macbook_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('brand',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('processor',$request->input('radio'))
                ->oRwhere('display',$request->input('radio'))
                ->oRwhere('ram',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "computing-laptops"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Computing_laptop_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('brand',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('processor',$request->input('radio'))
                ->oRwhere('display',$request->input('radio'))
                ->oRwhere('ram',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "tv_and_electronics-3d_tvs"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Tv_and_electronics_3d_tv_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "tv_and_electronics-led_tvs"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Tv_and_electronics_led_tv_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "cameras_and_accessories-cameras"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Cameras_and_accessories_camera_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('fabric',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('trims',$request->input('radio'))
                ->oRwhere('aanchal',$request->input('radio'))
                ->oRwhere('body',$request->input('radio'))
                ->oRwhere('event',$request->input('radio'))
                ->get();
        }
        elseif ($table_name == "appliances-home_appliances"){
            $attribute_table_name=strtolower($table_name)."_attributes";
            $attribute_get_model=Appliances_home_appliance_attribute::all();
            $Filter_query = DB::table($attribute_table_name)
                ->where('filter','=','Y')
                ->get(['attribute','display_name'])
                ->all();
            foreach ($Filter_query as $a){
                $name= $a->attribute;
                $options[]=DB::table($table_name)->distinct()
                    ->pluck($name);
            }
            $query=DB::table($table_name)
                ->select('*')
                ->where('price',$request->input('radio'))
                ->oRwhere('brand',$request->input('radio'))
                ->oRwhere('color',$request->input('radio'))
                ->oRwhere('size',$request->input('radio'))
                ->oRwhere('type',$request->input('radio'))
                ->get();
        }
        else{
            "nothing to show";
        }
        return view('filter',compact('option','column','table_name','query','categories','shop_name','reviews','Filter_query','attribute_get_model','options','name'));

    }
    public function getReduceByOne($id){
        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        $cart = new Shoppingcart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }
    public function getRemove($id){
        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        $cart = new Shoppingcart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }
    public function getIncrementByOne($id){
        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        $cart = new Shoppingcart($oldCart);
        $cart->incrementByOne($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }



}
