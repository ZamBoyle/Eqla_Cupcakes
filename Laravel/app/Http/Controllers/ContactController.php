<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function create(){
        return view('contacts');
    }

    public function store(ContactRequest $request){
        return view('confirm');
    }
}
