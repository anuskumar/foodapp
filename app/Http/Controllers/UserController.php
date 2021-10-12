<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::select('*','users.id as id')->leftJoin('restaurants','restaurants.id', '=','users.restaurant')->orderBy('users.id', 'asc')->paginate(15);

        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        $restaurant= Restaurant::select('id','restaurant_name','restaurant_address')->get();
        return view('users.create', compact('roles','restaurant'));
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'roles' => 'required',
            'gender' => 'required',
            'is_active' => 'required',
        ]);

        if(!empty($request->file('profile_image'))){
            $this->validate($request, [

                'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}

        $input = $request->all();
        //    $role=$input['restaurant'];
        //     echo $role;
        //     die;
        //     if(str_contains(strtoupper($role[0]),"ADMIN")==true){
        //         echo "hii";die;
        //     }else{
        //         echo "hello";die;

        //         $this->validate($request, [

        //             'restaurant' => 'required',
        //         ]);
        //     }

        if ($image = $request->file('profile_image')) {
            $destinationPath = 'image/profile_images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['profile_image'] = $profileImage;
        }else{
            $input['profile_image'] = '';
        }

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id)->leftJoin('restaurants','restaurants.id', '=','users.restaurant')->get();
        $user = User::leftJoin('restaurants', 'restaurants.id', 'users.restaurant')
        ->where('users.id',$id)
        ->get()->first();

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = User::find($id);
        $restaurants=Restaurant::all();
        $user = User::select('users.id','users.email','users.name','users.profile_image','users.gender','users.address','users.restaurant','users.password','users.is_active')->leftJoin('restaurants', 'restaurants.id', 'users.restaurant')
        ->where('users.id','=',$id)
        ->get()
        ->first();
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole','restaurants'));
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'confirmed',
            'roles' => 'required',
            'gender' => 'required',
        ]);

        if(!empty($request->file('profile_image'))){

            $this->validate($request, [

                'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}


        $input = $request->all();

        if(!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }


        if($image = $request->file('profile_image')) {

            $destinationPath = 'image/profile_images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['profile_image'] = $profileImage;

        }else{

            $input['profile_image'] = $input['current_image'];

        }
        // print_r($input);
        // die;
        $user = User::find($id);
        $user->update($input);

        DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }

    public function userChangeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->is_active = $request->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
