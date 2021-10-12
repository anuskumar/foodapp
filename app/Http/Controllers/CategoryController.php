<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dishes;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
      /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:category-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request){

        $data=Category::select('*','users.name as username','categories.id as category_id')->leftJoin('users', 'users.id', '=', 'categories.categories_added_by')->paginate(5);

        return view('backend.masters.category.index',compact('data'));

    }

    public function create(Request $request){

        return view('backend.masters.category.create');
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
            'categories_name' => 'required',

        ]);

        if(!empty($request->file('categories_image'))){
            $this->validate($request, [

                'categories_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}

        // $userId = Auth::check() ? Auth::id() : true;

         $input = $request->all();

        if ($image = $request->file('categories_image')) {
            $destinationPath = 'image/categories/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['categories_image'] = $profileImage;
        }else{
            $input['categories_image'] = '';
        }

        Category::create($input);

        return redirect()->route('categories.index')
        ->with('success','Category created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories=Category::find($id);
        return view('backend.masters.category.edit',compact('categories'));

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
            'categories_name' => 'required',
        ]);


        if(!empty($request->file('categories_image'))){

            $this->validate($request, [

                'categories_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}

            $input = $request->all();


        $data = Category::find($id);

        if($image = $request->file('categories_image')) {

            $destinationPath = 'image/categories/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['categories_image'] = $profileImage;
            $data->update( array(
                'categories_name' => $input['categories_name'],
                'categories_image' => $profileImage,
             )
            );

        }else{

            $data->update( array(
                'categories_name' => $input['categories_name'],
                'categories_image' => $input['current_image'],
             )
            );
        }

        return redirect()->route('categories.index')
            ->with('success', 'category updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check_exist = Dishes::where('dishes_category', $id)
                                  ->count();
        $check_exist_one = Subcategory::where('subcategory_category', $id)
                                  ->count();
        if($check_exist < 1 || $check_exist_one < 1){

            Category::find($id)->delete();
            return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully.');
        }else{
            return redirect()->route('categories.index')
            ->with('error', 'Category deleted unsuccessfully because this category is using somewhere else(Dishes table or Subcategory table).');
        }

    }
}
