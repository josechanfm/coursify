<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;
use App\Models\Offer;

class DashboardController extends Controller
{
    public function index(Request $request){
        
        return Inertia::render('Dashboard', [
            'offers' => Offer::all(),
        ]);
    }
}