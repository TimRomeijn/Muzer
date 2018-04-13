<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvancedSearchController extends Controller
{
    public function index(){


        return view('advancedsearch.musiciansearch');
    }

    public function bandsearch(){


        return view('advancedsearch.bandsearch');
    }

    public function stagesearch(){


        return view('advancedsearch.stagesearch');
    }
}
