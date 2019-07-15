<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petLabTestModel;
use DB;
class petLabTestsController extends Controller
{
    public function index(){
        return view('Home/petlabtest');
    }
    public function getpetLabTests(){
        return petLabTestModel::
        select(DB::raw('MIN(p.pet_id) AS pet_id,p.pet_fullname,
        GROUP_CONCAT(lt.lab_tests)AS lab_test,GROUP_CONCAT(tbl_pet_lab_tests.result) AS result'))
        ->join('tbl_pets AS p','p.pet_id','=','tbl_pet_lab_tests.pet_id')
        ->join('tbl_lab_tests AS lt','lt.lab_test_id','=','tbl_pet_lab_tests.lab_test_id')
        ->groupBy('p.pet_fullname')
        ->get();
    }
    public function petLabTestModal($pet_id){
        return petLabTestModel::
        select(DB::raw('p.pet_id AS pet_id,p.pet_fullname,
        lt.lab_tests AS lab_test,tbl_pet_lab_tests.result AS result,
        STR_TO_DATE(tbl_pet_lab_tests.created_at, "%Y-%m-%d") AS date_taken, tbl_pet_lab_tests.next_lab_tests, 
        CONCAT(vet.firstname," ",vet.middlename," ",vet.lastname)AS veterinarian
        '))
        ->join('tbl_pets AS p','p.pet_id','=','tbl_pet_lab_tests.pet_id')
        ->join('tbl_lab_tests AS lt','lt.lab_test_id','=','tbl_pet_lab_tests.lab_test_id') 
        ->join('tbl_veterinary AS vet','vet.veterinary_id','=','tbl_pet_lab_tests.veterinary_id')
        ->where('p.pet_id','=',$pet_id)
        ->get();
    }
}
