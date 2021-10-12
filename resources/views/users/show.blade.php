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
    <h4 class="page-title"> Show User</h4>
</div>
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">User
                @can('role-create')
                    <span class="float-right">
                        <a style="float: right;" class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">


                <div class="card text-center">
                    <div class="card-body">
                        @if($user->profile_image)
                        <td>
                            <img src="{{ URL::to('/') }}/image/profile_images/{{ $user->profile_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>

                        </td>
                        @else
                        {{ "NO DISPLAY IMAGE" }}
                        @endif
                        <br>

                        <h4 class="mb-0 mt-2"> {{ $user->name }}</h4>
                        <p class="text-muted font-14"> @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $val)
                                <label class="badge badge-dark text-dark">{{ $val }}</label>
                            @endforeach
                        @endif</p>



                        <div class="text-start mt-3">
                            <h4 class="font-13 text-uppercase">Email :</h4>
                            <p class="text-muted font-13 mb-3">
                                {{ $user->email }}
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $user->name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Restaurant :</strong> <span class="ms-2">{{ $user->restaurant_name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Address :</strong><span class="ms-2">{{ $user->address }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Gender :</strong> <span class="ms-2 ">{{ $user->gender }}</span></p>

                            <p class="text-muted mb-1 font-13"><strong>Status :</strong> <span class="ms-2">{{ $user->is_active==1 ? "active":"Inactive" }}</span></p>
                        </div>


                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
