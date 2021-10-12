<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:restaurant-list|restaurant-create|restaurant-edit|restaurant-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:restaurant-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:restaurant-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:restaurant-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $data = Restaurant::all();

        return view('backend.masters.restaurant.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currency=Currency::all();
        return view('backend.masters.restaurant.create',compact('currency'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'restaurant_name' => 'required',
            'restaurant_address' => 'required',
            'restaurant_latitude' => 'required',
            'restaurant_longitude' => 'required',
            'restaurant_default_tax' => 'required',
            'restaurant_email_id' => 'required',
            'restaurant_currency' => 'required',
            'restaurant_description' => 'required',
            'restaurant_contact_number' => 'required',
            'restaurant_opening_time' => 'required',
            'restaurant_closing_time' => 'required',
            'restaurant_avail_delivery' => 'required',
            'restaurant_openclose_status' => 'required',
            'restaurant_active_status' => 'required',
            'restaurant_added_by' => 'required',

        ]);

        if(!empty($request->file('restaurant_image'))){
            $this->validate($request, [

                'restaurant_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}

            $input = $request->all();

            if ($image = $request->file('restaurant_image')) {
                $destinationPath = 'image/restaurant/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['restaurant_image'] = $profileImage;
            }else{
                $input['restaurant_image'] = '';
            }

            Restaurant::create($input);

            return redirect()->route('restaurant.index')
            ->with('success','Restaurant Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $currencies=Currency::all();
        $restaurant=Restaurant::leftJoin('currencies', 'currencies.id', 'restaurants.restaurant_currency')->
        leftJoin('users', 'users.id', 'restaurants.restaurant_added_by')
        ->where('restaurants.id',$id)
        ->get()->first();
        return view('backend.masters.restaurant.show',compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $currencies=Currency::all();
        $restaurant=Restaurant::leftJoin('currencies', 'currencies.id', 'restaurants.restaurant_currency')->
        leftJoin('users', 'users.id', 'restaurants.restaurant_added_by')
        ->where('restaurants.id',$id)
        ->get()->first();
        return view('backend.masters.restaurant.edit',compact('restaurant','currencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'restaurant_name' => 'required',
            'restaurant_address' => 'required',
            'restaurant_latitude' => 'required',
            'restaurant_longitude' => 'required',
            'restaurant_default_tax' => 'required',
            'restaurant_email_id' => 'required',
            'restaurant_currency' => 'required',
            'restaurant_description' => 'required',
            'restaurant_contact_number' => 'required',
            'restaurant_opening_time' => 'required',
            'restaurant_closing_time' => 'required',
            'restaurant_avail_delivery' => 'required',
            'restaurant_openclose_status' => 'required',
            'restaurant_active_status' => 'required',
            'restaurant_added_by' => 'required',

        ]);


        if(!empty($request->file('restaurant_image'))){

            $this->validate($request, [

                'restaurant_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}


            $input = $request->all();

            $data = Restaurant::find($id);

            if($image = $request->file('restaurant_image')) {

                $destinationPath = 'image/restaurant/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['restaurant_image'] = $profileImage;


            }else{

                $input['restaurant_image'] = $input['current_image'];

            }

            $data->update($input);
            return redirect()->route('restaurant.index')
            ->with('success', 'Restaurant updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Restaurant::find($id)->delete();

        return redirect()->route('restaurant.index')
            ->with('success', 'restaurant deleted successfully.');
    }
}
