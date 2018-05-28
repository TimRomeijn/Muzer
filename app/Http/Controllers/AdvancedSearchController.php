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

//        $results = [$musiciansearches, $bandsearches, $stagesearches];

        $mfilters = ['genre', 'location', 'instruments', 'typemusician'];
        foreach($mfilters as $filter) {
            if ($request->has($filter)) {
                if (!is_null($request->{$filter})){
                    dd($musiciansearches = $musiciansearches->where($filter, '=' ,$request->{$filter}));
                }else {
                    dd('Ja hallo faalhaasje');
                }
            }
        }
        $bfilters = ['genre', 'location'];
        foreach($bfilters as $filter) {
            if ($request->has($filter)) {
                if (!is_null($request->{$filter})) {
                    dd($bandsearches = $bandsearches->where($filter, '=' ,$request->{$filter}));
                }else {
                    dd('Ja hallo faalhaasje');
                }
            }
        }
        $sfilters = ['genre', 'location'];
        foreach($sfilters as $filter) {
            if ($request->has($filter)) {
                if (!is_null($request->{$filter})) {
                    dd($stagesearches = $stagesearches->where($filter, '=' ,$request->{$filter}));
                }else {
                    dd('Ja hallo faalhaasje');
                }
            }
        }



//        dd($bandsearches->where('genre','=',$request->genre));

//        return redirect($request->server('HTTP_REFERER'));
    }
}
