<?php

namespace App\Http\Controllers;

use App\Appliances_kitchen_appliance;
use App\Item_image;
use App\Item_tag;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KitchensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $items=Appliances_kitchen_appliance::all();
        return view('kitchens.index',compact('items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kitchens.create');
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
            'type'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);
        $obj="appliances-kitchen_appliances";
        $subcat=37;
        $row_number=rand(1,9999999);
        $name= 'kitchen_app'."_". $row_number;
        $smart =new Appliances_kitchen_appliance;
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
        $smart['type'] = $request->get('type');
        $smart['shop_id'] = $request->get('shop_id');

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\appliances-kitchen_appliances',$imgname);
            $img_name="\\appliances-kitchen_appliances\\".$imgname;
            $smart['img_loc']=$img_name;
        }
        $smart->save();
        $item_image1 =new Item_image;
        $item_image1['prod_id']=$name;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\appliances-kitchen_appliances',$imgname);
            $img_name="\\appliances-kitchen_appliances\\".$imgname;
            $item_image1['image_loc']=$img_name;
        }
        $item_image1->save();
        $item_image2 =new Item_image;
        $item_image2['prod_id']=$name;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\appliances-kitchen_appliances',$imgname);
            $img_name="\\appliances-kitchen_appliances\\".$imgname;
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
        return redirect('/kitchens');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Appliances_kitchen_appliance::findOrFail($id);
        return view('kitchens.edit', compact('item'));
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
            'type'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);

        $smart =Appliances_kitchen_appliance::findOrFail($id);
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
        $smart['type'] = $request->get('type');
        $smart['shop_id'] = $request->get('shop_id');

        $img=$smart['img_loc'];
        unlink(public_path()."\images".$img);

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\appliances-kitchen_appliances',$imgname);
            $img_name="\\appliances-kitchen_appliances\\".$imgname;
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
            $file->move('images\appliances-kitchen_appliances',$imgname);
            $img_name="\\appliances-kitchen_appliances\\".$imgname;
            $item_image1['image_loc']=$img_name;
        }
        $item_image1->save();

        $item_image2 =new Item_image;
        $item_image2['prod_id']=$id;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\appliances-kitchen_appliances',$imgname);
            $img_name="\\appliances-kitchen_appliances\\".$imgname;
            $item_image2['image_loc']=$img_name;
        }
        $item_image2->save();

        $item_tag_id=Item_tag::where('prod_id', '=', $id)->pluck('id');
        $item_tag=Item_tag::findOrFail($item_tag_id);
        $item_tag['prod_id']=$id;
        $item_tag['table_name']="appliances-kitchen_appliances";
        $item_tag['tag_text']=$request->get('tag_text');
        $item_tag->save();
        Session::flash('updated_item','The Item has been updated');
        return redirect('/kitchens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Appliances_kitchen_appliance::findOrFail($id);
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
        return redirect('/kitchens');
    }
}
