<?php

namespace App\Services\Jokes;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailJokes;
use Illuminate\Support\Facades\Http;
//Trait for connecting to the Time Tac's API
use App\Traits\OrderEmails;

class SendJokesService{
    /**
     * Description: Business logic for sending a Chuck Norris joke to the emails
     * Author: David Bores 
     *  **/

    //calls the Trait
    use OrderEmails;

    public function sendJokes($emails){
        //Trait to order the emails
        $emails = $this->order($emails);
        
        //Connects to the API & gets one joke
        $joke = Http::get('http://api.icndb.com/jokes/random');
        
        //Creates the variables to send in the email
        $obj_email = new \stdClass();
        $obj_email->subject = "Chuck Norris Joke";
        $obj_email->title = "Check out this joke!";
        $obj_email->joke = $joke['value']['joke'];
        $obj_email->template = "mails.jokes_email";
        //checks if there was a problem in any email
        $status = 0;
        //Sends the joke to each email
        foreach($emails as $email){
            //Tries sending the email
            try {
                Mail::to($email)->send(new EmailJokes($obj_email));
            }catch (\Exception $e) {
                $status++;
            }
        }
        return $status;
    }
}