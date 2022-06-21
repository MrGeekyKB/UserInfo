<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employes;
use DB;

class EmpDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //used for data retrive

      // for all data

         return view('employes_data', ['employes'=>employes::all()]);

      // According to condition
        // $employes = DB::select('select * from employes');
        // return view('employes_data',['employes'=>$employes]);
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
    public function store(Request $request)
    {
      $request->validate([
      'fname'=>'required',
      'lname'=>'required',
      'birf'=>'required',
      'mobile'=>['required','integer'],
      ]);

      $EmpData=new Employes();

      $EmpData->fname=$request->input('fname');
      $EmpData->lname=$request->input('lname');
      $EmpData->mobile=$request->input('mobile');
      $EmpData->birf=$request->input('birf');

      $EmpData->save();

      return redirect()->Route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($employes)
    {
      return view('view_data.show', [
        'employes' => EmpData::findOrFail($employes)
      ]);
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
