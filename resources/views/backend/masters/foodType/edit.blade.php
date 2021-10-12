@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Food Types</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Food type edit</h4>
</div>
<div class="container">
    <div class=" col-md-8 justify-content-center">
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
            <div class="card-header">Edit Food Type
                <span class="float-right">
                    <a class="btn btn-primary" style="float: right;" href="{{ route('food_type.index') }}">Back</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($data,['route' => ['food_type.update', $data->id], 'method'=>'PATCH','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        @csrf
                        <strong>Food type Name:</strong>
                        {{-- {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!} --}}
                        <input type="text" name="food_types_name" value="{{ $data->food_types_name }}
                        "class="form-control"/>
                    </div>
                    <div class="form-group mt-2">
                        {{-- <strong>Image:</strong> --}}

                        @if($data->food_types_image)
                        <td>
                            <img src="{{ URL::to('/') }}/image/food_types/{{ $data->food_types_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>

                        </td>
                        @else
                        {{ "NO DISPLAY IMAGE" }}
                        @endif
                        <br>
                        <input type="hidden" name="current_image" value="{{ $data->food_types_image }}" />
                        <br>
                         <strong>Update Image</strong>
                         <br>
                            <input class="form-control mt-2" type="file" id="inputGroupFile04" name="food_types_image">

                    </div>

                    <button type="submit" style="float: right;" class="btn btn-primary mt-3">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
