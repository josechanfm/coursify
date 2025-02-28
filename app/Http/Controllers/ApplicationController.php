<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Application;
use App\Models\Student;
use LDAP\Result;
use App\Http\Controllers\Api\IdValidatorController;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function form(Offer  $offer)
    {
        $offer->course;
        return Inertia::render('ApplicationForm', [
            'offer' => $offer,
            'application' => (Object)[
                'offer_id'=>$offer->id,
                'id_type'=>'MO'
            ],
        ]);
    }
    public function checker(Request $request){
        $student=null;
        $isValid=0;
        $idValidator = new IdValidatorController();

        if($idValidator->verifyId($request)){
            $isValid=1;
            $student=Student::where('id_type',$request->id_type)->where('id_num',$request->id_num)->get()->first();
            if($student){
                $email=$student->email;
                $isValid=2;
            }
        }
       return response()->json(['is_valid'=>$isValid,'student'=>$student]);
    } 
    public function submit(Request $request)
    {
        dd($request->all());
    }

}
