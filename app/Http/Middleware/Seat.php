<?php

namespace App\Http\Middleware;

use Closure;

class Seat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //middleware('seatmiddleware');
        if ($request->input('seat_no') <=10){
            echo "This is ladies Seat";
        }
        else{
            echo "This is common Seat for all";
        }

        return $next($request);
    }
}
