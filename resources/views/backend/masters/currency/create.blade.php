@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Currency</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
    <h4 class="page-title">Create Currency</h4>
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
            <div class="card-header">Create Currency
                <span class="float-right">
                    <a style="float: right;" class="btn btn-primary" href="{{ route('currency.index') }}">Back</a>
                </span>
            </div>

            <div class="card-body">
                {!! Form::open(array('route' => 'currency.store', 'method'=>'POST' ,'enctype'=>'multipart/form-data')) !!}
                @csrf
                    <div class="form-group">
                        <strong>Currency name:</strong>

                        {!! Form::text('currency_name', null, array('placeholder' => 'Currency name','class' => 'form-control mt-2')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Currency Code:</strong>

                        {!! Form::text('currency_code', null, array('placeholder' => 'Currency code','class' => 'form-control mt-2')) !!}
                    </div>


                    <input type="hidden" value=" {{ $userId = Auth::check() ? Auth::id() : true; }}" name="currency_added_by" />
                    <button type="submit" class="btn btn-primary mt-2 float-right" style="float: right;">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
