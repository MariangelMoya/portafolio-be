<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactRequest $request): void
    {
        Mail::to('moya.mariangel.jose@gmail.com')->send(new ContactMail($request->validated()));
    }
}
