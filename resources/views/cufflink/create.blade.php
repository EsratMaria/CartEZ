@extends('layouts.master')
@section('content')
    <div class="well">
        <div class="row">
            <div class="col-lg-20">

                <h2 class="row" style="padding-left: 60px;color: lightslategrey;"> Men's Cufflink Insert
                    <a href="/products"><span class="glyphicon glyphicon-circle-arrow-left"  data-toggle="tooltip" data-original-title="Back to choosing products" style="color: red;"></span></a>
                </h2>
                {!!Form::open(['method'=>'POST', 'action'=>'CufflinkController@store','files'=>true ])!!}
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
                    <label for="length" class="col-2 col-form-label">Length :</label>
                    <input class="form-control" name ="length" type="text" placeholder="Enter Length" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="width" class="col-2 col-form-label">Width :</label>
                    <input class="form-control" name ="width" type="text" placeholder="Enter Width" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="material" class="col-2 col-form-label">Material :</label>
                    <input class="form-control" name ="material" type="text" placeholder="Material" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="height" class="col-2 col-form-label">Height :</label>
                    <input class="form-control" name ="height" type="text" placeholder="Height " required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="weight" class="col-2 col-form-label">Weight :</label>
                    <input class="form-control" name ="weight" type="text" placeholder="Weight" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="shape" class="col-2 col-form-label">Shape :</label>
                    <input class="form-control" name ="shape" type="text" placeholder="Shape" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="measurementunit" class="col-2 col-form-label">Measurement Unit :</label>
                    <input class="form-control" name ="measurementunit" type="text" placeholder="Measurement Unit" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="occasion" class="col-2 col-form-label">Occasion :</label>
                    <select name="occasion" class="form-control" placeholder="Choose Occasion:" required>
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