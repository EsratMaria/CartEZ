<?php

namespace App\Http\Controllers;

use App\Computing_desktop;
use App\Item_image;
use App\Item_tag;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComputingdesktopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $items=Computing_desktop::all();
        return view('computingdesktops.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computingdesktops.create');
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
//            'date'=>'required',
            'brand'=>'required',
            'SKU'=>'required',
            'memory'=>'required',
            'hard_disk'=>'required',
            'warranty'=>'required',
            'display'=>'required',
            'mother_board'=>'required',
            'monitor'=>'required',
            'mouse'=>'required',
            'graphics_card'=>'required',
            'keyboard'=>'required',
            'ram'=>'required',
            'dimension'=>'required',
            'lan'=>'required',
            'audio'=>'required',
            'processor'=>'required',
            'cpu'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);
        $obj="computing-desktops";
        $subcat=25;
        $row_number=rand(1,9999999);
        $name= 'com_desk'."_". $row_number;
        $desk =new Computing_desktop;
        $desk['item_id'] = $name;
        $desk['subcategory_id'] =$subcat;
        $desk['title'] = $request->get('title');
        $desk['description'] = $request->get('description');
        $desk['price'] = $request->get('price');
        $desk['quantity'] = $request->get('quantity');
        $desk['color'] = $request->get('color');
        $desk['date'] =  date('Y-m-d H:i:s');
        $desk['brand'] = $request->get('brand');
        $desk['SKU'] = $request->get('SKU');
        $desk['memory'] = $request->get('memory');
        $desk['hard_disk'] = $request->get('hard_disk');
        $desk['mother_board'] = $request->get('mother_board');
        $desk['monitor'] = $request->get('monitor');
        $desk['graphics_card'] = $request->get('graphics_card');
        $desk['warranty'] = $request->get('warranty');
        $desk['display'] = $request->get('display');
        $desk['dimension'] = $request->get('dimension');
        $desk['lan'] = $request->get('lan');
        $desk['audio'] = $request->get('audio');
        $desk['ram'] = $request->get('ram');
        $desk['mouse'] = $request->get('mouse');
        $desk['processor'] = $request->get('processor');
        $desk['cpu'] = $request->get('cpu');
        $desk['keyboard'] = $request->get('keyboard');
        $desk['shop_id'] = $request->get('shop_id');

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\computing-desktops',$imgname);
            $img_name="\\computing-desktops\\".$imgname;
            $desk['img_loc']=$img_name;
        }
        $desk->save();
        $item_image1 =new Item_image;
        $item_image1['prod_id']=$name;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\computing-desktops',$imgname);
            $img_name="\\computing-desktops\\".$imgname;
            $item_image1['image_loc']=$img_name;
        }
        $item_image1->save();
        $item_image2 =new Item_image;
        $item_image2['prod_id']=$name;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\computing-desktops',$imgname);
            $img_name="\\computing-desktops\\".$imgname;
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
        return redirect('/computingdesktops');
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
        $item= Computing_desktop::findOrFail($id);
        return view('computingdesktops.edit', compact('item'));
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
//            'date'=>'required',
            'brand'=>'required',
            'SKU'=>'required',
            'memory'=>'required',
            'hard_disk'=>'required',
            'warranty'=>'required',
            'display'=>'required',
            'mother_board'=>'required',
            'monitor'=>'required',
            'mouse'=>'required',
            'graphics_card'=>'required',
            'keyboard'=>'required',
            'ram'=>'required',
            'dimension'=>'required',
            'lan'=>'required',
            'audio'=>'required',
            'processor'=>'required',
            'cpu'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);

        $desk =Computing_desktop::findOrFail($id);
        $desk['title'] = $request->get('title');
        $desk['description'] = $request->get('description');
        $desk['price'] = $request->get('price');
        $desk['quantity'] = $request->get('quantity');
        $desk['color'] = $request->get('color');
        $desk['date'] =  date('Y-m-d H:i:s');
        $desk['brand'] = $request->get('brand');
        $desk['SKU'] = $request->get('SKU');
        $desk['memory'] = $request->get('memory');
        $desk['hard_disk'] = $request->get('hard_disk');
        $desk['mother_board'] = $request->get('mother_board');
        $desk['monitor'] = $request->get('monitor');
        $desk['graphics_card'] = $request->get('graphics_card');
        $desk['warranty'] = $request->get('warranty');
        $desk['display'] = $request->get('display');
        $desk['dimension'] = $request->get('dimension');
        $desk['lan'] = $request->get('lan');
        $desk['audio'] = $request->get('audio');
        $desk['ram'] = $request->get('ram');
        $desk['mouse'] = $request->get('mouse');
        $desk['processor'] = $request->get('processor');
        $desk['cpu'] = $request->get('cpu');
        $desk['keyboard'] = $request->get('keyboard');
        $desk['shop_id'] = $request->get('shop_id');

        $img=$desk['img_loc'];
        unlink(public_path()."\images".$img);

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\computing-desktops',$imgname);
            $img_name="\\computing-desktops\\".$imgname;

        }
        $desk['img_loc']=$img_name;
        $desk->save();

        $item_img=Item_image::where('prod_id', '=', $id)->pluck('image_loc');
        for($i=0;$i<count($item_img);$i++){
            unlink(public_path()."\images".$item_img[$i]);
        }
        Item_image::where('prod_id', '=', $id)->delete();

        $item_image1 =new Item_image;
        $item_image1['prod_id']=$id;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\computing-desktops',$imgname);
            $img_name="\\computing-desktops\\".$imgname;
            $item_image1['image_loc']=$img_name;
        }
        $item_image1->save();

        $item_image2 =new Item_image;
        $item_image2['prod_id']=$id;

        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\computing-desktops',$imgname);
            $img_name="\\computing-desktops\\".$imgname;
            $item_image2['image_loc']=$img_name;
        }
        $item_image2->save();

        $item_tag_id=Item_tag::where('prod_id', '=', $id)->pluck('id');
        $item_tag=Item_tag::findOrFail($item_tag_id);
        $item_tag['prod_id']=$id;
        $item_tag['table_name']="computing-desktops";
        $item_tag['tag_text']=$request->get('tag_text');
        $item_tag->save();
        Session::flash('updated_item','The Item has been updated');
        return redirect('/computingdesktops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Computing_desktop::findOrFail($id);
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
        return redirect('/computingdesktops');
    }
}
