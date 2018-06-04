<?php

namespace App\Mail;

use App\StageProfile;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

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

    public $profilepage;

    public $mailcontent;

    public $mailadress;

    public $phonenumber;

    public function __construct(Request $request)
    {

        $this->profile = $request->get('profile');
        $this->name = StageProfile::all()->where('id', '=',(basename($_SERVER['HTTP_REFERER'])))->first()->name;
        $this->mailadress = $request->get('email');
        $this->mailcontent = $request->get('bookingstagereason');
        $this->phonenumber = $request->get('phonenumber');


        $this->profilepage = $request->route('profile');
//        dd($this->profilepage);
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
                ->view('mails.stagebooked')
                ->attach($this->contract = $request->files->get('contract')->getRealPath(), [
                    'as' => $request->files->get('contract')->getClientOriginalName(),
                    'mime' => $request->files->get('contract')->getMimeType(),
                ]);
        } else {
            return $this->from($this->mailadress)
                ->view('mails.stagebooked');
        }
    }
}
