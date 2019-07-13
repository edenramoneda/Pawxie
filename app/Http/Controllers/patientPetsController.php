<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petsModel;
class patientPetsController extends Controller
{
    public function index(){
        return view('Home/pets');
    }
    public function getPets(){
        return petsModel::
        join('tbl_owners AS o','tbl_pets.owner_id','o.owner_id')->get();
    }
}
