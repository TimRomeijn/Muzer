<?php

namespace App\Http\Controllers;

use App\BandProfile;
use App\Mail\BandBooked;
use App\Mail\StageBooked;
use App\StageProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailsController extends Controller
{
    public function sendmailtoband(Request $request) {

        $bandbookedmail = new BandBooked($request);

        $profile = BandProfile::all()->where('id', '=',(basename($_SERVER['HTTP_REFERER'])))->first()->email;

        Mail::to($profile)->send($bandbookedmail);

        return back();
    }
    public function sendmailtostage(Request $request) {

        $stagebookedmail = new StageBooked($request);

        $profile = StageProfile::all()->where('id', '=',(basename($_SERVER['HTTP_REFERER'])))->first()->email;

        Mail::to($profile)->send($stagebookedmail);

        return back();
    }

}
