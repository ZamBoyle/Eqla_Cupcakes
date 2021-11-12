<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('contacts');
    }

    public function store(ContactRequest $request){
        return view('confirm');
    }
}