<?php
namespace App\Services\Mail;
use Illuminate\Contracts\Mail\Mailer;

class ContactUSMailer{
    private Mailer $mailer;
    public function __construct(Mailer $mailer) {
        $this->mailer=$mailer;
    }
}