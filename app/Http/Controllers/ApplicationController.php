<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Application;
use App\Models\Student;
use App\Models\User;
use LDAP\Result;
use App\Http\Controllers\Api\IdValidatorController;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function form(Offer $offer)
    {
        $offer->course;
        return Inertia::render('ApplicationForm', [
            'offer' => $offer,
        ]);
    }

    public function result(Application $application, $status = null){
        $application->offer;
        $application->student;
        return Inertia::render('ApplicationResult', [
            'application' => $application,
        ]);
    }

    public function checker(Request $request){
        $student=null;
        $isValid=null;

        // Check exist application
        $exist_apply = Application::where('offer_id',$request->offer_id)->where('id_type',$request->id_type)->where('id_num', $request->id_num)->first();
        if($exist_apply){
            $isValid = 0;
            return response()->json(['is_valid'=>$isValid,'student'=>$student]);
        };
        // 检查 email 存在但 id_num 不同
        $studentWithEmail = Student::where('email', $request->email)->first();
        if ($studentWithEmail && $studentWithEmail->id_num !== $request->id_num) {
            // email已被使用, 不能用來報名
            $isValid = -1;
            return response()->json(['is_valid'=>$isValid,'student'=>$student]);
        }

        // 检查 id_num 存在但 email 不同
        $studentWithIdNum = Student::where('id_type',$request->id_type)->where('id_num', $request->id_num)->first();
        if ($studentWithIdNum && $studentWithIdNum->email !== $request->email) {
            $isValid = 3;
            return response()->json(['is_valid'=>$isValid,'student'=>$studentWithIdNum]);
        }

        $idValidator = new IdValidatorController();

        if($idValidator->verifyId($request)){
            // Id is valid
            $isValid = 1;
            $student=Student::where('id_type',$request->id_type)->where('id_num', $request->id_num)->get()->first();

            if($student){
                if($student->email==$request->email){
                    $isValid = 2;
                }else{
                    $isValid=-9;
                }
            }
        }
        return response()->json(['is_valid'=>$isValid,'student'=>$student]);
    } 
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'id_type' => 'required',
            'id_num'  => 'required',
            'email'   => 'required|email',
        ]);
        $data = $request->all();

        $application = (new Application())->checkAndCreate($data);
        
        // Create Student 就一定 create user
        // 換言之, student中已經有記錄, 就不create user
        $student = Student::where('id_type', $data['id_type'])
                ->where('id_num', $data['id_num']);

        if( $student->exists() ){
            $status = 'exist';
        }else{
            // 沒有 student, 即是第一報名
            $user = (new User())->checkAndCreate($data);
            $student = (new Student())->checkAndCreate($data, $user);
            $status = 'new';
        }

        // Save student id to application
        $application->student_id = $student->first()->id;

        return redirect()->route('application.result', ['application' => $application->id, 'status' => $status]);
    }

}
