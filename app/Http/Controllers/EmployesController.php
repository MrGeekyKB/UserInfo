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
      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      ]);

      $EmpData=new Employes();

      $filenameWithExt = $request->file('image')->getClientOriginalName();
      // Get Filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just Extension
      $extension = $request->file('image')->getClientOriginalExtension();
      // Filename To store
      $fileNameToStore = $filename.'.'.$extension;
      // UploadImage
      $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

      $EmpData->fname=$request->input('fname');
      $EmpData->lname=$request->input('lname');
      $EmpData->mobile=$request->input('mobile');
      $EmpData->birf=$request->input('birf');
      $EmpData->name = $filenameWithExt;
      $EmpData->path = $path;

      $EmpData->save();

      //return redirect()->Route('home.index');
      return redirect()->Route('home.index')->with('status', 'Image Has been uploaded');
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
        'employe' => Employes::findOrFail($id)
       ]);

      // $employes = self::getData();
      // $index = array_search($id, array_column($employes, 'id'));
      // if ($index === false) {
      //   abort(404);
      // }
      // return view('employes.show', [
      //   'employe' => $employes[$index]
      // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('employes.edit', [
       'employe' => Employes::findOrFail($id)
      ]);
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
       $request->validate([
      'fname'=>'required',
      'lname'=>'required',
      'birf'=>'required',
      'mobile'=>['required','integer'],
      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      ]);

      $record = Employes::findOrFail($id);


            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename.'.'.$extension;
            // UploadImage
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

      $record->fname=$request->input('fname');
      $record->lname=$request->input('lname');
      $record->mobile=$request->input('mobile');
      $record->birf=$request->input('birf');
      $record->name = $filenameWithExt;
      $record->path = $path;

      $record->save();

      return redirect()->Route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      employes::where('id', $id)->delete();
      return redirect()->Route('employes.index');
    }

    public function insert() {
        return view('employes.insert');
    }
}
