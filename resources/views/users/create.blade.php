@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript: void(0);">Create User</a></li>

        </ol>
    </div>
    <h4 class="page-title">Create User</h4>
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
        <div class="card col-md-12">
            <div class="card-header">Create user
                <span class="float-right">
                    <a style="float: right;" class="btn btn-primary" href="{{ route('users.index') }}">Users</a>
                </span>
            </div>
        <div class="row">
            <div class="col-md-6">
                 <div class="card-body">
                {!! Form::open(array('route' => 'users.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                    <div class="form-group  mt-2">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group  mt-2">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group  mt-2">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group  mt-2">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group mt-2">
                        <strong>Role:</strong>
                        {{-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} --}}
                        <select class="form-control" name="roles[]">
                            <option>Select</option>
                            @foreach ( $roles as $val )

                            <option value="{{ $val }}">{{ $val }}</option>

                            @endforeach

                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant:</strong>
                        <select class="form-control" name="restaurant">
                            <option value="">Select</option>
                            @foreach ( $restaurant as $val )

                            <option value="{{ $val->id }}">{{ $val->restaurant_name.' '.$val->restaurant_address }}</option>

                            @endforeach

                        </select>
                    </div>

            </div>
         </div>
         <div class="col-md-6">
            <div class="card-body">

                <div class="form-group mt-2">
                    <strong>Image:</strong>

                        <input class="form-control mt-2" type="file" id="inputGroupFile04" name="profile_image">

                </div>
                <div class="form-group mt-2">
                    <strong>Gender:</strong>

                        <select class="form-control" name="gender">
                            <option>Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                        </select>

                </div>
                <div class="form-group mt-2">
                    <strong>Address:</strong>

                      <textarea name="address" id="" class="form-control" cols="30" rows="5"></textarea>

                </div>

                <div class="form-group mt-2">
                    <strong>Is Active:</strong>

                        <select class="form-control" name="is_active">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>

                </div>

                <br/>

                    <button type="submit" style="float: right;" class="btn btn-primary">Submit</button>
                    <br>

            </div>
         </div>
         {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection
