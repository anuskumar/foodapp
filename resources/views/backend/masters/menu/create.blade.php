@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Create Menu</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
    <h4 class="page-title">Create Menu</h4>
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
            <div class="card-header">Create Menu
                <span class="float-right">
                    <a style="float: right;" class="btn btn-primary" href="{{ route('menus.index') }}">Back</a>
                </span>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                {!! Form::open(array('route' => 'menus.store', 'method'=>'POST' ,'enctype'=>'multipart/form-data')) !!}
                @csrf
                <div class="form-group mt-2">
                    <strong>Restaurant:</strong>

                       <select class="form-control mt-2 select2" data-toggle="select2" name="menu_restaurants">
                        <option value="">Select </option>
                        @foreach ($restaurants as $res )
                           <option value="{{ $res->id }}">{{ $res->restaurant_name }}</option>
                        @endforeach
                       </select>
                </div>
                <div class="form-group mt-2">
                    <strong>Dish</strong>

                       <select class="form-control mt-2 select2" data-toggle="select2" name="menu_dish">
                        <option value="">Select </option>
                        @foreach ($dishes as $dish )
                           <option value="{{ $dish->id }}">{{ $dish->dishes_name }}</option>
                        @endforeach
                       </select>
                </div>


                    <div class="form-group mt-2">
                        <strong>Item Description:</strong>

                            <textarea class="form-control mt-2" rows="4" name="menu_description"></textarea>

                    </div>
                    <div class="form-group mt-2">
                        <strong>Item Price:</strong>

                           <input type="number" class="form-control" name="menu_price">

                    </div>
                    <div class="form-group mt-2">
                        <strong>Item Selling price:</strong>

                           <input type="number" class="form-control" name="menu_selling_price">

                    </div>

                    <input type="hidden" value=" {{ $userId = Auth::check() ? Auth::id() : true; }}" name="menu_added_by" />
                </div>
                <div class="col-md-6">

                    <div class="form-group mt-2">
                        <strong>Featuring section:</strong>
                        <div class="form-check form-switch mt-3">
                            <input type="checkbox" class="form-check-input" name="menu_featured" id="customSwitch1">
                            <label class="form-check-label" for="customSwitch1" >Item Featured</label>
                        </div>


                    </div>
                    <br>
                    <div class="form-group mt-2">
                       <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" name="menu_todays_special" id="customSwitch2">
                            <label class="form-check-label" for="customSwitch2">Todays Special</label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mt-2">
                       <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" name="menu_deliverable" id="customSwitch3">
                            <label class="form-check-label" for="customSwitch3">Deliverable</label>
                        </div>
                    </div>
                     <br>
                    <div class="form-group mt-2">
                       <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" name="menu_available" id="customSwitch4">
                            <label class="form-check-label" for="customSwitch4">Available</label>
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary mt-2 float-right" style="float: right;">Submit</button>
                    {!! Form::close() !!}
                </div>

            </div>
            </div>
        </div>
    </div>
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $('.form-check-input').change(function(){
        this.value = (Number(this.checked));
    });
    </script>
</div>
@endsection
