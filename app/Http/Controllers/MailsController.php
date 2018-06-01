<?php

namespace App\Http\Controllers;

use App\Mail\BandBooked;
use App\Mail\StageBooked;
use Illuminate\Support\Facades\Mail;


class MailsController extends Controller
{
    public function sendmail() {

        $bandbookedmail = new BandBooked();

        $stagebookedmail = new StageBooked();

        Mail::to('tim28@live.nl')->send($bandbookedmail);

        Mail::to('tim28@live.nl')->send($stagebookedmail);

        return back();
    }
}
