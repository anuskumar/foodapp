<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:menus-list|menus-create|menus-edit|menus-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:menus-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:menus-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:menus-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {   $restaurants=Restaurant::all();

        if(!empty($request['menu_restaurants'])){
         $search=$request['menu_restaurants'];
        $data=Menu::select('restaurant_name','restaurant_address','dishes_name','currency_code','dishes_image','menu_price','menu_selling_price','menu_featured','menu_todays_special','menu_deliverable','menu_description','menu_available','users.name as username','menus.id as menu_id')
        ->leftJoin('users','users.id', '=','menus.menu_added_by')
        ->leftJoin('dishes','dishes.id', '=','menus.menu_dish')
        ->leftJoin('restaurants','restaurants.id', '=','menus.menu_restaurants')
        ->leftJoin('currencies','currencies.id', '=','restaurants.restaurant_currency')
        ->where('menus.menu_restaurants','=',$search)
        ->get();


     }else{
        $search='';
        $data=Menu::select('restaurant_name','restaurant_address','dishes_name','currency_code','dishes_image','menu_price','menu_selling_price','menu_featured','menu_todays_special','menu_deliverable','menu_description','menu_available','users.name as username','menus.id as menu_id')
                ->leftJoin('users','users.id', '=','menus.menu_added_by')
                ->leftJoin('dishes','dishes.id', '=','menus.menu_dish')
                ->leftJoin('restaurants','restaurants.id', '=','menus.menu_restaurants')
                ->leftJoin('currencies','currencies.id', '=','restaurants.restaurant_currency')
                ->get();

            }

            return view('backend.masters.menu.index', compact('data','restaurants','search'));

            // }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants=Restaurant::all();
        $dishes= Dishes::all();
        return view('backend.masters.menu.create',compact('restaurants','dishes'));
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
            'menu_restaurants' => 'required',
            'menu_dish' => 'required',
            'menu_price' => 'required',
            'menu_selling_price' => 'required',
            'menu_description' => 'required',
        ]);

        $input = $request->all();

        if(empty($input['menu_featured'])){
            $input['menu_featured']=0;
        }
        if(empty($input['menu_todays_special'])){
            $input['menu_todays_special']=0;
        }
        if(empty($input['menu_deliverable'])){
            $input['menu_deliverable']=0;
        }
        if(empty($input['menu_available'])){
            $input['menu_available']=0;
        }



        Menu::create($input);

        return redirect()->route('menus.index')
        ->with('success','Menu item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Menu::leftJoin('users','users.id', '=','menus.menu_added_by')
        ->leftJoin('dishes','dishes.id', '=','menus.menu_dish')
        ->leftJoin('restaurants','restaurants.id', '=','menus.menu_restaurants')
        ->leftJoin('food_types','food_types.id', '=','dishes.dishes_food_type')
        ->leftJoin('categories','food_types.id', '=','dishes.dishes_category')
        ->leftJoin('subcategories','food_types.id', '=','dishes.dishes_subcategory')
        ->leftJoin('currencies','currencies.id', '=','restaurants.restaurant_currency')
        ->where('menus.id','=',$id)
        ->get()->first();

        return view('backend.masters.menu.show',compact('data'));

        // print_r($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $menus=Menu::select('*','menus.id as id')
        ->leftJoin('users','users.id', '=','menus.menu_added_by')
        ->leftJoin('dishes','dishes.id', '=','menus.menu_dish')
        ->leftJoin('restaurants','restaurants.id', '=','menus.menu_restaurants')
        ->leftJoin('currencies','currencies.id', '=','restaurants.restaurant_currency')
        ->where('menus.id','=',$id)
        ->get()->first();
        $restaurants=Restaurant::all();
        $dishes= Dishes::all();
        return view('backend.masters.menu.edit',compact('menus','restaurants','dishes'));
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
            'menu_restaurants' => 'required',
            'menu_dish' => 'required',
            'menu_price' => 'required',
            'menu_selling_price' => 'required',
            'menu_description' => 'required',
        ]);
        if(!empty($request['menu_featured'])){
            $request['menu_featured']=1;
        }else{
            $request['menu_featured']=0;
        }
        if(!empty($request['menu_todays_special'])){
            $request['menu_todays_special']=1;
        }else{
            $request['menu_todays_special']=0;
        }
        if(!empty($request['menu_deliverable'])){
            $request['menu_deliverable']=1;
        }else{
            $request['menu_deliverable']=0;
        }
        if(!empty($request['menu_available'])){
            $request['menu_available']=1;
        }else{
            $request['menu_available']=0;
        }

        $post = Menu::find($id);


        $post->update($request->all());

        return redirect()->route('menus.index')
            ->with('success', 'Menu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();

        return redirect()->route('menus.index')
            ->with('success', 'Menu deleted successfully.');
    }

    public function changeFeatured(Request $request){

        $menus = Menu::find($request->user_id);
        $menus->menu_featured = $request->status;
        $menus->save();

        return response()->json(['success'=>'Status change successfully.']);

    }

    public function changeDeliverable(Request $request){

        $menus = Menu::find($request->user_id);
        $menus->menu_deliverable = $request->status;
        $menus->save();

        return response()->json(['success'=>'Status change successfully.']);

    }
    public function changeSpecial(Request $request){

        $menus = Menu::find($request->user_id);
        $menus->menu_todays_special = $request->status;
        $menus->save();

        return response()->json(['success'=>'Status change successfully.']);

    }

    public function changeActive(Request $request){

        $menus = Menu::find($request->user_id);
        $menus->menu_available = $request->status;
        $menus->save();

        return response()->json(['success'=>'Status change successfully.']);

    }
}
