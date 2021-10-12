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
    <h4 class="page-title">Edit User</h4>
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
            <div class="card-header">Edit user
                <span class="float-right">
                    <a class="btn btn-primary" style="float: right" href="{{ route('users.index') }}">Users</a>
                </span>
            </div>
            <div class="row"><div class="col-md-6">
            <div class="card-body">

                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'PATCH','enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                    <div class="form-group mt-2">
                        <strong>Restaurant:</strong>
                        <select class="form-control" name="restaurant">
                            <option value="">Select</option>
                            @foreach ( $restaurants as $val )

                            <option value="{{ $val->id }}" @if ($val->id == $user->restaurant)
                                {{ "selected" }}

                            @endif>{{ $val->restaurant_name.' '.$val->restaurant_address }}</option>

                            @endforeach

                        </select>
                    </div>

            </div>
        </div>
    <div class="col-md-6">
        <div class="form-group mt-2">
            {{-- <strong>Image:</strong> --}}

            @if($user->profile_image)
            <td>
                <img src="{{ URL::to('/') }}/image/profile_images/{{ $user->profile_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>

            </td>
            @else
            {{ "NO DISPLAY IMAGE" }}
            @endif
            <br>
            <input type="hidden" name="current_image" value="{{ $user->profile_image }}" />
            <br>
             <strong>Update Image</strong>
             <br>
                <input class="form-control mt-2" type="file" id="inputGroupFile04" name="profile_image">

        </div>

        <div class="form-group">
            <label for="my-input">Address</label>
            <textarea id="my-input" class="form-control"  name="address"  >
            {{ $user->address }}
            </textarea>
        </div>
        <div class="form-group">
            <label>Gender</label>

            <select class="form-control" name="gender">
                <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">other</option>
            </select>

        </div>
        <div class="form-group mt-2">
            <strong>Is Active:</strong>

                <select class="form-control" name="is_active">
                    <option value="{{ $user->is_active }}">
                    @if($user->is_active==0){{ "no" }}
                @else{{ "yes" }}
            @endif</option>

                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>

        </div>
        <br/>

                    <button type="submit" style="float: right;" class="btn btn-primary">Submit</button>
                    <br>

                {!! Form::close() !!}

</div>
            </div>
        </div>
    </div>
</div>
@endsection
