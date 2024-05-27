<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact(){
        $contacts = Contact::orderBy('id', 'desc')->get();

        return response()->json([
            'contacts' => $contacts
        ], 200);
    }
    public function deleteContact($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
    }

}
