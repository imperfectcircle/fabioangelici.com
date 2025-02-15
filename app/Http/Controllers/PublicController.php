<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactGenericRequest;
use App\Http\Requests\ContactServiceRequest;
use App\Http\Resources\ArticleResource;
use App\Mail\GenericMail;
use App\Mail\OffersMail;
use App\Mail\ServiceMail;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(): \Inertia\Response
    {
        $articles = Article::where('is_published', true)->latest()->take(3)->get();
        return inertia('Public/Home', compact('articles'));
    }

    public function about(): \Inertia\Response
    {
        return inertia('Public/About');
    }

    public function services(): \Inertia\Response
    {
        return inertia('Public/Services');
    }

    public function portfolio(): \Inertia\Response
    {
        return inertia('Public/Portfolio');
    }

    public function eliografica(): \Inertia\Response
    {
        return inertia('Public/Portfolio/Eliografica');
    }

    public function chiara(): \Inertia\Response
    {
        return inertia('Public/Portfolio/Chiara');
    }

    public function cilaver() : \Inertia\Response
    {
        return inertia('Public/Portfolio/Cilaver');
    }

    public function arte(): \Inertia\Response
    {
        return inertia('Public/Portfolio/Arte');
    }

    public function remida(): \Inertia\Response
    {
        return inertia('Public/Portfolio/Remida');
    }

    public function shopTeknofibra(): \Inertia\Response
    {
        return inertia('Public/Portfolio/ShopTeknofibra');
    }

    public function teknofibra(): \Inertia\Response
    {
        return inertia('Public/Portfolio/Teknofibra');
    }

    public function blog(): \Inertia\Response
    {
        $articles = Article::where('is_published', true)->latest()->get();
        
        return inertia('Public/Blog', compact('articles'));
    }

    public function articleShow($slug) : \Inertia\Response
    {
        $article = Article::where('slug', $slug)->first();
        return inertia('Public/ArticleShow', [
            'article' => new ArticleResource($article)
        ]);
    }

    public function contact(): \Inertia\Response
    {
        return inertia('Public/Contact');
    }

    
    
    public function contactServices(ContactServiceRequest $req):RedirectResponse
    {
        
        $data = $req->validated();
        
        $contact = [
            'service' => $data['service'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
            'privacy' => $data['privacy'],
        ];

        Mail::to('info@fabioangelici.com')->send(new ServiceMail($contact));
        return back()->with('message', 'Messaggio inviato con successo! Verrai ricontattato a breve.');
    }
    public function contactGeneric(ContactGenericRequest $req): RedirectResponse
    {
        $data = $req->validated();

        $contact = [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
            'privacy' => $data['privacy'],
        ];

        Mail::to('info@fabioangelici.com')->send(new GenericMail($contact));
        return back()->with('message', 'Messaggio inviato con successo! Verrai ricontattato a breve.');
    }

    public function contactOffers(ContactServiceRequest $req): RedirectResponse
    {
        $data = $req->validated();
        
        $contact = [
            'service' => $data['service'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
            'privacy' => $data['privacy'],
        ];

        Mail::to('info@fabioangelici.com')->send(new OffersMail($contact));
        return back()->with('message', 'Messaggio inviato con successo! Verrai ricontattato a breve.');
    }
}
