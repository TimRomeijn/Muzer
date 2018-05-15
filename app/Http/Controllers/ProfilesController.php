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
    public function musicianprofile ( $tab = 'Overzicht') {

        $collection = [
          'Overzicht'=>['Instrumenten', 'Genre', 'Regio/Locatie', 'Invloeden', 'Opzoek Naar', 'Soort Muzikant', 'Socials' ],
          'Materiaal'=>["Muziek", "Video", "Foto's"],
          "Planning"=>["Planning", "Tijdsbeschikking"],
          "Reviews"=>["Reviewtitel"]
        ];
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "musicianprofile";

        $musicianprofile = MusicianProfile::all();

        return view('profiles.musicianprofile' ,compact('tabs', 'blocks', 'currentProfile','musicianprofile'));
    }

    public function bandprofile ( $tab = 'Overzicht') {

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

        $bandprofile = BandProfile::all();

        return view('profiles.bandprofile',compact('tabs', 'blocks' ,'currentProfile' , 'bandprofile'));
    }

    public function stageprofile ($tab = 'Overzicht') {

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

        $stageprofile = StageProfile::all();

        return view('profiles.stageprofile',compact('tabs', 'blocks', 'currentProfile', 'stageprofile'));
    }

    public function show(MusicianProfile $profile){



        return $profile;
    }
}
