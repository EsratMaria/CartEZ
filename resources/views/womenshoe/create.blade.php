@extends('layouts.master')
@section('content')
    <div class="well">
        <div class="row">
            <div class="col-lg-20">

                <h2 class="row" style="padding-left: 60px;color: lightslategrey;"> Women's Shoe Insert
                    <a href="/products"><span class="glyphicon glyphicon-circle-arrow-left"  data-toggle="tooltip" data-original-title="Back to choosing products" style="color: red;"></span></a>
                </h2>
                {!!Form::open(['method'=>'POST', 'action'=>'WomenshoeController@store','files'=>true ])!!}
                {{ csrf_field() }}

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="title" class="col-2 col-form-label">Product Title :</label>
                    <input class="form-control" name ="title" type="text" placeholder="Enter Title" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="description" class="col-2 col-form-label">Description :</label>
                    <textarea class="form-control" name ="description" rows= "3" type="text" placeholder="Enter Description" required></textarea>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="price" class="col-2 col-form-label">Price :</label>
                    <input class="form-control" type="number" name="price" min="1" placeholder = "Enter Price" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="quantity" class="col-2 col-form-label">Quantity :</label>
                    <input class="form-control" type="number" name="quantity" min="1" placeholder = "Enter Amount" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="color" class="col-2 col-form-label">Color :</label>
                    <input class="form-control" name ="color" type="text" placeholder="Enter Color" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="size" class="col-2 col-form-label">Size :</label>
                    <select name="size" class="form-control" placeholder="Choose a Size" required>
                        <option>38</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                        <option>44</option>
                    </select>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="upper" class="col-2 col-form-label">Upper :</label>
                    <input class="form-control" name ="upper" type="text" placeholder="Upper Type" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="upper_value_addition" class="col-2 col-form-label">Upper Value Addition :</label>
                    <input class="form-control" name ="upper_value_addition" type="text" placeholder="Upper Value Addition Type" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="lining" class="col-2 col-form-label">Lining :</label>
                    <input class="form-control" name ="lining" type="text" placeholder="Lining Type" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="sole" class="col-2 col-form-label">Sole :</label>
                    <input class="form-control" name ="sole" type="text" placeholder="Sole Type" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="toe" class="col-2 col-form-label">Toe :</label>
                    <input class="form-control" name ="toe" type="text" placeholder="Toe Type" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="straps" class="col-2 col-form-label">Straps :</label>
                    <input class="form-control" name ="straps" type="text" placeholder="Straps Type" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="heel" class="col-2 col-form-label">Heel :</label>
                    <input class="form-control" name ="heel" type="text" placeholder="Heel Type" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="occasion" class="col-2 col-form-label">Occasion :</label>
                    <input class="form-control" name ="occasion" type="text" placeholder="Occasion" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="event" class="col-2 col-form-label">Event :</label>
                    <input class="form-control" name ="event" type="text" placeholder="Enter Event" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="care" class="col-2 col-form-label">Care :</label>
                    <textarea class="form-control" name ="care" rows= "3" type="text" placeholder="Enter Care" required></textarea>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="type" class="col-2 col-form-label">Type :</label>
                    <select name="type" class="form-control" placeholder="Choose type:" required>
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
                    <input class="form-control" name ="shop_id" type="text" placeholder="Enter Your Shop ID" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="tag_text" class="col-2 col-form-label">Tag :</label>
                    <input class="form-control" name ="tag_text" type="text" placeholder="Choose a Tag For Search" required>
                </div>
                <br/>
                <br/>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-5" >
                        {!! Form::submit('Add Product', ['class' => 'btn btn-success'] ) !!}
                    </div>
                </div>

                {!! Form::close()  !!}

            </div>
        </div>
    </div>
@endsection