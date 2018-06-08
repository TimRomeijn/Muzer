<?php

namespace App\Mail;

use App\BandProfile;
use App\StageProfile;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class BandBooked extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public $profile;

    public $name;

    public $stage;

    public $contract;

    public $mailcontent;

    public $mailadress;

    public function __construct(Request $request)
    {
        $this->name = BandProfile::all()->where('id', '=',$request->get('id'))->first()->name;
        $this->stage = StageProfile::all()->where('name', '=' , $request->get('profile'))->first()->id;
        $this->profile = $request->get('profile');
        $this->mailadress = $request->get('email');
        $this->mailcontent = $request->get('bookingbandreason');

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
                ->view('mails.bandbooked')
                ->subject('Boekingsverzoek band')
                ->attach($this->contract = $request->files->get('contract')->getRealPath(), [
                    'as' => $request->files->get('contract')->getClientOriginalName(),
                    'mime' => $request->files->get('contract')->getMimeType(),
                ]);
        } else {
            return $this->from($this->mailadress)
                ->view('mails.bandbooked')
                ->subject('Boekingsverzoek band');
        }
    }
}
