<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function musicianprofile () {

        $menuItems = ["Overzicht","Materiaal","Planning","Reviews"];

        return view('profiles.musicianprofile' ,compact('menuItems'));
    }

    public function bandprofile () {

        $menuItems = ["Overzicht","Materiaal","Planning","Downloads","Reviews"];

        return view('profiles.bandprofile',compact('menuItems'));
    }

    public function stageprofile () {

        $menuItems = ["Overzicht","Agenda","Visueel","Technisch","Downloads","Reviews"];

        return view('profiles.stageprofile',compact('menuItems'));
    }
}
