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

        return view('advancedsearch.bandsearch', compact( 'results'));
    }

    public function stagesearch(){

        $stageprofiles = StageProfile::all();

        $results = [[], [], $stageprofiles];

        return view('advancedsearch.stagesearch', compact( 'results'));
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
            $searchBandName = $request->input('bandnaam');
            $bandsearchfilter = "bandnaam";
            foreach ($bfilters as $filter) {
                if ($request->has($filter)) {
                    if (!is_null($request->{$filter})) {
                        $bandsearches = $bandsearches->whereIn($filter, $request->{$filter});

                    } elseif (!is_null($request->{$bandsearchfilter})){
                        $bandsearches = collect($bandsearches)->filter(function ($item) use ($searchBandName) {

                            return stripos($item->name, $searchBandName) !== false;
                        });
                    }
                }
            }
        }
        if ($type == 'stage') {
            $stagesearches = StageProfile::all();
            $sfilters = ['genre', 'location', 'equipment', 'gage', 'contract'];
            $searchStageName = $request->input('podiumnaam');
            $stagesearchfilter = "podiumnaam";
            foreach ($sfilters as $filter) {
                if ($request->has($filter)) {
                    if (!is_null($request->{$filter})) {
                        $stagesearches = $stagesearches->whereIn($filter, $request->{$filter});

                    }elseif (!is_null($request->{$stagesearchfilter})){
                        $stagesearches = collect($stagesearches)->filter(function ($item) use ($searchStageName) {

                            return stripos($item->name, $searchStageName) !== false;
                        });
                    }
                }
            }
        }


        $results = [$musiciansearches, $bandsearches, $stagesearches];

        return view('advancedsearch.'.$type.'search', compact('results'));
    }
}
