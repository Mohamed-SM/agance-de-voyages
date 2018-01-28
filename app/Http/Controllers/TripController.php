<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

use Auth;
use Session;

class TripController extends Controller
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
         $trips = Trip::orderby('id', 'desc')->paginate(10); //show only 10 items at a time in descending order

         foreach($trips as $trip){
             $places_taken = 0;
             foreach($trip->reservations as $reservation){
                $places_taken+= $reservation->places;
             }
             $trip->places_rest = $trip->places - $places_taken;
             $trip->places_taken = $places_taken;
         }

        return view('trips.adminindex', compact('trips'));
    }

    public function userindex()
    {
         $trips = Trip::orderby('id', 'desc')->paginate(9); //show only 9 items at a time in descending order

         foreach($trips as $trip){
             $places_taken = 0;
             foreach($trip->reservations as $reservation){
                $places_taken+= $reservation->places;
             }
             $trip->places_rest = $trip->places - $places_taken; 
         }

        return view('trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'description' =>'required',
            'price' =>'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'places' =>'required|numeric',
            'start_at' =>'required|date',
            'end_at' =>'required|date',
        ]);

        $input = $request->only('title', 'description','price','places','start_at','end_at');

        $trip = new Trip();
        $trip->fill($input);

        if ($request['image']) {
            $getimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/tours'),$getimageName);    
            $trip->image = $getimageName;
        }

        $trip->save();

        return redirect()->route('trips')
        ->with('flash_message', 'Article,
            '. $trip->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip = Trip::findOrFail($id); //Find trip of id = $id

        $places_taken = 0;
        foreach($trip->reservations as $reservation){
            $places_taken+= $reservation->places;
        }
        $trip->places_rest = $trip->places - $places_taken;

        return view ('trips.show', compact('trip'));
    }

    public function usershow($id)
    {
        $trip = Trip::findOrFail($id); //Find trip of id = $id

        $places_taken = 0;
        foreach($trip->reservations as $reservation){
            $places_taken+= $reservation->places;
        }
        $trip->places_rest = $trip->places - $places_taken;

        return view ('trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(trip $trip)
    {
        //$trip = Trip::findOrFail($id); //Find trip of id = $id
        return view ('trips.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trip $trip)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'description' =>'required',
            'price' =>'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'places' =>'required|numeric',
            'start_at' =>'required|date',
            'end_at' =>'required|date',
            ]);

            $input = $request->only('title', 'description','price','places','start_at','end_at');

            $trip->fill($input);

            if ($request['image']) {
                $getimageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/tours'),$getimageName);    
                $trip->image = $getimageName;
            }

            $trip->save();

            return redirect()->route('trips')
            ->with('flash_message', 'Article,
             '. $trip->title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(trip $trip)
    {
        //
    }
}
