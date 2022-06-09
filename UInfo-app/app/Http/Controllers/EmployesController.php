<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employes;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //foldernamee.pagename
      // return view('employes.index');
         return view('employes.index', ['employes'=>Employes::all()]);
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
    public function show($id)
    {
      return view('employes.show', [
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
