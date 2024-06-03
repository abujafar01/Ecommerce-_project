<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = "<h1> Shobuj </h1>";
        $data = 1;
        $edit = true;
        $arr = ['a'=>1,'b'=>2];
        $user = "Admin";
        //return view("index",compact('data','arr','edit','username'));
        return view('index',['newdata'=>$data,'arr'=>$arr,'edit'=>$edit,'username'=>$username,'role'=>$user]);
    }

    /**
     * Does something interesting
     *
     * @param id (userid)
     * @param name (username)
     *
     * @throws error
     * @author shobuj <shobuj@facebook.com>
     * @return if condition match then return true
     */
    public function create($id,$name)
    {
        $end_year = Date("Y");
        //dd($end_year);
        $start_year = 1900;
        $loop_array = ['start'=>$start_year,'end'=>$end_year];
        return view('new_file',['new_loop'=>$loop_array]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "hello from show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "hello from edit";
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
