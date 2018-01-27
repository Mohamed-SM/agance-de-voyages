<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

use App\Trip;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $menuTrips = trip::orderby('id', 'desc')->take(5)->get();
        //show only 5 items at a time in descending order
    
        
        // Sharing is caring
        View::share('menuTrips', $menuTrips);
    } 
    
}
