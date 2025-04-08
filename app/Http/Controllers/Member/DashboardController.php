<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $studentDetail = $request->user()->student;
        $applications = $studentDetail->applications;
        collect($applications)->each(function ($v) {
            $v->offer;
            $v->payment;
        });
        
        return Inertia::render('Member/Dashboard', [
            'applications' => $applications,
            'studentDetail' => $studentDetail
        ]);
    }
}
