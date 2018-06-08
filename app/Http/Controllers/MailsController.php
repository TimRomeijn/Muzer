<?php

namespace App\Http\Controllers;

use App\BandProfile;
use App\Mail\BandBooked;
use App\Mail\MusicianConnected;
use App\Mail\StageBooked;
use App\MusicianProfile;
use App\StageProfile;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;


class MailsController extends Controller
{
    public function sendmailtoband(Request $request) {

        $previousUrl = url()->previous();;
        $urlSegments = explode('/', $previousUrl);

        $bandbookedmail = new BandBooked($request);

        $profile = BandProfile::all()->where('id', '=', $urlSegments[5])->first()->email;

        Mail::to($profile)->send($bandbookedmail);

        return back();
    }
    public function sendmailtostage(Request $request) {

        $previousUrl = url()->previous();;
        $urlSegments = explode('/', $previousUrl);

        $stagebookedmail = new StageBooked($request);

        $profile = StageProfile::all()->where('id', '=', $urlSegments[5])->first()->email;

        Mail::to($profile)->send($stagebookedmail);

        return back();
    }

    public function sendmailtomusician(Request $request) {

        $previousUrl = url()->previous();;
        $urlSegments = explode('/', $previousUrl);

        $musicianbookedmail = new MusicianConnected($request);

        $profile = MusicianProfile::all()->where('id', '=', $urlSegments[5])->first()->email;

        Mail::to($profile)->send($musicianbookedmail);

        return back();
    }


}
