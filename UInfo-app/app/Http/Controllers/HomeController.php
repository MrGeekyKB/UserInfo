<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
      return view('welcome');
  }
  public function emp_data() {
      return view('employes_data');
  }
  public function insert() {
      return view('insert');
  }
  public function update() {
      return view('update');
  }
  public function delete() {
      return view('delete');
  }
  public function about() {
      return view('about');
  }
}
