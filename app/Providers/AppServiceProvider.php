<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Trip;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $menuTrips = Trip::orderby('id', 'desc')->take(5)->get();
        foreach($menuTrips as $trip){
            $places_taken = 0;
            foreach($trip->reservations as $reservation){
               $places_taken+= $reservation->places;
            }
            $trip->places_rest = $trip->places - $places_taken; 
        }
        //show only 5 items at a time in descending order
        // Sharing is caring
        View::share('menuTrips', $menuTrips);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
