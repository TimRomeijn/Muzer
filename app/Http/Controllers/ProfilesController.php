<?php

namespace App\Http\Controllers;

use App\BandProfile;
use App\MusicianProfile;
use App\StageProfile;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function selectprofiletype() {


        return view('auth.selectprofiletype');
    }
    public function musicianprofile (  MusicianProfile $profile, $tab = 'Overzicht') {

        $collection = [
          'Overzicht'=>['Instrumenten', 'Genre', 'Regio/Locatie', 'Invloeden', 'Opzoek Naar', 'Soort Muzikant', 'Socials' ],
          'Materiaal'=>["Muziek", "Video", "Foto's"],
          "Planning"=>["Planning", "Tijdsbeschikking"],
          "Reviews"=>["Reviewtitel"]
        ];
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "musicianprofile";

        return view('profiles.musicianprofile' ,compact('tabs', 'blocks', 'currentProfile' , 'profile'));
    }

    public function bandprofile ( BandProfile $profile, $tab = 'Overzicht') {

        $collection =[
            'Overzicht'=>['Bio', 'Repertoire/Setlist', 'Regio/Locatie', 'Invloeden', 'Genre', 'Gage', 'Socials' ],
            'Materiaal'=>["Muziek", "Video", "Foto's"],
            "Planning"=>["Planning", "Tijdsbeschikking", "Shows"],
            "Downloads"=>["Foto's", "Riders/Stageplans", "CV", "Contract", "Perskit"],
            "Reviews"=>["Reviewtitel"]
        ];
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "bandprofile";

        $musicianprofiles = MusicianProfile::all()->where('band_id', '=',  $profile->id);
        $stageprofiles = StageProfile::all();

        return view('profiles.bandprofile',compact('tabs', 'blocks' ,'currentProfile' , 'profile', 'musicianprofiles', 'stageprofiles'));
    }

    public function stageprofile (StageProfile $profile, $tab = 'Overzicht') {

        $collection =[
            'Overzicht'=>['Contact', 'Zalen/Capaciteit', 'Genres', 'Gage', 'Locatie', 'Socials' ],
            "Agenda"=>["Kalender", "Shows"],
            'Technisch'=>["Equipment aanwezig", "Overig"],
            "Visueel"=>["Foto's", "Video"],
            "Reviews"=>["Reviewtitel"],
            "Downloads"=>["Contract", "Stageplan", "Riders"]
        ];
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "stageprofile";

        return view('profiles.stageprofile',compact('tabs', 'blocks', 'currentProfile', 'profile'));
    }

    public function store() {


        dd(Request()->all());
    }
}
