
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
    <h4 class="page-title">Food Type List</h4>
</div>

{{-- @if (\Session::has('success'))
<div class="alert alert-success">



    <p>{{ \Session::get('success') }}</p>
</div>
@endif --}}


<div class="container">
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">
                @can('foodType-create')
                    <span class="float-right">
                        <a class="btn btn-primary" style="float:right;" href="{{ route('food_type.create') }}">New Food Type</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Food Type Name</th>
                            <th>Image</th>
                            <th>Added by</th>
                            <th>Added on</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php  $number=1;
                      @endphp
                        @foreach ($data as $key)
                            <tr>
                                <td>{{ $number++ }}</td>
                                <td>{{ $key->food_types_name }}</td>
                                <td>
                                    @if($key->food_types_image)
                                    <img src="{{ URL::to('/') }}/image/food_types/{{ $key->food_types_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>
                                    @else
                                        {{ "NO IMAGE UPLOADED" }}
                                    @endif
                                    </td>
                                <td>  {{ $key->username  }}</td>
                                @csrf
                                <td>{{ $key->created_at->format('d M Y - H:i:s') }}</td>
                                <td>

                                    @can('foodType-edit')
                                        <a class="btn btn-primary" href="{{ route('food_type.edit',$key->food_types_id) }}">Edit</a>
                                    @endcan
                                    @can('foodType-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['food_type.destroy', $key->food_types_id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger ','title'=>'Delete','onclick'=>'deleteFunction()']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->appends($_GET)->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>


@endsection



