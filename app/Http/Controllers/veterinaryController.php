<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\veterinaryModel;
class veterinaryController extends Controller
{
    public function index(){
        return view('Home/veterinarians');
    }
    public function getVeterinaries(){
        return veterinaryModel::all();
    }
}
