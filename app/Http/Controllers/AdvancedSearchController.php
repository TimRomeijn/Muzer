<?php

namespace App\Http\Controllers;

use App\BandProfile;
use App\MusicianProfile;
use App\StageProfile;
use Illuminate\Http\Request;

class AdvancedSearchController extends Controller
{
    private $results = [];

    public function index(Request $request)
    {

        $musiciansearches = MusicianProfile::all();

        $results = [$musiciansearches, [], []];

        return view('advancedsearch.musiciansearch' , compact('results' ));
    }

    public function bandsearch(Request $request){

        $bandprofiles = BandProfile::all();

        $results = [[], $bandprofiles, []];

        return view('advancedsearch.bandsearch', compact('bandprofiles', 'results'));
    }

    public function stagesearch(){

        $stageprofiles = StageProfile::all();

        $results = [[], [], $stageprofiles];

        return view('advancedsearch.stagesearch', compact('stageprofiles', 'results'));
    }

    public function getFilterData(Request $request) {
        if (!isset($_GET['type'])){
            return 'error';
        }
        $type = $_GET['type'];

        $musiciansearches = [];
        $bandsearches = [];
        $stagesearches = [];

        if ($type == 'musician') {
            $musiciansearches = MusicianProfile::all();
            $mfilters = ['genre', 'location', 'instruments', 'typemusician'];
            foreach ($mfilters as $filter) {
                if ($request->has($filter)) {
                    if (!is_null($request->{$filter})) {
                        $musiciansearches = $musiciansearches->whereIn($filter, $request->{$filter});
                    }
                }
            }
        }

        if ($type == 'band') {
            $bandsearches = BandProfile::all();
            $bfilters = ['genre', 'location', 'timemanagement', 'missing'];
            foreach ($bfilters as $filter) {
                if ($request->has($filter)) {
                    if (!is_null($request->{$filter})) {
                        $bandsearches = $bandsearches->whereIn($filter, $request->{$filter});
                    }
                }
            }
        }
        if ($type == 'stage') {
            $stagesearches = StageProfile::all();
            $sfilters = ['genre', 'location', 'equipment', 'gage', 'contract'];
            foreach ($sfilters as $filter) {
                if ($request->has($filter)) {
                    if (!is_null($request->{$filter})) {
                        $stagesearches = $stagesearches->whereIn($filter, $request->{$filter});
                    }
                }
            }
        }


        $results = [$musiciansearches, $bandsearches, $stagesearches];

        return view('advancedsearch.'.$type.'search', compact('results'));
    }
}
