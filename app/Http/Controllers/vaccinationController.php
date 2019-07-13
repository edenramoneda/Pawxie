<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vaccinationsModel;
class vaccinationController extends Controller
{
    public function index(){
        return view('Home/vaccination');
    }
    public function getVaccinations(){
        return vaccinationsModel::all();
    }
}
