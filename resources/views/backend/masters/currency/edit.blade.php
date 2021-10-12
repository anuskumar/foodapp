@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);"> Edit currency</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Currency Edit</h4>
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
            <div class="card-header">Edit Currency
                <span class="float-right">
                    <a class="btn btn-primary" style="float: right;" href="{{ route('currency.index') }}">Back</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($data,['route' => ['currency.update', $data->id], 'method'=>'PATCH','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        @csrf
                        <strong>currency Name:</strong>
                        {{-- {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!} --}}
                        <input type="text" name="currency_name" value="{{ $data->currency_name }}
                        "class="form-control"/>
                    </div>
                    <div class="form-group">

                        <strong>currency Code:</strong>
                        {{-- {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!} --}}
                        <input type="text" name="currency_code" value="{{ $data->currency_code }}
                        "class="form-control"/>
                    </div>


                    </div>

                    <button type="submit" style="float: right;" class="btn btn-primary mt-3">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
