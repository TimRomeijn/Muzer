<?php

namespace App\Http\Controllers;

use App\BandProfile;
use App\MusicianProfile;
use App\StageProfile;
use Illuminate\Http\Request;

class AdvancedSearchController extends Controller
{
    public function index(){

        $musicianprofiles = MusicianProfile::all();

        return view('advancedsearch.musiciansearch' , compact('musicianprofiles'));
    }

    public function bandsearch(){

        $bandprofiles = BandProfile::all();

        return view('advancedsearch.bandsearch', compact('bandprofiles'));
    }

    public function stagesearch(){

        $stageprofiles = StageProfile::all();

        return view('advancedsearch.stagesearch', compact('stageprofiles'));
    }

    public function getFilterData(Request $request) {



        $musiciansearches = MusicianProfile::all();
        $bandsearches = BandProfile::all();
        $stagesearches = StageProfile::all();

        $filterResults = array_collapse([$musiciansearches, $bandsearches, $stagesearches]);

        dd($musiciansearches->where('location','=',$request->location));

//        return redirect($request->server('HTTP_REFERER'));
    }
}
