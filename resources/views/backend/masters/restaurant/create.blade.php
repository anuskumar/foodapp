@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Create Restaurant</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
    <h4 class="page-title">Create Restaurant</h4>
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
            <div class="card-header">Create Restaurant
                <span class="float-right">
                    <a style="float: right;" class="btn btn-primary" href="{{ route('restaurant.index') }}">Back</a>
                </span>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                {!! Form::open(array('route' => 'restaurant.store', 'method'=>'POST' ,'enctype'=>'multipart/form-data')) !!}
                @csrf
                    <div class="form-group">
                        <strong>Restaurant Name:</strong>

                        {!! Form::text('restaurant_name', null, array('placeholder' => 'Restaurant name','class' => 'form-control mt-2')) !!}
                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Image:</strong>

                            <input class="form-control mt-2" type="file" id="inputGroupFile04" name="restaurant_image">

                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Email Id:</strong>

                            <input class="form-control mt-2" type="email" id="inputGroupFile04" name="restaurant_email_id">

                    </div>

                    <div class="form-group mt-2">
                        <strong>Restaurant Currency:</strong>

                        <select class="form-control mt-2 select2" data-toggle="select2" name="restaurant_currency">
                            <option value="">Select </option>
                            @foreach ($currency as $res )
                               <option value="{{ $res->id }}">{{ $res->currency_name.'('.$res->currency_code.')' }}</option>
                            @endforeach
                           </select>

                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Address:</strong>

                            <textarea class="form-control mt-2" rows="4" name="restaurant_address"></textarea>

                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Description:</strong>

                            <textarea class="form-control mt-2" rows="4" name="restaurant_description"></textarea>

                    </div>
                    <div class="form-group mt-2">
                        <strong>Open or Closed ?</strong>

                           <select class="form-control mt-2" name="restaurant_openclose_status">
                            <option value="">Select </option>
                               <option value="1">Yes</option>
                               <option value="0">No</option>
                           </select>
                    </div>
                    <input type="hidden" value=" {{ $userId = Auth::check() ? Auth::id() : true; }}" name="restaurant_added_by" />
                </div>
                <div class="col-md-6">

                    <div class="form-group mt-2">
                        <strong>Latitude:</strong>

                            <input type="text" class="form-control mt-2" name="restaurant_latitude">

                    </div>

                    <div class="form-group mt-2">
                        <strong>Longitude:</strong>

                            <input type="text" class="form-control mt-2" name="restaurant_longitude">

                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Default Tax (in %):</strong>

                            <input type="text" class="form-control mt-2" name="restaurant_default_tax">

                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Contact Number:</strong>

                            <input type="text" class="form-control mt-2" name="restaurant_contact_number">

                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Opening Time:</strong>

                            <input type="time" class="form-control mt-2" name="restaurant_opening_time">

                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant Closing Time:</strong>

                            <input type="time" class="form-control mt-2" name="restaurant_closing_time">

                    </div>
                    <div class="form-group mt-2">
                        <strong>Available Delivery :</strong>

                           <select class="form-control mt-2" name="restaurant_avail_delivery">
                            <option value="">Select </option>
                               <option value="1">Yes</option>
                               <option value="0">No</option>
                           </select>
                    </div>
                    <div class="form-group mt-2">
                        <strong> Restaurant Status :</strong>

                           <select class="form-control mt-2" name="restaurant_active_status">
                               <option value="">Select </option>
                               <option value="1">Active</option>
                               <option value="0">Inactive</option>
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
