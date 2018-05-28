<?php

namespace App\Http\Controllers;

use App\BandProfile;
use App\Block;
use App\MusicianProfile;
use App\StageProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth',['only' =>['selectprofiletype']]);
    }

    public function getTabsByProfile($profile) {
        $tabs["musician"] = [
            'Overzicht'=>[1 => 'Instrumenten', 2 => 'Genre', 3=> 'Regio/Locatie', 4=> 'Invloeden', 5=>'Opzoek Naar', 6=>'Soort Muzikant', 7=>'Socials' ],
            'Materiaal'=>[8 => "Muziek", 9 => "Video", 10 => "Foto's"],
            "Planning"=>[11 =>"Planning", 12 => "Tijdsbeschikking"],
            "Reviews"=>[13 => "Reviewtitel"]
        ];

        $tabs["band"] = [
            'Overzicht'=>[14 => 'Bio', 15=> 'Repertoire/Setlist', 16 => 'Regio/Locatie', 17 => 'Invloeden', 18 => 'Genre',  19 => 'Gage',  20 => 'Socials' ],
            'Materiaal'=>[21 => "Muziek",22 => "Video",23 => "Foto's"],
            "Planning"=>[24 =>"Planning", 25 => "Tijdsbeschikking", 26 => "Shows"],
            "Downloads"=>[27 =>"Foto's",28 => "Riders/Stageplans",29 => "CV", 30 =>"Contract", 31 => "Perskit"],
            "Reviews"=>[ 32 => "Reviewtitel"]
        ];
        $tabs["stage"] = [
            'Overzicht'=>[33 => 'Contact', 34 => 'Zalen/Capaciteit', 35 => 'Genres', 36 => 'Gage', 37 =>'Locatie', 38 => 'Socials' ],
            "Agenda"=>[39 => "Kalender", 40 => "Shows"],
            'Technisch'=>[41 => "Equipment aanwezig", 42 => "Overig"],
            "Visueel"=>[43 => "Foto's", 44 => "Video"],
            "Reviews"=>[45 =>"Reviewtitel"],
            "Downloads"=>[46 => "Contract", 47 => "Stageplan", 48 => "Riders"]
        ];

        return $tabs[$profile];
    }

    public function selectprofiletype() {


        return view('auth.selectprofiletype');
    }

    public function musicianprofile (  MusicianProfile $profile, $tab = 'Overzicht') {

        $collection = $this->getTabsByProfile("musician");
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "musicianprofile";
        $blockdata = Block::all()->where('type', '=', 1);
        $newData = [];
        foreach($blockdata as $data) {
            $newData[$data['tab_id']] = $data['text'];
        }
        $bandprofiles = BandProfile::all()->where('id','=',$profile->band_id);
        $type = '1';

        return view('profiles.musicianprofile' ,compact('tabs', 'blocks', 'currentProfile' , 'profile', 'bandprofiles','newData', 'type'));
    }

    public function bandprofile ( BandProfile $profile, $tab = 'Overzicht') {

        $collection =  $this->getTabsByProfile("band");
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "bandprofile";
        $blockdata = Block::all()->where('type', '=', 2);
        $newData = [];
        foreach($blockdata as $data) {
            $newData[$data['tab_id']] = $data['text'];
        }

        $musicianprofiles = MusicianProfile::all()->where('band_id', '=',  $profile->id);
        $stageprofiles = StageProfile::all()->where('user_id', '=' , Auth::id() );
        $type = '2';

        return view('profiles.bandprofile',compact('tabs', 'blocks' ,'currentProfile' , 'profile', 'musicianprofiles', 'stageprofiles','newData', 'type'));
    }

    public function stageprofile (StageProfile $profile, $tab = 'Overzicht') {

        $collection = $this->getTabsByProfile("stage");
        $tabs = array_keys($collection);
        $blocks = $collection[$tab];
        $currentProfile = "stageprofile";
        $blockdata = Block::all()->where('type', '=', 3);
        $newData = [];
        foreach($blockdata as $data) {
            $newData[$data['tab_id']] = $data['text'];
        }

        $bandprofiles = BandProfile::all()->where('user_id', '=' , Auth::id() );
        $type = '3';

        return view('profiles.stageprofile',compact('tabs', 'blocks', 'currentProfile', 'profile', 'newData', 'type' ,'bandprofiles'));
    }

    public function store(request $request) {

        //Form-validation for these fields
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'location' => 'required',
        ]);

        $profile = $request->get('profile-types');

        switch ($profile) {
            case "musician-profile":
                $profile = new MusicianProfile();
                break;
            case "band-profile":
                $profile = new BandProfile();
                break;
            case "stage-profile":
                $profile = new StageProfile();
                break;
            default:
                $profile = new MusicianProfile();
        }
        $profile->user_id = auth()->user()->id;
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phonenumber = $request->phonenumber;
        $profile->genre = $request->genre;
        $profile->location = $request->location;
        $profile->save([$profile]);

        //TODO: Redirect to created profile

        return redirect('/home');

    }
}
