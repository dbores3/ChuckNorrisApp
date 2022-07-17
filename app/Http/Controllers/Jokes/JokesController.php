<?php

namespace App\Http\Controllers\Jokes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\Jokes\SendJokesService;

class JokesController extends Controller
{
    protected $SendJokesService;
    /**
     * Description: Controller that gets the emails & sends a Chuck Norris joke to each one
     * Author: David Bores
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct(SendJokesService $SendJokesService)
    {   
        //Business logic for the sending the jokes
        $this->SendJokesService = $SendJokesService;
    }

    public function send(Request $request)
    {
        $emails = explode(',',$request->emails);
        //Sends the jokes
        $sendJokes = $this->SendJokesService->sendJokes($emails); 
        return back()->with([
            'status' => $sendJokes
        ]);
    }
}