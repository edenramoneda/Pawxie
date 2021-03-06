<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petVaccinationsModel;
use DB;
class petVaccinationsController extends Controller
{
    public function index(){
        return view('Home/petvaccination');
    }
    public function petVaccinations(){
        return petVaccinationsModel::
        select(DB::raw('MIN(p.pet_id)AS pet_id,p.pet_fullname,GROUP_CONCAT(v.type_of_vaccination)AS type_of_vaccination,
        GROUP_CONCAT(vaccination)AS vaccination'))
        ->join('tbl_pets AS p','p.pet_id','=','tbl_pet_vaccinations.pet_id')
        ->join('tbl_vaccinations AS v','v.vac_id','=','tbl_pet_vaccinations.vac_id')
        ->groupBy('p.pet_fullname')
        ->get();
    }
    public function vaccinationReportModal($pet_id){

        $vaccinationModal = petVaccinationsModel::
        select(DB::raw('
        p.pet_id,p.pet_fullname, type_of_vaccination, 
        vaccination,STR_TO_DATE(tbl_pet_vaccinations.created_at, "%Y-%m-%d") AS appointment_date,v.duration,
        tbl_pet_vaccinations.next_vaccination,
        CONCAT(vet.firstname," ",vet.middlename," ",vet.lastname)AS veterinarian
        '))
        ->join('tbl_pets AS p','p.pet_id','=','tbl_pet_vaccinations.pet_id')
        ->join('tbl_vaccinations AS v','v.vac_id','=','tbl_pet_vaccinations.vac_id')
        ->join('tbl_veterinary AS vet','vet.veterinary_id','=','tbl_pet_vaccinations.veterinary_id')
        ->where('p.pet_id','=',$pet_id)
        ->get();

       return $vaccinationModal;
    }
}
