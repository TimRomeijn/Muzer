<?php

namespace App\Http\Controllers;

use App\BandProfile;
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

        $bandprofiles = BandProfile::all()->where('id','=',$profile->band_id);

        return view('profiles.musicianprofile' ,compact('tabs', 'blocks', 'currentProfile' , 'profile', 'bandprofiles'));
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
        $profile->location = $request->location;
        $profile->save([$profile]);

        //TODO: Redirect to created profile

        return redirect('/home');

    }
}
