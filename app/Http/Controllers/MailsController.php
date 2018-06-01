<?php

namespace App\Http\Controllers;

use App\Mail\BandBooked;
use App\Mail\StageBooked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailsController extends Controller
{
    public function sendmailtoband(Request $request) {

        $bandbookedmail = new BandBooked($request);

        Mail::to('tim28@live.nl')->send($bandbookedmail);

        return back();
    }
    public function sendmailtostage(Request $request) {

        $stagebookedmail = new StageBooked($request);

        Mail::to('tim28@live.nl')->send($stagebookedmail);

        return back();
    }

}
