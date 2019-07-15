<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petsModel;
use \PDF;
class patientPetsController extends Controller
{
    public function index(){
        return view('Home/pets');
    }
    public function getPets(){
        
        return petsModel::join('tbl_owners AS o','tbl_pets.owner_id','o.owner_id')->get();
    }
    public function printReport($id){  
        $pdf = PDF::loadView('Home/Report/report');
        return $pdf->download('invoice.pdf');
    }
}
