
@extends('backend.common_layouts.mainframe')


@section('main_content')
@include('backend.main_components.datatable')
<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">List Dishes</a></a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Dishes List</h4>
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
                @can('dishes-create')
                    <span class="float-right">
                        <a class="btn btn-primary" style="float:right;" href="{{ route('dishes.create') }}">New Dish</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Dish Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Food Type</th>
                            <th>Added by</th>
                            <th>Added on</th>
                            <th width="180px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php  $number=1;
                      @endphp
                        @foreach ($data as $key)
                            <tr>
                                <td>{{ $number++ }}</td>
                                <td>{{ $key->dishes_name}}</td>
                                <td>
                                    @if($key->dishes_image)
                                    <img src="{{ URL::to('/') }}/image/dishes/{{ $key->dishes_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>
                                    @else
                                        {{ "NO IMAGE UPLOADED" }}
                                    @endif
                                    </td>
                                    <td>{{ $key->dishes_description}}</td>
                                    <td>{{ $key->categories_name}}</td>
                                    <td>{{ $key->subcategory_name}}</td>
                                    <td>{{ $key->food_types_name}}</td>

                                <td>  {{ $key->username  }}</td>
                                @csrf
                                <td>{{ $key->created_at->format('d M Y - H:i:s') }}</td>
                                <td>

                                    @can('dishes-edit')
                                        <a class="btn btn-primary" href="{{ route('dishes.edit',$key->dishes_id) }}">Edit</a>
                                    @endcan
                                    @can('dishes-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['dishes.destroy', $key->dishes_id],'style'=>'display:inline']) !!}
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



