@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Menus</a></li>
            <li class="breadcrumb-item active">Show Menu Details</li>
        </ol>
    </div>
    <h4 class="page-title"> Show Menu</h4>
</div>
<div class="row">
    <div class="col-md-6">
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Show Menu
                @can('restaurant-create')
                    <span class="float-right">
                        <a style="float: right;" class="btn btn-primary" href="{{ route('menus.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">


                <div class="card text-center">
                    <div class="card-body container">
                        @if($data->dishes_image)
                        <td>
                            <img src="{{ URL::to('/') }}/image/dishes/{{ $data->dishes_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>

                        </td>
                        @else
                        {{ "NO DISPLAY IMAGE" }}
                        @endif
                        <br>

                        <h4 class="mb-0 mt-2"> {{ $data->dishes_name }}</h4>
                        <br>
                        <p class="text-muted font-14">
                            Actial price: {{ $data->menu_price .' '. $data->currency_code}}
                            </p>

                        <p class="text-muted font-14">
                            Selling Price: {{$data->menu_selling_price.' '.$data->currency_code}}
                          </p>



                        <div class="text-start mt-3">

                            <p class="text-muted mb-2 font-13"><strong>Restaurant Name :</strong> <span class="ms-2">{{ $data->restaurant_name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Restaurant Address :</strong> <span class="ms-2">{{ $data->restaurant_address }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Restaurant Address :</strong> <span class="ms-2">{{ $data->restaurant_address }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Featured ? :</strong> <span class="ms-2">{{ $data->menu_featured ? "Yes":"No" }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Todays special ? :</strong> <span class="ms-2">{{ $data->menu_todays_special ? "Yes":"No" }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Deliverable ? :</strong> <span class="ms-2">{{ $data->menu_deliverable ? "Yes":"No" }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Available ? :</strong> <span class="ms-2">{{ $data->menu_available ? "Yes":"No" }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Menu Description :</strong> <span class="ms-2">{{ $data->menu_description }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Category :</strong> <span class="ms-2">{{ $data->categories_name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Sub Categroy :</strong> <span class="ms-2">{{ $data->subcategory_name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Food Type :</strong> <span class="ms-2">{{ $data->food_types_name }}</span></p>

                        </div>


                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
