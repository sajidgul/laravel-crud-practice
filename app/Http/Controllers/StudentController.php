<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->get();
        return view('student', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('students')->insert([
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect(route('index'))->with('success', 'Student Addedd Successfully');
    }

    public function edit($id)
    {
        $std = DB::table('students')->find($id);
        if(!$std)
            return dd('Student not found');
            return view('update', ['student'=>$std]);
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
         DB::table('students')->where('id', $id)->update([
            'name'=> $request->name,
            'title'=>$request->title,
            'description'=> $request->description,
        ]);
        return redirect(route('index'))->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect(route('index'))->with('success', 'Student Deleted Successfully');
    }
}