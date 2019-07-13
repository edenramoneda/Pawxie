<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\labtestModel;
class labTestController extends Controller
{
    public function index(){
        return view('Home/labtest');
    }
    public function getLabTest(){
        return labtestModel::all();
    }
}
