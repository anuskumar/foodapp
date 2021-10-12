<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dishes;
use App\Models\Subcategory;
use Illuminate\Http\Request;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:subcategory-list|subcategory-create|subcategory-edit|subcategory-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:subcategory-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:subcategory-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:subcategory-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        //
        $data=Subcategory::select('*','users.name as username','subcategories.id as subcategories_id','categories.id as category_id')->leftJoin('users', 'users.id', '=', 'subcategories.subcategory_added_by')->leftJoin('categories', 'categories.id', '=', 'subcategories.subcategory_category')->paginate(10);
        return view('backend.masters.subcategory.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('backend.masters.subcategory.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'subcategory_name' => 'required',
            'subcategory_category' => 'required',

        ]);

        if(!empty($request->file('subcategory_image'))){
        $this->validate($request, [

            'subcategory_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);}

        $input = $request->all();

        if ($image = $request->file('subcategory_image')) {
            $destinationPath = 'image/subcategory/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['subcategory_image'] = $profileImage;
        }else{
            $input['subcategory_image'] = '';
        }
        // $userId = Auth::check() ? Auth::id() : true;

        // $input = $request->except(['_token']);

        Subcategory::create($input);

        return redirect()->route('subcategory.index')
        ->with('success','subcategory created successfully.');
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
        echo "this function is not available";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::all();
        $data = Subcategory::find($id);
        return view('backend.masters.subcategory.edit',compact('data','category'));

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
            'subcategory_name' => 'required',
            'subcategory_category' => 'required',

        ]);

        if(!empty($request->file('subcategory_image'))){

            $this->validate($request, [

                'subcategory_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}

            $input = $request->all();

            $data = Subcategory::find($id);

            if($image = $request->file('subcategory_image')) {

                $destinationPath = 'image/subcategory/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['subcategory_image'] = $profileImage;
                $data->update( array(
                    'subcategory_name' => $input['subcategory_name'],
                    'subcategory_category' => $input['subcategory_category'],
                    'subcategory_image' => $profileImage,
                 )
                );

            }else{

                $data->update( array(
                    'subcategory_name' => $input['subcategory_name'],
                    'subcategory_category' => $input['subcategory_category'],
                    'subcategory_image' =>  $input['current_image'],
                 )
                );
            }


        return redirect()->route('subcategory.index')
            ->with('success', 'Subcategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $check_exist = Dishes::where('dishes_subcategory', $id)
        ->count();


 if($check_exist < 1){

        Subcategory::find($id)->delete();

        return redirect()->route('subcategory.index')
            ->with('success', 'Subcategory deleted successfully.');
 }else{
            return redirect()->route('subcategory.index')
            ->with('error', 'Subcategory deleted unsuccessfully because this subcategory is using somewhere else(Dishes table).');
        }
    }
}
