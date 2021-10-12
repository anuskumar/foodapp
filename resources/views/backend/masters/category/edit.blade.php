@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Category edit</h4>
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
            <div class="card-header">Edit Category
                <span class="float-right">
                    <a class="btn btn-primary " style="float: right;" href="{{ route('categories.index') }}">Categories</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($categories, ['route' => ['categories.update', $categories->id], 'method'=>'PATCH','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        <strong>Category Name:</strong>
                        {{-- {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!} --}}
                        <input type="text" name="categories_name" value="{{$categories->categories_name}}
                        "  class="form-control"/>
                    </div>

                    <div class="form-group mt-2">
                        {{-- <strong>Image:</strong> --}}
                        @if($categories->categories_image )
                        <td>
                            <img src="{{ URL::to('/') }}/image/categories/{{ $categories->categories_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>
                        </td>
                        @else
                        {{ "NO DISPLAY IMAGE" }}
                        @endif
                        <br>
                        <input type="hidden" name="current_image" value="{{ $categories->categories_image }}" />

                        <br>
                         <strong>Update Image</strong>
                         <br>
                            <input class="form-control mt-2" type="file" id="inputGroupFile04" name="categories_image">

                    </div>

                    <button type="submit" style="float: right;" class="btn btn-primary mt-2">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
