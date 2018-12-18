<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateRegRequest;
use Illuminate\Http\Request;
use App\Laravel;
use Illuminate\Support\Facades\Input;

class reg_test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("test1");
    }

    public function action(Request $request)
    {
        
        return $request;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRegRequest $request)
    {
        //



        // $this->validate($request , [

        //     "name" => 'required',
        //     "address" => 'required',
        //     "email" => 'required',
        // ]);
        // $user = new Laravel;
        // $user->name= Input::get("name");
        // $user->address= Input::get("address");
        // $user->email= Input::get("email");
        // $user->save();
        Laravel::create($request->all());
        return ("data saved");

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
