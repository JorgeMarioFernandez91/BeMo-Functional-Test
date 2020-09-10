<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Http\Controllers\Controller;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objEmailInstance = new \stdClass();
        $objEmailInstance->email_instance_one = 'Demo One Value';
        $objEmailInstance->email_instance_two = 'Demo Two Value';
        $objEmailInstance->sender = 'SenderUserName';
        $objEmailInstance->receiver = 'ReceiverUserName';
        // send to receiver
        Mail::to("jmferna91@gmail.com")->send(new Email($objEmailInstance));

        return view('mail'); # this works
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function send2(Request $request)
    {

        $request->name;
        $request->email;
        $request->message;

        $objEmailInstance = new \stdClass();
        $objEmailInstance->message = $request->message;
        $objEmailInstance->sender = 'BeMo Mock Test';
        $objEmailInstance->receiver = $request->name;

        

        Mail::to($request)->send(new Email($objEmailInstance));

        return view('mail'); # this works
    }
}