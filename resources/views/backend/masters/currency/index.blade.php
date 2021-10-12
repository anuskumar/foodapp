
@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Currency</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Currency List</h4>
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
                @can('subcategory-create')
                    <span class="float-right">
                        <a class="btn btn-primary" style="float:right;" href="{{ route('currency.create') }}">New Currency</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>currency Name</th>
                            <th>currency code</th>
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
                                <td>{{ $key->currency_name }}</td>
                                <td>{{ $key->currency_code }}</td>
                                <td>{{ $key->username  }}</td>
                                @csrf
                                <td>{{ $key->created_at->format('d M Y - H:i:s') }}</td>
                                <td>

                                    @can('currency-edit')
                                        <a class="btn btn-primary" href="{{ route('currency.edit',$key->currency_id) }}">Edit</a>
                                    @endcan
                                    @can('currency-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['currency.destroy', $key->currency_id],'style'=>'display:inline']) !!}
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



