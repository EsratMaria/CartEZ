@extends('layouts.master')
@section('content')
    <div class="well">
        <div class="row">
            <div class="col-lg-20">

                <h2 class="row" style="padding-left: 60px;color: lightslategrey;"> Women's Shalwar Kameez Insert
                    <a href="/products"><span class="glyphicon glyphicon-circle-arrow-left"  data-toggle="tooltip" data-original-title="Back to choosing products" style="color: red;"></span></a>
                </h2>
                {!!Form::model($item, ['method'=>'PATCH','action'=>['Shal_kamController@update',$item->item_id],'files'=>true]) !!}
                {{ csrf_field() }}


                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="title" class="col-2 col-form-label">Product Title :</label>
                    <input class="form-control" name ="title" type="text" placeholder="Enter Title" value="{{$item->title}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="description" class="col-2 col-form-label">Description :</label>
                    <textarea class="form-control" name ="description" rows= "3" type="text" placeholder="Enter Description" value="{{$item->description}}" required></textarea>

                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="price" class="col-2 col-form-label">Price :</label>
                    <input class="form-control" type="number" name="price" min="1" placeholder = "Enter Price" value="{{$item->price}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="quantity" class="col-2 col-form-label">Quantity :</label>
                    <input class="form-control" type="number" name="quantity" min="1" placeholder = "Enter Amount" value="{{$item->quantity}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="fabric" class="col-2 col-form-label">Fabric :</label>
                    <input class="form-control" name ="fabric" type="text" placeholder="Enter Fabric" value="{{$item->fabric}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="dupatta_fabric" class="col-2 col-form-label">Dupatta Fabric :</label>
                    <input class="form-control" name ="dupatta_fabric" type="text" placeholder="Enter Dupatta Fabric" value="{{$item->dupatta_fabric}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="bottom_fabric" class="col-2 col-form-label">Bottom Fabric :</label>
                    <input class="form-control" name ="bottom_fabric" type="text" placeholder="Enter Bottom Fabric" value="{{$item->bottom_fabric}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="color" class="col-2 col-form-label">Color :</label>
                    <input class="form-control" name ="color" type="text" placeholder="Enter Color" value="{{$item->color}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="dupatta_color" class="col-2 col-form-label">Dupatta Color :</label>
                    <input class="form-control" name ="dupatta_color" type="text" placeholder="Enter Dupatta Color" value="{{$item->dupatta_color}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="bottom_color" class="col-2 col-form-label">Bottom Color :</label>
                    <input class="form-control" name ="bottom_color" type="text" placeholder="Enter Bottom Color" value="{{$item->bottom_color}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="size" class="col-2 col-form-label">Size :</label>
                    <select name="size" class="form-control" placeholder="Choose a Size"  value="{{$item->size}}" required>
                        <option>32</option>
                        <option>34</option>
                        <option>36</option>
                        <option>38</option>
                        <option>40</option>
                        <option>42</option>
                        <option>44</option>
                        <option>46</option>
                    </select>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="value_addition" class="col-2 col-form-label">Value Addition :</label>
                    <input class="form-control" name ="value_addition" type="text" placeholder="Enter Value Addition" value="{{$item->value_addition}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="dupatta_value_addition" class="col-2 col-form-label">Dupatta Value Addition :</label>
                    <input class="form-control" name ="dupatta_value_addition" type="text" placeholder="Enter Dupatta Value Addition" value="{{$item->dupatta_value_addition}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="bottom_value_addition" class="col-2 col-form-label">Bottom Value Addition :</label>
                    <input class="form-control" name ="bottom_value_addition" type="text" placeholder="Enter Bottom Value Addition" value="{{$item->bottom_value_addition}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="sleeve" class="col-2 col-form-label">Sleeve :</label>
                    <input class="form-control" name ="sleeve" type="text" placeholder="Enter Sleeve" value="{{$item->sleeve}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="length" class="col-2 col-form-label">Length :</label>
                    <input class="form-control" name ="length" type="text" placeholder="Enter Length" value="{{$item->length}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="waist" class="col-2 col-form-label">Waist :</label>
                    <input class="form-control" name ="waist" type="text" placeholder="Enter Waist" value="{{$item->waist}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="lining" class="col-2 col-form-label">Lining :</label>
                    <input class="form-control" name ="lining" type="text" placeholder="Enter Lining" value="{{$item->lining}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="occasion" class="col-2 col-form-label">Occasion :</label>
                    <select name="occasion" class="form-control" placeholder="Choose occasion:" value="{{$item->occasion}}" required>
                        <option>Casual</option>
                        <option>Exclusive</option>
                        <option>Semi Dressy</option>
                    </select>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="event" class="col-2 col-form-label">Event :</label>
                    <input class="form-control" name ="event" type="text" placeholder="Enter Event" value="{{$item->event}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="care" class="col-2 col-form-label">Care :</label>
                    <textarea class="form-control" name ="care" rows= "3" type="text" placeholder="Enter Care" value="{{$item->care}}" required></textarea>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image1" class="col-2 col-form-label">Upload Image 1 for thumbnail :</label>
                    <input class="form-control" name ="image1" type="file" placeholder="Choose a Thumbnail Image" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image2" class="col-2 col-form-label">Upload Image 2 :</label>
                    <input class="form-control" name ="image2" type="file" placeholder="Choose an Image" required>
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
                <div class="form-group ">
                    <div class="col-lg-10 col-lg-offset-5">
                        {!! Form::submit('Update', ['class' => 'btn btn-success'] ) !!}
                    </div>
                </div>

                {!! Form::close()  !!}

            </div>
        </div>
    </div>
@endsection