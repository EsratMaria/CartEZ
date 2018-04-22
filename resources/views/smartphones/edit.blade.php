@extends('layouts.master')
@section('content')
    <div class="well">
        <div class="row">
            <div class="col-lg-20">

                <h2 class="row" style="padding-left: 60px;color: lightslategrey;">Edit Smartphone Items
                    <a href="/products"><span class="glyphicon glyphicon-circle-arrow-left"  data-toggle="tooltip" data-original-title="Back to choosing products" style="color: red;"></span></a>
                </h2>
                {!!Form::model($item, ['method'=>'PATCH','action'=>['SmartphonesController@update',$item->item_id],'files'=>true]) !!}
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
                    <label for="color" class="col-2 col-form-label">Color :</label>
                    <input class="form-control" name ="color" type="text" placeholder="Enter Color" value="{{$item->color}}" required>
                </div>

                {{--<div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">--}}
                    {{--<label for="date" class="col-2 col-form-label">Insert Date :</label>--}}
                    {{--<input class="form-control" name ="date" type="date" placeholder="Enter Date" value="{{$item->date}}" required>--}}
                {{--</div>--}}
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="brand" class="col-2 col-form-label">Brand :</label>
                    <input class="form-control" name ="brand" type="text" placeholder="Enter Brand" value="{{$item->brand}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="SKU" class="col-2 col-form-label">SKU :</label>
                    <input class="form-control" name ="SKU" type="text" placeholder="Enter SKU" value="{{$item->SKU}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="weight" class="col-2 col-form-label">Weight :</label>
                    <input class="form-control" name ="weight" type="text" placeholder="Enter Weight" value="{{$item->weight}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="manufacture" class="col-2 col-form-label">Manufacture :</label>
                    <input class="form-control" name ="manufacture" type="text" placeholder="Enter Manufacture" value="{{$item->manufacture}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="warranty" class="col-2 col-form-label">Warranty :</label>
                    <input class="form-control" name ="warranty" type="text" placeholder="Enter warranty"  value="{{$item->warranty}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="display" class="col-2 col-form-label">Display :</label>
                    <input class="form-control" name ="display" type="text" placeholder="Enter Display" value="{{$item->display}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="front_cam" class="col-2 col-form-label">Front Camera :</label>
                    <input class="form-control" name ="front_cam" type="text" placeholder="Front Camera " value="{{$item->front_cam}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="back_cam" class="col-2 col-form-label">Back Camera :</label>
                    <input class="form-control" name ="back_cam" type="text" placeholder="Back Camera " value="{{$item->back_cam}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="system_storage" class="col-2 col-form-label">System Storage :</label>
                    <input class="form-control" name ="system_storage" type="text" placeholder="System Storage" value="{{$item->system_storage}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="ram" class="col-2 col-form-label">RAM :</label>
                    <input class="form-control" name ="ram" type="text" placeholder="Enter RAM" value="{{$item->ram}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="sim_card" class="col-2 col-form-label">Sim Card :</label>
                    <input class="form-control" name ="sim_card" type="text" placeholder="Sim Card type" value="{{$item->sim_card}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="processor" class="col-2 col-form-label">Processor :</label>
                    <input class="form-control" name ="processor" type="text" placeholder="Enter Processor" value="{{$item->processor}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="cpu_speed" class="col-2 col-form-label">CPU Speed :</label>
                    <input class="form-control" name ="cpu_speed" type="text" placeholder="Enter CPU Speed" value="{{$item->cpu_speed}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="battery_mah" class="col-2 col-form-label">Battery mAh :</label>
                    <input class="form-control" name ="battery_mah" type="text" placeholder="Enter Battery mAh" value="{{$item->battery_mah}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="connectivity" class="col-2 col-form-label">Connectivity :</label>
                    <input class="form-control" name ="connectivity" type="text" placeholder="Enter Connectivity Type" value="{{$item->connectivity}}" required>
                </div>


                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="model" class="col-2 col-form-label">Model:</label>
                    <input class="form-control" name ="model" type="text" placeholder="Enter Model" value="{{$item->model}}" required>
                </div>

                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image1" class="col-2 col-form-label">Upload Image 1 for thumbnail :</label>
                    <input class="form-control" name ="image1" type="file" placeholder="Choose a Thumbnail Image" value="" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image2" class="col-2 col-form-label">Upload Image 2 :</label>
                    <input class="form-control" name ="image2" type="file" placeholder="Choose an Image" value="" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="image3" class="col-2 col-form-label">Upload Image 3 :</label>
                    <input class="form-control" name ="image3" type="file" placeholder="Choose another Image" value="" required>
                </div>


                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="shop_id" class="col-2 col-form-label">Shop ID :</label>
                    <input class="form-control" name ="shop_id" type="text" placeholder="Enter Your Shop ID" value="{{$item->shop_id}}" required>
                </div>
                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                    <label for="tag_text" class="col-2 col-form-label">Tag :</label>
                    <input class="form-control" name ="tag_text" type="text" placeholder="Choose a Tag For Search"  value="{{$item->item_tags->tag_text}}"  required>
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