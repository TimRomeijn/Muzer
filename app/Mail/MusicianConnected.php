<?php

namespace App\Mail;

use App\BandProfile;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MusicianConnected extends Mailable
{
    use Queueable, SerializesModels;


    public $mailadress;

//    public $band;

    public function __construct(Request $request)
    {
        $this->mailadress = $request->get('email');
//        $this->band = BandProfile::all()->where('name', '=' , $request->get('profile'))->first()->id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mailadress)
                ->view('mails.musicianconnected')
                ->subject('Verzoek om een band te vormen!');
    }
}
