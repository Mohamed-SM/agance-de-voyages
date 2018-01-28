<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

use App\Trip;
use Auth;
use Session;

class ReservationController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::orderBy('status')->paginate(10);
        return view('reservations.adminindex',compact('reservations'));
    }

    public function userindex()
    {
        $reservations = Reservation::where('user_id',Auth::user()->id)->orderBy('status')->get();
        return view('reservations.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $this->validate($request, [
            'places' =>'required|numeric',
        ]);
        $trip = Trip::find($id);
        $reservation = new Reservation();
        $reservation->user_id = Auth::user()->id;
        $reservation->trip_id = $trip->id;
        $reservation->places = $request['places'];
        $reservation->status = 0;
        $reservation->payment_information = 'pas encor payer';
        $reservation->save();

        return redirect()->route('reservations.show',$reservation->id)
        ->with('flash_message', 'Reservations dans'. $trip->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        if($reservation->status){
            redirect()->route('reservations.show',$reservation->id)
        ->with('flash_message', 'reservation non modifiable pour le mement');
        }
        $places_taken = 0;
        foreach($reservation->trip->reservations as $res){
            $places_taken+= $res->places;
        }
        $reservation->places_rest = $reservation->trip->places - $places_taken + $reservation->places;
        
        return view('reservations.edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'places' =>'required|numeric',
        ]);
        $reservation = Reservation::find($id);
        $reservation->places = $request['places'];
        $reservation->save();

        return redirect()->route('reservations.show',$reservation->id)
        ->with('flash_message', 'Reservations modifer ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        //Find a reservation with a given id and delete
        $reservation = Reservation::findOrFail($id); 
        
        if($reservation->status){
            redirect()->route('reservations.show',$reservation->id)
        ->with('flash_message', 'reservation non modifiable pour le mement');
        }

        $reservation->delete();

        return redirect()->route('reservations')
            ->with('flash_message',
                'Reservation supprimé.');
    
    }
}
