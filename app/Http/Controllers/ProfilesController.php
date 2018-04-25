<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function musicianprofile ( $tab = 'Overzicht') {

        $collection = [
          'Overzicht'=>['Instrumenten', 'Genre', 'Regio/Locatie', 'Opzoek Naar', 'Soort Muzikant', 'Socials' ],
          'Materiaal'=>["Muziek", "Video", "Foto's"],
          "Planning"=>["Planning", "Tijdsbeschikking"],
          "Reviews"=>["Reviewtitel"]
        ];
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "musicianprofile";

        return view('profiles.musicianprofile' ,compact('tabs', 'blocks', 'currentProfile'));
    }

    public function bandprofile ( $tab = 'Overzicht') {

        $collection =[
            'Overzicht'=>['Bio', 'Repertoire/Setlist', 'Regio/Locatie', 'Genre', 'Gage', 'Socials' ],
            'Materiaal'=>["Muziek", "Video", "Foto's"],
            "Planning"=>["Planning", "Tijdsbeschikking", "Shows"],
            "Downloads"=>["Foto's", "Riders/Stageplans", "CV", "Contract", "Perskit"],
            "Reviews"=>["Reviewtitel"]
        ];
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "bandprofile";

        return view('profiles.bandprofile',compact('tabs', 'blocks' ,'currentProfile'));
    }

    public function stageprofile ($tab = 'Overzicht') {

        $collection =[
            'Overzicht'=>['Contact', 'Capaciteit', 'Genres', 'Gage', 'Locatie', 'Socials' ],
            "Agenda"=>["Kalender", "Shows"],
            'Technisch'=>["Equipment aanwezig", "Overig"],
            "Visueel"=>["Foto's", "Video"],
            "Reviews"=>["Reviewtitel"],
            "Downloads"=>["Contract", "Stageplan", "Riders"]
        ];
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "stageprofile";


        return view('profiles.stageprofile',compact('tabs', 'blocks', 'currentProfile'));
    }
}
