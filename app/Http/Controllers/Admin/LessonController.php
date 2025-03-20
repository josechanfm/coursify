<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Inertia\Inertia;
use App\Models\Offer;
use App\Models\Config;
use App\Models\Lesson;
use App\Models\Room;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function schedule(Offer $offer)
    {
        return Inertia::render('Admin/Lesson/Schedule',[
            'roomTypes' => Config::get('room_types'),
            'offer'=>$offer->load('students')->load('teachers')->load('lessons.room')
        ]);
    }
    
    public function availableRooms(Request $request){
        $offer=$request->all()['offer'];
        $dates=$request->all()['dates'];

        $roomTypes=array_unique(array_column($dates,'room_type'));
        $rooms=Room::whereIn('type',$roomTypes)->get();

        foreach($dates as $i=>$d){
            // $dates[$i]['rooms']=Lesson::whereBetween('start',[$d['start'],$d['end']])
            //     ->orWhereBetween('end',[$d['start'],$d['end']])
            //     ->get();
            $availableRooms = Room::getAvailableRooms($d['room_type'], $d['date'], $d['start'] , $d['end'] );
            $dates[$i]['rooms']= $availableRooms;
            $dates[$i]['selected']=[];
        };

        return response()->json([
            'rooms'=>$rooms,
            'selectedDates'=>$dates
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $offer = Offer::find($data['offer_id']);
        $offer->lessons()->createMany($data['lessons']);
        return ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
