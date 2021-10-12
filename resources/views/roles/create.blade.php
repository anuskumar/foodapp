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
    <h4 class="page-title">Create Role</h4>
</div>
<div class="container">
    <div class="justify-content-center">
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
            <div class="card-header">Create role
                <span class="float-right">
                    <a class="btn btn-primary" style="float:right;" href="{{ route('roles.index') }}">Roles</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="form-group col-md-3">
                        <strong>Name</strong>
                    </div>

                <div class="col-md-6">

                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>


                <div class="row">

                    @foreach($permission as $value)
                    <div class="alert alert-light col-3" role="alert">
                        <table class="table">
                            <tr>
                                <td>
                        {{ Str::ucfirst($value->name) }}
                                </td>
                                <td>
                        <input name="permission[]" value="{{ $value->id }}" type="checkbox" id="switch{{$value->id }}"  data-switch="success"/>
                        <label for="switch{{ $value->id }}" data-on-label="Yes" data-off-label="No"></label>
                                </td>
                            </tr>
                    </table>
                    </div>
                    @endforeach
                </div>

                <div class="d-grid">
                    <button type="submit" style="float:right;" class="btn btn-primary">Submit</button>
                                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
