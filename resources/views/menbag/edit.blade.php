@extends('layouts.master')
@section('content')
    <div class="well">
        <div class="row">
            <div class="col-lg-20">

                <h2 class="row" style="padding-left: 60px;color: lightslategrey;"> Edit Men's Bag
                    <a href="/products"><span class="glyphicon glyphicon-circle-arrow-left"  data-toggle="tooltip" data-original-title="Back to choosing products" style="color: red;"></span></a>
                </h2>
                {!!Form::model($item, ['method'=>'PATCH','action'=>['MenbagController@update',$item->item_id],'files'=>true]) !!}
                {{ csrf_field() }}

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="title" class="col-2 col-form-label">Product Title :</label>
                    <input class="form-control" name ="title" type="text" placeholder="Enter Title" value="{{$item->title}}"  required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="description" class="col-2 col-form-label">Description :</label>
                    <textarea class="form-control" name ="description" rows= "3" type="text" placeholder="Enter Description" value="{{$item->description}}"  required></textarea>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="price" class="col-2 col-form-label">Price :</label>
                    <input class="form-control" type="number" name="price" min="1" placeholder = "Enter Price" value="{{$item->price}}"  required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="quantity" class="col-2 col-form-label">Quantity :</label>
                    <input class="form-control" type="number" name="quantity" min="1" placeholder = "Enter Amount" value="{{$item->quantity}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="color" class="col-2 col-form-label">Color :</label>
                    <input class="form-control" name ="color" type="text" placeholder="Enter Color" value="{{$item->color}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="length" class="col-2 col-form-label">Length :</label>
                    <input class="form-control" name ="length" type="text" placeholder="Enter Length" value="{{$item->title}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="width" class="col-2 col-form-label">Width :</label>
                    <input class="form-control" name ="width" type="text" placeholder="Enter Width" value="{{$item->width}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="material" class="col-2 col-form-label">Material :</label>
                    <input class="form-control" name ="material" type="text" placeholder="Material" value="{{$item->material}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="strap" class="col-2 col-form-label">Strap :</label>
                    <input class="form-control" name ="strap" type="text" placeholder="Strap" value="{{$item->strap}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="strap_length" class="col-2 col-form-label">Strap Length :</label>
                    <input class="form-control" name ="strap_length" type="text" placeholder="Strap Length" value="{{$item->strap_length}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="strap_material" class="col-2 col-form-label">Strap Material :</label>
                    <input class="form-control" name ="strap_material" type="text" placeholder="Strap Material" value="{{$item->strap_material}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="lining" class="col-2 col-form-label">Lining :</label>
                    <input class="form-control" name ="lining" type="text" placeholder="Lining" value="{{$item->lining}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="handle" class="col-2 col-form-label">Handle :</label>
                    <input class="form-control" name ="handle" type="text" placeholder="Handle" value="{{$item->handle}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="measurementunit" class="col-2 col-form-label">Measurement Unit :</label>
                    <input class="form-control" name ="measurementunit" type="text" placeholder="Measurement Unit" value="{{$item->measurementunit}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="occasion" class="col-2 col-form-label">Occasion :</label>
                    <select name="occasion" class="form-control" placeholder="Choose Occasion:" value="{{$item->occasion}}" required>
                        <option>Casual</option>
                        <option>Exclusive</option>
                    </select>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image1" class="col-2 col-form-label">Upload Image 1 for thumbnail :</label>
                    <input class="form-control" name ="image1" type="file" placeholder="Choose a Thumbnail Image" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image2" class="col-2 col-form-label">Upload Image 2 :</label>
                    <input class="form-control" name ="image2" type="file" placeholder="Choose an Image"  required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image3" class="col-2 col-form-label">Upload Image 3 :</label>
                    <input class="form-control" name ="image3" type="file" placeholder="Choose another Image" required>
                </div>


                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="shop_id" class="col-2 col-form-label">Shop ID :</label>
                    <input class="form-control" name ="shop_id" type="text" placeholder="Enter Your Shop ID" value="{{$item->shop_id}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="tag_text" class="col-2 col-form-label">Tag :</label>
                    <input class="form-control" name ="tag_text" type="text" placeholder="Choose a Tag For Search" value="{{$item->item_tags->tag_text}}" required>
                </div>
                <br/>
                <br/>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-5" >
                        {!! Form::submit('Update', ['class' => 'btn btn-success'] ) !!}
                    </div>
                </div>

                {!! Form::close()  !!}

            </div>
        </div>
    </div>
@endsection