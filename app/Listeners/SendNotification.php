<?php

namespace App\Listeners;

use App\Events\MailSend;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Member;
use App\Mail\SendDemoMail;
use Mail;

class SendNotification
{
    public $member;
    public $password;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    /**
     * Handle the event.
     *
     * @param  MailSend  $event
     * @return void
     */
    public function handle(MailSend $event)
    {
        $password = $event->password;
        $member = $this->member->where('id',$password->id)->first();
        $details = [
            'title' => 'Event execution mail',
        ];
        Mail::to($member->email)->send(new SendDemoMail($details));
    }
}
