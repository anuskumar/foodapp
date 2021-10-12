@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Create Dish</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
    <h4 class="page-title">Create Dish</h4>
</div>
<div class="container">
    <div class="col-md-12 justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Create Dish
                <span class="float-right">
                    <a style="float: right;" class="btn btn-primary" href="{{ route('dishes.index') }}">Back</a>
                </span>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                {!! Form::open(array('route' => 'dishes.store', 'method'=>'POST' ,'enctype'=>'multipart/form-data')) !!}
                @csrf
                    <div class="form-group">
                        <strong>Dish Name:</strong>

                        {!! Form::text('dishes_name', null, array('placeholder' => 'Dish name','class' => 'form-control mt-2')) !!}
                    </div>
                    <div class="form-group mt-2">
                        <strong>Dish Image:</strong>

                            <input class="form-control mt-2" type="file" id="inputGroupFile04" name="dishes_image">

                    </div>

                    <div class="form-group mt-2">
                        <strong>Dish Description:</strong>

                            <textarea class="form-control mt-2" rows="4" name="dishes_description"></textarea>

                    </div>
                    <div class="form-group mt-2">
                        <strong>Category</strong>

                           <select class="form-control mt-2" name="dishes_category">
                            <option value="">Select </option>
                            @foreach ($categories as $cat )
                               <option value="{{ $cat->id }}">{{ $cat->categories_name }}</option>
                            @endforeach
                           </select>
                    </div>
                    <input type="hidden" value=" {{ $userId = Auth::check() ? Auth::id() : true; }}" name="dishes_added_by" />
                </div>
                <div class="col-md-6">




                    <div class="form-group mt-2">
                        <strong>Sub Category :</strong>

                           <select class="form-control mt-2" name="dishes_subcategory">
                            <option value="">Select </option>
                            @foreach ($subcategories as $subcat )

                            <option value="{{ $subcat->id }}">{{ $subcat->subcategory_name }}</option>

                            @endforeach


                           </select>
                    </div>
                    <div class="form-group mt-2">
                        <strong> Food Type :</strong>

                           <select class="form-control mt-2" name="dishes_food_type">
                            <option value="">Select </option>

                               @foreach ($foodtypes as $foodtype )
                               <option value="{{ $foodtype->id }}">{{ $foodtype->food_types_name }} </option>

                               @endforeach


                           </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 float-right" style="float: right;">Submit</button>
                    {!! Form::close() !!}
                </div>

            </div>
            </div>
        </div>
    </div>
</div>
@endsection
