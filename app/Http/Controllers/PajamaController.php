<?php

namespace App\Http\Controllers;

use App\Item_image;
use App\Item_tag;
use App\Men_pajama;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PajamaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $items=Men_pajama::all();
        return view('pajama.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pajama.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>'required',
            'description'=>'required',
            'price'=>'required|min:0|integer',
            'quantity'=>'required|min:0|integer',
            'fabric'=>'required',
            'color'=>'required',
            'size'=>'required',
            'cut_fit'=>'required',
            'waist'=>'required',
            'care'=>'required',
            'type'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);
        $obj="men-pajamas";
        $subcat=2;
        $row_number=rand(1,9999999);
        $name= 'men_paj'."_". $row_number;
        $men_panjabi =new Men_pajama;
        $men_panjabi['item_id'] = $name;
        $men_panjabi['subcategory_id'] =$subcat;
        $men_panjabi['title'] = $request->get('title');
        $men_panjabi['description'] = $request->get('description');
        $men_panjabi['price'] = $request->get('price');
        $men_panjabi['quantity'] = $request->get('quantity');
        $men_panjabi['fabric'] = $request->get('fabric');
        $men_panjabi['color'] = $request->get('color');
        $men_panjabi['date'] =  date('Y-m-d H:i:s');
        $men_panjabi['size'] = $request->get('size');
        $men_panjabi['cut_fit'] = $request->get('cut_fit');
        $men_panjabi['waist'] = $request->get('waist');
        $men_panjabi['care'] = $request->get('care');
        $men_panjabi['type'] = $request->get('type');
        $men_panjabi['shop_id'] = $request->get('shop_id');

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\men-pajamas',$imgname);
            $img_name="\\men-pajamas\\".$imgname;
            $men_panjabi['img_loc']=$img_name;

        }
        $men_panjabi->save();
        $item_image1 =new Item_image;
        $item_image1['prod_id']=$name;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\men-pajamas',$imgname);
            $img_name="\\men-pajamas\\".$imgname;
            $item_image1['image_loc']= $img_name;
        }
        $item_image1->save();
        $item_image2 =new Item_image;
        $item_image2['prod_id']=$name;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\men-pajamas',$imgname);
            $img_name="\\men-pajamas\\".$imgname;
            $item_image2['image_loc']= $img_name;
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
        return redirect('/pajama');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
        $item= Men_pajama::findOrFail($id);
        return view('pajama.edit', compact('item'));
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
            'fabric'=>'required',
            'color'=>'required',
            'size'=>'required',
            'cut_fit'=>'required',
            'waist'=>'required',
            'care'=>'required',
            'type'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);

        $men_panjabi= Men_pajama::findOrFail($id);
        $men_panjabi['title'] = $request->get('title');
        $men_panjabi['description'] = $request->get('description');
        $men_panjabi['price'] = $request->get('price');
        $men_panjabi['quantity'] = $request->get('quantity');
        $men_panjabi['fabric'] = $request->get('fabric');
        $men_panjabi['color'] = $request->get('color');
        $men_panjabi['date'] =  date('Y-m-d H:i:s');
        $men_panjabi['size'] = $request->get('size');
        $men_panjabi['cut_fit'] = $request->get('cut_fit');
        $men_panjabi['waist'] = $request->get('waist');
        $men_panjabi['care'] = $request->get('care');
        $men_panjabi['type'] = $request->get('type');
        $men_panjabi['shop_id'] = $request->get('shop_id');

        $img=$men_panjabi['img_loc'];
        unlink(public_path()."\images".$img);

        if($file=$request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\men-pajamas',$imgname);
            $img_name="\\men-pajamas\\".$imgname;
        }

        $men_panjabi['img_loc']=$img_name;
        $men_panjabi->save();

        $item_img=Item_image::where('prod_id', '=', $id)->pluck('image_loc');
        for($i=0;$i<count($item_img);$i++){
            unlink(public_path()."\images".$item_img[$i]);
        }
        Item_image::where('prod_id', '=', $id)->delete();

        $image2=new Item_image;
        $image2['prod_id']=$id;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\men-pajamas',$imgname);
            $img_name="\\men-pajamas\\".$imgname;
            $image2['image_loc']=$img_name;
        }
        $image2->save();

        $image3=new Item_image;
        $image3['prod_id']=$id;

        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\men-pajamas',$imgname);
            $img_name="\\men-pajamas\\".$imgname;
            $image3['image_loc']=$img_name;
        }
        $image3->save();

        $item_tag_id=Item_tag::where('prod_id', '=', $id)->pluck('id');
        $item_tag=Item_tag::findOrFail($item_tag_id);
        $item_tag['prod_id']=$id;
        $item_tag['table_name']="men-pajamas";
        $item_tag['tag_text']=$request->get('tag_text');
        $item_tag->save();
        Session::flash('updated_item','The Item has been updated');
        return redirect('/pajama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Men_pajama::findOrFail($id);
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
        return redirect('/pajama');
    }

}
