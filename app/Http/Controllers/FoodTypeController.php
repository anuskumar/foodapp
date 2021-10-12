<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use App\Models\Food_types;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:foodType-list|foodType-create|foodType-edit|foodType-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:foodType-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:foodType-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:foodType-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        $data=Food_types::select('*','users.name as username','food_types.id as food_types_id')->leftJoin('users', 'users.id', '=', 'food_types.food_types_added_by')->paginate(10);
        return view('backend.masters.foodType.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('backend.masters.foodType.create');
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
            'food_types_name' => 'required',

        ]);

        if(!empty($request->file('food_types_image'))){
        $this->validate($request, [

            'food_types_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);}

        $input = $request->all();

        if ($image = $request->file('food_types_image')) {
            $destinationPath = 'image/food_types/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['food_types_image'] = $profileImage;
        }else{
            $input['food_types_image'] = '';
        }
        // $userId = Auth::check() ? Auth::id() : true;

        // $input = $request->except(['_token']);

        Food_types::create($input);

        return redirect()->route('food_type.index')
        ->with('success','Food Type created successfully.');
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

        $data = Food_types::find($id);
        return view('backend.masters.foodType.edit',compact('data'));
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
            'food_types_name' => 'required',
        ]);

        if(!empty($request->file('food_types_image'))){

            $this->validate($request, [

                'food_types_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}

            $input = $request->all();

            $data = Food_types::find($id);

            if($image = $request->file('food_types_image')) {

                $destinationPath = 'image/food_types/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['food_types_image'] = $profileImage;
                $data->update( array(
                    'food_types_name' => $input['food_types_name'],
                    'food_types_image' => $profileImage,
                 )
                );

            }else{

                $data->update( array(
                    'food_types_name' => $input['food_types_name'],
                    'food_types_image' =>  $input['current_image'],
                 )
                );
            }


        return redirect()->route('food_type.index')
            ->with('success', 'Food Type updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check_exist = Dishes::where('dishes_food_type', $id)
                                  ->count();
        if($check_exist<1){
        Food_types::find($id)->delete();

        return redirect()->route('food_type.index')
        ->with('success', 'Food type deleted successfully.');

    }else{

        return redirect()->route('food_type.index')
        ->with('error', 'Food type deleted unsuccessfully because this Type is using somewhere else(Dishes table).');

            }
    }
}
