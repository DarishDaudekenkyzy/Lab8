<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function send() {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Ddaudekenkyzy';
        $objDemo->receiver = 'Ddaudekenkyzy';

        Mail::to("ddaudekenkyzy@gmail.com")->send(new DemoEmail($objDemo));
    }
}
