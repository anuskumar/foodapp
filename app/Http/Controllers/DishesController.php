<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dishes;
use App\Models\Food_types;
use App\Models\Menu;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:dishes-list|dishes-create|dishes-edit|dishes-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:dishes-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:dishes-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:dishes-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data=Dishes::select('*','users.name as username','dishes.id as dishes_id')->
        leftJoin('users', 'users.id', '=', 'dishes.dishes_added_by')->
        leftJoin('categories', 'categories.id', '=', 'dishes.dishes_category')->
        leftJoin('subcategories', 'subcategories.id', '=', 'dishes.dishes_subcategory')->
        leftJoin('food_types', 'food_types.id', '=', 'dishes.dishes_food_type')
        ->paginate(10);

        return view('backend.masters.dishes.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $foodtypes=Food_types::all();
        return view('backend.masters.dishes.create',compact('categories','subcategories','foodtypes'));
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
            'dishes_category' => 'required',
            'dishes_subcategory' => 'required',
            'dishes_food_type' => 'required',
            'dishes_name' => 'required',
            'dishes_description' => 'required'

        ]);

        if(!empty($request->file('dishes_image'))){
            $this->validate($request, [

                'dishes_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}
            $input = $request->all();

            if ($image = $request->file('dishes_image')) {
                $destinationPath = 'image/dishes/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['dishes_image'] = $profileImage;
            }else{
                $input['dishes_image'] = '';
            }

            Dishes::create($input);

            return redirect()->route('dishes.index')
            ->with('success','Dish created successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $foodtypes=Food_types::all();

        $data=Dishes::select('*','users.name as username','dishes.id as dishes_id')->
        leftJoin('users', 'users.id', '=', 'dishes.dishes_added_by')->
        leftJoin('categories', 'categories.id', '=', 'dishes.dishes_category')->
        leftJoin('subcategories', 'subcategories.id', '=', 'dishes.dishes_subcategory')->
        leftJoin('food_types', 'food_types.id', '=', 'dishes.dishes_food_type')->where('dishes.id','=',$id)->get()->first();
        return view('backend.masters.dishes.edit',compact('data','categories','subcategories','foodtypes'));
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
            'dishes_category' => 'required',
            'dishes_subcategory' => 'required',
            'dishes_food_type' => 'required',
            'dishes_name' => 'required',
            'dishes_description' => 'required'

        ]);

        if(!empty($request->file('dishes_image'))){
            $this->validate($request, [

                'dishes_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}
            $input = $request->all();
            $data = Dishes::find($id);

            if($image = $request->file('dishes_image')) {

                $destinationPath = 'image/dishes/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['dishes_image'] = $profileImage;


            }else{

                $input['dishes_image'] = $input['current_image'];

            }

            $data->update($input);
            return redirect()->route('dishes.index')
            ->with('success', 'Dishes updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $check_exist = Menu::where('menu_dish', $id)
                                      ->count();

            if($check_exist < 1 ){

                Menu::find($id)->delete();
                return redirect()->route('categories.index')
                ->with('success', 'Dish deleted successfully.');
            }else{
                return redirect()->route('categories.index')
                ->with('error', 'Dish deleted unsuccessfully because this category is using somewhere else(Menu table).');
            }


    }
}
