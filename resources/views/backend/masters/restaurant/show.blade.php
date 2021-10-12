@extends('backend.common_layouts.mainframe')
@section('main_content')

<div class="page-title-box">
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript: void(0);">Restaurants</a></li>
            <li class="breadcrumb-item active">Show Restaurants</li>
        </ol>
    </div>
    <h4 class="page-title"> Show Restaurants</h4>
</div>
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Show Restaurant
                @can('restaurant-create')
                    <span class="float-right">
                        <a style="float: right;" class="btn btn-primary" href="{{ route('restaurant.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">


                <div class="card text-center">
                    <div class="card-body container">
                        @if($restaurant->profile_image)
                        <td>
                            <img src="{{ URL::to('/') }}/image/restaurant/{{ $restaurant->restaurant_image }}" alt="image" class="img-fluid img-thumbnail" width="200"/>

                        </td>
                        @else
                        {{ "NO DISPLAY IMAGE" }}
                        @endif
                        <br>

                        <h4 class="mb-0 mt-2"> {{ $restaurant->restaurant_name }}</h4>
                        <p class="text-muted font-14">
                          Currency: {{ $restaurant->currency_name}}
                          </p>



                        <div class="text-start mt-3">
                            <h4 class="font-13 text-uppercase">Email :</h4>
                            <p class="text-muted font-13 mb-3">
                                {{ $restaurant->restaurant_email_id }}
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Restaurant Name :</strong> <span class="ms-2">{{ $restaurant->restaurant_name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Restaurant :</strong> <span class="ms-2">{{ $restaurant->restaurant_name }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Restaurant Address :</strong><span class="ms-2">{{ $restaurant->restaurant_address }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Latitude :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_latitude }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Longitude :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_longitude }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Tax :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_default_tax }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Contact number :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_contact_number }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Description :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_description }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Opening Time :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_opening_time }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Closing Time :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_closing_time }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Available For Delivery :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_avail_delivery==1 ? "Yes":"No" }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Active Status :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_avail_delivery==1 ? "Active":"Inactive" }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Open/close Status :</strong> <span class="ms-2 ">{{ $restaurant->restaurant_openclose_status==1 ? "Open" :"close" }}</span></p>
                            <p class="text-muted mb-2 font-13"><strong>Created By :</strong> <span class="ms-2 ">{{ $restaurant->name }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Created on :</strong> <span class="ms-2 ">{{ $restaurant->created_at }}</span></p>

                        </div>


                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
