<?php

namespace App\Http\Controllers;

use App\trip;
use Illuminate\Http\Request;

use Auth;
use Session;

class TripController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $trips = Trip::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

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
            'image' => 'image',
            'places' =>'required|numeric',
            'start_at' =>'required|date',
            'end_at' =>'required|date',
            ]);

            $trip = Trip::create($request['title'],$request['descreiption'],$request['price'],$request['places'],$request['start_at'],$request['end_at']);

            return redirect()->route('trips.index')
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
        //
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
        //
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
