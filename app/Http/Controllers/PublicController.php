<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class PublicController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function bloc() {
        return view('blog');
    }

    public function contacts() {
        return view('contacts');
    }

    public function webSites() {
        return view('websites');
    }

    public function ecommerce() {
        return view('ecommerce');
    }

    public function management() {
        return view('management');
    }

    public function restyling() {
        return view('restyling');
    }

    public function contactSubmit(ContactRequest $req) {
        $service = $req->service;
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $message = $req->message;
        $page = $req->page;

        $contact = compact('service', 'name', 'email', 'phone', 'message', 'page');

        Mail::to('info@fabioangelici.com')->send(new ContactMail($contact));

        return redirect(route('public.thanks', compact('name')));
    }

    public function thanks($name) {
        return view('thanks', compact('name'));
    }
}
