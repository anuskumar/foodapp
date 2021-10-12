@extends('backend.common_layouts.mainframe')
@section('main_content')

</head>
<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Permission List</h4>
</div>
<div class="container">
    <div class="justify-content-center">
        {{-- @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif --}}
        <div class="card">
            <div class="card-header">Users
                <span class="float-right">
                    <a class="btn btn-primary" style="float: right;" href="{{ route('users.create') }}">New User</a>
                </span>
            </div>
            <div class="row">
                <div class="col-md-12">
            <div class="card-body">
                <table class="table table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Restaurant</th>
                            <th>Is Active?</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $number=1;
                        @endphp
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ $number++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>

                                    {{-- {{ $user }} --}}

                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $val)
                                            <label class="badge badge-dark text-dark">{{ $val }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    {{ $user->restaurant_name }}
                                </td>
                                <td>

                                     <input  value="{{ $user->id }}" {{ $user->is_active ? 'checked' : '' }} data-offstyle="danger" type="checkbox" id="switch{{$user->id }}" onchange="statuschangefunction({{$user->id}},{{$user->is_active}})"  data-switch="success"/>
                                     <label for="switch{{ $user->id }}" data-on-label="Yes" data-off-label="No"></label>
                                 </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('users.show',$user->id) }}">Show</a>
                                    @can('user-edit')
                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                    @endcan
                                    @can('user-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'deleteFunction()']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->render() }}
            </div>
        </div>
        </div>
        </div>
    </div>

    <script>


            function statuschangefunction(var1,var2){

              if(var2==0){
                  var status=1}else{
                      status=0
                  }

              var id = var1;

              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/userChangeStatus',
                  data: {'status': status, 'id': id},
                  success: function(data){
                    console.log(data.success)
                    window.location.reload();

                  }
              });
            }


      </script>

</div>


@endsection
