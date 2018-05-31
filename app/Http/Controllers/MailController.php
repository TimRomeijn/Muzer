<?php

namespace App\Http\Controllers;

use App\Mail\BandBooked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendMail() {


        Mail::to('tim28@live.nl')->send(new BandBooked);
    }
}
