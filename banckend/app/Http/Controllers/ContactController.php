<?php

namespace App\Http\Controllers;

use App\Mail\send_msg_mail;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getContact(){
        $contacts = Contact::orderBy('id', 'desc')->get();

        return response()->json([
            'contacts' => $contacts
        ], 200);
    }//End Method
    public function deleteContact($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
    }//End Method

    public function addContact(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        //Start Send Email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message
        ];
        Mail::to('chadnitalukder2@gmail.com')->send(new send_msg_mail($data));

   //End Send Email
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'Message Send  successfully'
        ]);
    }//End Method


}
