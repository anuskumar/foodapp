
@extends('backend.common_layouts.mainframe')
@section('main_content')
@include('backend.main_components.datatable')



<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Restaurant List</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Restaurant List</h4>
</div>




<div id="layout-wrapper">

    <div class="main-content">

        <div class="page-content ">

            <div class="container">



                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                @can('restaurant-create')
                                <span class="float-right">
                                    <a class="btn btn-primary" style="float:right;" href="{{ route('restaurant.create') }}">New Restaurant</a>
                                </span>
                                @endcan


                        </div>
                            <div class="card-body">

                                <h4 class="card-title">List Restaurants</h4>
                                <div class="container ">
                                <table id="datatable-buttons" class="table table-striped" >
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            {{-- <th>Email</th> --}}
                                            <th>Phone</th>
                                            <th>Available delivery</th>
                                            <th>Closed restaurent</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $res )


                                        <tr>
                                    <td>
                                        @if (!empty($res->restaurant_image))
                                    <img src="{{ URL::to('/') }}/image/restaurant/{{ $res->restaurant_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>
                                        @else
                                        <p>No image</p>
                                        @endif

                                    </td>
                                            <td>{{ $res->restaurant_name }}</td>
                                            <td>{{ $res->restaurant_address}}</td>
                                            {{-- <td>{{ $res->restaurant_email_id }}</td> --}}
                                            <td>{{ $res->restaurant_contact_number }}</td>

                                            <td>@if ($res->restaurant_avail_delivery==1){{ "yes" }}
                                                @else{{ "No" }}

                                            @endif</td>
                                            <td>@if ($res->restaurant_openclose_status==1){{ "Open" }}
                                                @else{{ "Closed" }}

                                            @endif</td>
                                            <td>@if ($res->restaurant_active_status==1){{ "Active" }}
                                                @else{{ "Inactive" }}

                                            @endif</td>

                                            <td>


                                                <a class="action-icon" href="{{ route('restaurant.show',$res->id) }}"> <i class="mdi mdi-eye"></i></a>
                                                @can('restaurant-edit')
                                                    <a class="action-icon" href="{{ route('restaurant.edit',$res->id) }}"><i class="mdi mdi-square-edit-outline"></i></a>
                                                @endcan
                                                @can('restaurant-delete')
                                                    {!! Form::open(['method' => 'DELETE','route' => ['restaurant.destroy', $res->id],'style'=>'display:inline']) !!}
                                                    {{-- {!! Form::submit('', ['class' => 'class="mdi mdi-delete','onclick'=>'deleteFunction()']) !!} --}}
                                                    <button type="submit" class="btn btn-light" onclick="deleteFunction()"><i class="mdi mdi-delete"></i></button>
                                                    {!! Form::close() !!}
                                                @endcan



                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->

</div>


@endsection



