<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Models\Article;

class PublicController extends Controller
{
    public function home() {
        $articles = Article::where('is_published', true)->latest()->take(3)->get();
        return view('home', compact('articles'));
    }

    public function method()  {
        return view('method');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function eliografica() {
        return view('eliografica');
    }

    public function meridiane() {
        return view('meridiane');
    }

    public function cilaver() {
        return view('cilaver');
    }

    public function chiara() {
        return view('chiara');
    }

    public function teknofibra() {
        return view('teknofibra');
    }

    public function clima() {
        return view('clima');
    }

    public function blog() {
        $articles = Article::where('is_published', true)->latest()->get();
        return view('blog', compact('articles'));
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

    public function agency() {
        return view('agency');
    }
}
