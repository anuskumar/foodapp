<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:currency-list|currency-create|currency-edit|currency-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:currency-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:currency-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:currency-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data=Currency::select('*','users.name as username','currencies.id as currency_id')->leftJoin('users', 'users.id', '=', 'currencies.currency_added_by')->paginate(10);
        return view('backend.masters.currency.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.masters.currency.create');
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
        'currency_name' => 'required',
        'currency_code' => 'required',
        'currency_added_by' => 'required',
    ]);
    $input = $request->all();

    Currency::create($input);

    return redirect()->route('currency.index')
        ->with('success','Currency created successfully.');
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
        $data = Currency::find($id);

        return view('backend.masters.currency.edit',compact('data'));

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
            'currency_name' => 'required',
            'currency_code' => 'required',
        ]);

        $post = Currency::find($id);

        $post->update($request->all());

        return redirect()->route('currency.index')
            ->with('success', 'Currency updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Currency::find($id)->delete();

        return redirect()->route('currency.index')
            ->with('success', 'Currency deleted successfully.');
    }
}
