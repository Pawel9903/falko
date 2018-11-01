<?php

namespace App\Http\Controllers;

use App\Info;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
    public function contact(Request $request)
    {
//        $messages = [
//            'contact_email.required' => 'Adres e-mail jest wymagany!',
//            'name.required' => 'Nazwa jest wymagana!',
//            'subject.required' => 'Temat jest wymagany!',
//            'phone.required' => 'Telefon jest wymagany!',
//            'message.required' => 'Wiadomość jest wymagana!',
//            'contact_email.email' => 'To nie jest poprawny adres e-mail!'
//        ];

        $to = Info::first();
        $to = $to->email;

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $message = $request->get('message');
        Mail::to($to)->send(new Contact("Formularz kontaktowy",$phone, $message, $name, $email));


        return redirect()->back()->with('contact_success', 'Wiadomość została wysłana pomyślnie!');
    }
}
