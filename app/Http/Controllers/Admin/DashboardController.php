<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Offer;

class DashboardController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Dashboard',[
            'offers' => Offer::with(['course','status'])->get(),
        ]);
    }
}
