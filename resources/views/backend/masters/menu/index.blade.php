
@extends('backend.common_layouts.mainframe')
@section('main_content')
@include('backend.main_components.datatable')


<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Menus</a></a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
    <h4 class="page-title">Menus List</h4>
</div>

{{-- @if (\Session::has('success'))
<div class="alert alert-success">



    <p>{{ \Session::get('success') }}</p>
</div>
@endif --}}


<div class="container-fluid">
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header">
                @can('menus-create')
                    <span class="float-right">
                        <a class="btn btn-primary" style="float:right;" href="{{ route('menus.create') }}">New Menu</a>
                    </span>
                @endcan
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Menus</h4>

                                <div class="form-group mt-2">

                                    <form action="menus" method="GET">
                                        @csrf
                                       <select class="form-control mt-2 select2" onchange="this.form.submit()" data-toggle="select2" name="menu_restaurants">
                                        <option value="">Select Restaurant</option>
                                        @foreach ($restaurants as $res )
                                           <option value="{{ $res->id }}"  {{ $res->id==$search ? "selected" :'' }}>{{ $res->restaurant_name }}</option>
                                        @endforeach
                                       </select>
                                    </form>
                                </div>
                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th width="50px">Image</th>
                                    <th >Name</th>
                                    <th>Restaurant</th>
                                    <th>Selling Price</th>
                                    {{-- <th>Selling Price</th> --}}
                                    <th>Featured</th>
                                    <th>Deliverable</th>
                                    <th>Todays <br> Special</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $key)
                                <tr>
                                    <td>


            @if($key->dishes_image)
            <img src="{{ URL::to('/') }}/image/dishes/{{ $key->dishes_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>
            @else
               <small>No
                   <br> Image</small>
            @endif



        </td>
                                    <td>{{ $key->dishes_name }}</td>
                                    <td>{{ $key->restaurant_name}}
                                    {{-- <br>
                                    {{ $key->restaurant_address }} --}}
                                </td>

                                    <td>{{ $key->menu_selling_price.' '.$key->currency_code }}</td>
                                    <td><div>
                                        <input type="checkbox" class="Featured-class" data-id="{{$key->menu_id}}" data-toggle="toggle" id="Featured{{ $key->menu_id }}"  data-switch="success" {{ $key->menu_featured==1 ? 'checked' : '' }}/>
                                        <label for="Featured{{ $key->menu_id }}" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div></td>
                                    {{-- <td>$320,800</td> --}}
                                    <td><div>
                                        <input type="checkbox" class="Deliverable-class" data-id="{{$key->menu_id}}" data-toggle="toggle" id="Deliverable{{ $key->menu_id }}"  data-switch="success" {{ $key->menu_deliverable==1 ? 'checked' : '' }}/>
                                        <label for="Deliverable{{ $key->menu_id }}" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div></td>
                                    <td><div>
                                        <input type="checkbox" class="Special-class" data-id="{{$key->menu_id}}" data-toggle="toggle" id="Special{{ $key->menu_id }}"  data-switch="success" {{ $key->menu_todays_special==1 ? 'checked' : '' }}/>
                                        <label for="Special{{ $key->menu_id }}" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div></td>
                                    <td><div>
                                        <input type="checkbox" class="Active-class" data-id="{{$key->menu_id}}" data-toggle="toggle" id="Active{{ $key->menu_id }}"  data-switch="success" {{ $key->menu_available==1 ? 'checked' : '' }}/>
                                        <label for="Active{{ $key->menu_id }}" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div></td>
                                    {{-- <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>

                                    </td> --}}
                                    <td class="table-action">


                                        <a class="action-icon" href="{{ route('menus.show',$key->menu_id) }}"> <i class="mdi mdi-eye"></i></a>
                                        @can('menus-edit')
                                            <a class="action-icon" href="{{ route('menus.edit',$key->menu_id) }}"><i class="mdi mdi-square-edit-outline"></i></a>
                                        @endcan
                                        @can('menus-delete')
                                            {!! Form::open(['method' => 'DELETE','route' => ['menus.destroy', $key->menu_id],'style'=>'display:inline']) !!}

                                            <button type="submit" class="btn btn-light" onclick="deleteFunction()"><i class="mdi mdi-delete"></i></button>
                                            {!! Form::close() !!}
                                        @endcan



                                    </td>
                                </tr>

                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
    </div>

    <script>
        $(function() {
          $('.Featured-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0;
              var user_id = $(this).data('id');
              var route = '/changeFeatured';
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: route,
                  data: {'status': status, 'user_id': user_id},
                  success: function(data){
                    // console.log(data.success)
                    toastr.success("Featured status changed Successfully");

                  }
              });
          })
        })

        $(function() {
          $('.Deliverable-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0;
              var user_id = $(this).data('id');
              var route = '/changeDeliverable';
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: route,
                  data: {'status': status, 'user_id': user_id},
                  success: function(data){
                    // console.log(data.success)
                    toastr.success("Deliverable status changed Successfully");

                  }
              });
          })
        })

        $(function() {
          $('.Special-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0;
              var user_id = $(this).data('id');
              var route = '/changeSpecial';
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: route,
                  data: {'status': status, 'user_id': user_id},
                  success: function(data){
                    // console.log(data.success)
                    toastr.success("Todays special status changed Successfully");

                  }
              });
          })
        })

        $(function() {
          $('.Active-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0;
              var user_id = $(this).data('id');
              var route = '/changeActive';
              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: route,
                  data: {'status': status, 'user_id': user_id},
                  success: function(data){
                    // console.log(data.success)
                    toastr.success("Active status changed Successfully");

                  }
              });
          })
        })
      </script>


</div>




@endsection



