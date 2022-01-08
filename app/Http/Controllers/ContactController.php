<?php

namespace App\Http\Controllers;

use App\Contact;
use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
   public function getContact()
	{
		return view('contact');
	}

	public function postContact(ContactRequest $request)
	{
		//Insertion des données dans la base de données.
		$contact = Contact::create($request->only("nom", "email", "tel", "sujet", "texte"));

		// Envoi du message à l'administrateur. 
		Mail::send('messageContact', $request->all(), function($contact) 
		{
			$contact->to('chrisissifou@gmail.com')->subject('Contact');
		});

		return view('confirmContact');
	}
}
