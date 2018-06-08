<?php

namespace App\Mail;

use App\BandProfile;
use App\MusicianProfile;
use App\StageProfile;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class StageBooked extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $profile;

    public $contract;

    public $name;

    public $band;

    public $genre;

    public $bandmembers;

    public $profilepage;

    public $mailcontent;

    public $mailadress;

    public $phonenumber;

    public function __construct(Request $request)
    {
        $this->profile = $request->get('profile');
        $this->name = StageProfile::all()->where('id', '=',$request->get('id'))->first()->name;
        $this->genre = BandProfile::all()->where('name', '=',$this->profile)->first()->genre;
        $this->band = BandProfile::all()->where('name', '=' , $request->get('profile'))->first()->id;
        $this->bandmembers = MusicianProfile::all()->where('band_id', '=', $this->band  );
        $this->mailadress = $request->get('email');
        $this->mailcontent = $request->get('bookingstagereason');
        $this->phonenumber = $request->get('phonenumber');

//        dd( $this->name);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        if ($request->has('contract')) {
            return $this->from($this->mailadress)
                ->subject('Boekingsverzoek podium')
                ->view('mails.stagebooked')
                ->attach($this->contract = $request->files->get('contract')->getRealPath(), [
                    'as' => $request->files->get('contract')->getClientOriginalName(),
                    'mime' => $request->files->get('contract')->getMimeType(),
                ]);
        } else {
            return $this->from($this->mailadress)
                ->view('mails.stagebooked')
                ->subject('Boekingsverzoek podium');
        }
    }
}
