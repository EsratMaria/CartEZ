<?php

namespace App\Http\Controllers;
use App\Item_tag;
use App\Item_image;
use App\Product;
use App\Women_sharee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WomenshareesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $items=Women_sharee::all();
        return view('womensharees.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('womensharees.create');
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
            'fabric'=>'required',
            'color'=>'required',
//            'date'=>'required',
            'trims'=>'required',
            'aanchal'=>'required',
            'body'=>'required',
            'weight'=>'required',
            'blouse_piece'=>'required',
            'event'=>'required',
            'care'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);
        $obj="women-sharees";
        $subcat=8;
        $row_number=rand(1,9999999);
        $name= 'women_sharee'."_". $row_number;
        $sharee =new Women_sharee;
        $sharee['item_id'] = $name;
        $sharee['subcategory_id'] =$subcat;
        $sharee['title'] = $request->get('title');
        $sharee['description'] = $request->get('description');
        $sharee['price'] = $request->get('price');
        $sharee['quantity'] = $request->get('quantity');
        $sharee['fabric'] = $request->get('fabric');
        $sharee['color'] = $request->get('color');
        $sharee['date'] =  date('Y-m-d H:i:s');
        $sharee['trims'] = $request->get('trims');
        $sharee['aanchal'] = $request->get('aanchal');
        $sharee['body'] = $request->get('body');
        $sharee['weight'] = $request->get('weight');
        $sharee['blouse_piece'] = $request->get('blouse_piece');
        $sharee['event'] = $request->get('event');
        $sharee['care'] = $request->get('care');
        $sharee['shop_id'] = $request->get('shop_id');

        if($file = $request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\women-sharees',$imgname);
            $img_name="\\women-sharees\\".$imgname;
            $sharee['img_loc']=$img_name;
        }
        $sharee->save();
        $item_image1 =new Item_image;
        $item_image1['prod_id']=$name;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\women-sharees',$imgname);
            $img_name="\\women-sharees\\".$imgname;
            $item_image1['image_loc']=$img_name;
        }
        $item_image1->save();
        $item_image2 =new Item_image;
        $item_image2['prod_id']=$name;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\women-sharees',$imgname);
            $img_name="\\women-sharees\\".$imgname;
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
        return redirect('/womensharees');
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
        $item= Women_sharee::findOrFail($id);
        return view('womensharees.edit', compact('item'));
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
//            'date'=>'required',
            'trims'=>'required',
            'aanchal'=>'required',
            'body'=>'required',
            'weight'=>'required',
            'blouse_piece'=>'required',
            'event'=>'required',
            'care'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
            'shop_id'=>'required',
            'tag_text'=>'required'
        ]);

        $sharee =Women_sharee::findOrFail($id);
        $sharee['title'] = $request->get('title');
        $sharee['description'] = $request->get('description');
        $sharee['price'] = $request->get('price');
        $sharee['quantity'] = $request->get('quantity');
        $sharee['fabric'] = $request->get('fabric');
        $sharee['color'] = $request->get('color');
        $sharee['date'] =  date('Y-m-d H:i:s');
        $sharee['trims'] = $request->get('trims');
        $sharee['aanchal'] = $request->get('aanchal');
        $sharee['body'] = $request->get('body');
        $sharee['weight'] = $request->get('weight');
        $sharee['blouse_piece'] = $request->get('blouse_piece');
        $sharee['event'] = $request->get('event');
        $sharee['care'] = $request->get('care');
        $sharee['shop_id'] = $request->get('shop_id');

        $img=$sharee['img_loc'];
        unlink(public_path()."\images".$img);

        if($file=$request->file('image1')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\women-sharees',$imgname);
            $img_name="\\women-sharees\\".$imgname;
            $sharee['img_loc']=$img_name;
        }
        $sharee->save();
        $item_img=Item_image::where('prod_id', '=', $id)->pluck('image_loc');
        for($i=0;$i<count($item_img);$i++){
            unlink(public_path()."\images".$item_img[$i]);
        }
        Item_image::where('prod_id', '=', $id)->delete();
        $image2=new Item_image;
        $image2['prod_id']=$id;
        if($file = $request->file('image2')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\women-sharees',$imgname);
            $img_name="\\women-sharees\\".$imgname;
            $image2['image_loc']=$img_name;
        }
        $image2->save();

        $image3=new Item_image;
        $image3['prod_id']=$id;
        if($file = $request->file('image3')){
            $imgname=$file->getClientOriginalName();
            $file->move('images\women-sharees',$imgname);
            $img_name="\\women-sharees\\".$imgname;
            $image3['image_loc']=$img_name;
        }
        $image3->save();

        $item_tag_id=Item_tag::where('prod_id', '=', $id)->value('id');
        $item_tag=Item_tag::findOrFail($item_tag_id);
        $item_tag['prod_id']=$id;
        $item_tag['table_name']="women-sharees";
        $item_tag['tag_text']=$request->get('tag_text');
        $item_tag->save();
        Session::flash('updated_item','The Item has been updated');
        return redirect('/womensharees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Women_sharee::findOrFail($id);
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
        return redirect('/womensharees');
    }
}
