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
    <h4 class="page-title">Category List</h4>
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
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" style="float: right" href="{{ route('categories.create') }}">New category</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Addedby</th>
                            <th>Added on</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $category)
                            <tr>
                                <td>{{ $category->category_id }}</td>
                                <td>{{ $category->categories_name }}</td>
                                <td>
                                    @if($category->categories_image)
                                    <img src="{{ URL::to('/') }}/image/categories/{{ $category->categories_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>
                                    @else
                                        {{ "NO IMAGE UPLOADED" }}
                                    @endif
                                    </td>
                                <td>  {{ $category->username  }}</td>
                                <td>{{ $category->created_at->format('d M Y - H:i:s') }}</td>
                                <td>
                                    {{-- <a class="btn btn-success" href="{{ route('categories.show',$category->category_id) }}">Show</a> --}}
                                    @can('category-edit')
                                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->category_id) }}">Edit</a>
                                    @endcan
                                    @can('category-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->category_id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'deleteFunction()']) !!}
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

