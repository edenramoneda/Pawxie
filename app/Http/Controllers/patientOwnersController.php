<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OwnersModel;
class patientOwnersController extends Controller
{
    public function index(){
        return view('Home/owners');
    }

    public function getOwners(){
        return OwnersModel::all();
    }
}
