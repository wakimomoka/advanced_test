<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('/index');
    }
    public function post(Request $request)
    {
        $contact = new Contact;
        $form = $request->all();
        unset($form['_token_']);
        $contact->fill($form)->save();
        return redirect('/thanks');
    }
}
