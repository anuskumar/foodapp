@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Roles</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Role List</h4>
</div>
<div class="container">
    <div class="justify-content-center">
        {{-- @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif --}}
        <div class="card">
            <div class="card-header">Role
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" style="float: right;" href="{{ route('roles.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ Str::ucfirst($role->name)}}
                </div>
                <div class="lead">
                    <strong>Permissions:</strong>
                    @if(!empty($rolePermissions))
                    <div class="row">
                        @foreach($rolePermissions as $permission)

                        <div class="alert alert-success col-md-3" role="alert">
                            <i class="dripicons-checkmark me-2"></i> {{ $permission->name }}
                        </div>

                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
