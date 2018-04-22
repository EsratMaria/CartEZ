<?php

namespace App\Http\Controllers;

use App\Item_image;
use App\Item_tag;
use App\Mobiles_and_tablets_tablet;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TabletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $items=Mobiles_and_tablets_tablet::all();
        return view('tablet.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tablet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>'required',
            'description'=>'required',
            'price'=>'required|min:0|integer',
            'quantity'=>'required|min:0|integer',
            'color'=>'required',
            'brand'=>'required',
            'SKU'=>'required',
            'weight'=>'required',
            'manufacture'=>'required',
            'warranty'=>'required',
            'display'=>'required',
            'front_cam'=>'required',
            'back_cam'=>'required',
            'system_storage'=>'required',
            'ram'=>'required',
            'sim_card'=>'required',
            'processor'=>'required',
            'cpu_speed'=>'required',
            'battery_mah'=>'required',
            'connectivity'=>'required',
            'model'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);
        $obj="mobiles_and_tablets-tablets";
        $subcat=22;
        $row_number=rand(1,9999999);
        $name= 'mob_tab'."_". $row_number;
        $smart =new Mobiles_and_tablets_tablet;
        $smart['item_id'] = $name;
        $smart['subcategory_id'] =$subcat;
        $smart['title'] = $request->get('title');
        $smart['description'] = $request->get('description');
        $smart['price'] = $request->get('price');
        $smart['quantity'] = $request->get('quantity');
        $smart['color'] = $request->get('color');
        $smart['date'] = date('Y-m-d H:i:s');
        $smart['brand'] = $request->get('brand');
        $smart['SKU'] = $request->get('SKU');
        $smart['weight'] = $request->get('weight');
        $smart['manufacture'] = $request->get('manufacture');
        $smart['warranty'] = $request->get('warranty');
        $smart['display'] = $request->get('display');
        $smart['front_cam'] = $request->get('front_cam');
        $smart['back_cam'] = $request->get('back_cam');
        $smart['system_storage'] = $request->get('system_storage');
        $smart['ram'] = $request->get('ram');
        $smart['sim_card'] = $request->get('sim_card');
        $smart['processor'] = $request->get('processor');
        $smart['cpu_speed'] = $request->get('cpu_speed');
        $smart['battery_mah'] = $request->get('battery_mah');
        $smart['connectivity'] = $request->get('connectivity');
        $smart['model'] = $request->get('model');
        $smart['shop_id'] = $request->get('shop_id');

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\mobiles_and_tablets-tablets',$imgname);
            $img_name="\\mobiles_and_tablets-tablets\\".$imgname;
            $smart['img_loc']=$img_name;
        }
        $smart->save();
        $item_image1 =new Item_image;
        $item_image1['prod_id']=$name;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\mobiles_and_tablets-tablets',$imgname);
            $img_name="\\mobiles_and_tablets-tablets\\".$imgname;
            $item_image1['image_loc']=$img_name;
        }
        $item_image1->save();
        $item_image2 =new Item_image;
        $item_image2['prod_id']=$name;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\mobiles_and_tablets-tablets',$imgname);
            $img_name="\\mobiles_and_tablets-tablets\\".$imgname;
            $item_image2['image_loc']=$img_name;
        }
        $item_image2->save();
        $item_tag =new Item_tag;
        $item_tag['prod_id']=$name;
        $item_tag['table_name']=$obj;
        $item_tag['tag_text']=$request->get('tag_text');
        $item_tag->save();

        $product=new Product;
        $product['prod_id']=$name;
        $product['table_name']=$obj;
        $product->save();


        Session::flash('created_item','The Item has been created');
        return redirect('/tablet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Mobiles_and_tablets_tablet::findOrFail($id);
        return view('tablet.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'title'=>'required',
            'description'=>'required',
            'price'=>'required|min:0|integer',
            'quantity'=>'required|min:0|integer',
            'color'=>'required',
            'brand'=>'required',
            'SKU'=>'required',
            'weight'=>'required',
            'manufacture'=>'required',
            'warranty'=>'required',
            'display'=>'required',
            'front_cam'=>'required',
            'back_cam'=>'required',
            'system_storage'=>'required',
            'ram'=>'required',
            'sim_card'=>'required',
            'processor'=>'required',
            'cpu_speed'=>'required',
            'battery_mah'=>'required',
            'connectivity'=>'required',
            'model'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);

        $smart =Mobiles_and_tablets_tablet::findOrFail($id);
        $smart['title'] = $request->get('title');
        $smart['description'] = $request->get('description');
        $smart['price'] = $request->get('price');
        $smart['quantity'] = $request->get('quantity');
        $smart['color'] = $request->get('color');
        $smart['date'] = date('Y-m-d H:i:s');
        $smart['brand'] = $request->get('brand');
        $smart['SKU'] = $request->get('SKU');
        $smart['weight'] = $request->get('weight');
        $smart['manufacture'] = $request->get('manufacture');
        $smart['warranty'] = $request->get('warranty');
        $smart['display'] = $request->get('display');
        $smart['front_cam'] = $request->get('front_cam');
        $smart['back_cam'] = $request->get('back_cam');
        $smart['system_storage'] = $request->get('system_storage');
        $smart['ram'] = $request->get('ram');
        $smart['sim_card'] = $request->get('sim_card');
        $smart['processor'] = $request->get('processor');
        $smart['cpu_speed'] = $request->get('cpu_speed');
        $smart['battery_mah'] = $request->get('battery_mah');
        $smart['connectivity'] = $request->get('connectivity');
        $smart['model'] = $request->get('model');
        $smart['shop_id'] = $request->get('shop_id');

        $img=$smart['img_loc'];
        unlink(public_path()."\images".$img);

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\mobiles_and_tablets-tablets',$imgname);
            $img_name="\\mobiles_and_tablets-tablets\\".$imgname;
            $smart['img_loc']=$img_name;
        }
        $smart->save();

        $item_img=Item_image::where('prod_id', '=', $id)->pluck('image_loc');
        for($i=0;$i<count($item_img);$i++){
            unlink(public_path()."\images".$item_img[$i]);
        }
        Item_image::where('prod_id', '=', $id)->delete();

        $item_image1 =new Item_image;
        $item_image1['prod_id']=$id;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\mobiles_and_tablets-tablets',$imgname);
            $img_name="\\mobiles_and_tablets-tablets\\".$imgname;
            $item_image1['image_loc']=$img_name;
        }
        $item_image1->save();

        $item_image2 =new Item_image;
        $item_image2['prod_id']=$id;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\mobiles_and_tablets-tablets',$imgname);
            $img_name="\\mobiles_and_tablets-tablets\\".$imgname;
            $item_image2['image_loc']=$img_name;
        }
        $item_image2->save();

        $item_tag_id=Item_tag::where('prod_id', '=', $id)->pluck('id');
        $item_tag=Item_tag::findOrFail($item_tag_id);
        $item_tag['prod_id']=$id;
        $item_tag['table_name']="mobiles_and_tablets-tablet";
        $item_tag['tag_text']=$request->get('tag_text');
        $item_tag->save();
        Session::flash('updated_item','The Item has been updated');
        return redirect('/tablet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Mobiles_and_tablets_tablet::findOrFail($id);
        $image=$item['img_loc'];
        unlink(public_path()."\images".$image);
        $item->delete();
        $item_img=Item_image::where('prod_id', '=', $id)->pluck('image_loc');
        for($i=0;$i<count($item_img);$i++){
            unlink(public_path()."\images".$item_img[$i]);
        }
        Item_image::where('prod_id', '=', $id)->delete();
        Item_tag::where('prod_id', '=', $id)->delete();
        Product::where('prod_id', '=', $id)->delete();
        Session::flash('deleted_item','The Item has been deleted');
        return redirect('/tablet');
    }
}
