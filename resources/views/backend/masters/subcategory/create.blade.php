@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Subcategory</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
    <h4 class="page-title">Create Subcategory</h4>
</div>
<div class="container">
    <div class=" col-md-6 justify-content-center">
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
            <div class="card-header">List subcategories
                <span class="float-right">
                    <a style="float: right;" class="btn btn-primary" href="{{ route('subcategory.index') }}">Back</a>
                </span>
            </div>

            <div class="card-body">
                {!! Form::open(array('route' => 'subcategory.store', 'method'=>'POST' ,'enctype'=>'multipart/form-data')) !!}
                @csrf
                    <div class="form-group">
                        <strong>Sub category name:</strong>

                        {!! Form::text('subcategory_name', null, array('placeholder' => 'Subcategory name','class' => 'form-control mt-2')) !!}
                    </div>

                    <div class="form-group mt-2">
                        <strong>Main Category:</strong>

                        <select class="form-control" required="required" name="subcategory_category">
                            <option>Select</option>
                            @foreach ($category as $key )
                            <option value="{{ $key->id }}">{{ $key->categories_name }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="form-group mt-2">
                        <strong>Image:</strong>

                            <input class="form-control mt-2" type="file" id="inputGroupFile04" name="subcategory_image">

                    </div>
                    <input type="hidden" value=" {{ $userId = Auth::check() ? Auth::id() : true; }}" name="subcategory_added_by" />
                    <button type="submit" class="btn btn-primary mt-2 float-right" style="float: right;">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
