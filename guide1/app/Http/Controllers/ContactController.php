<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;
class ContactController extends Controller
{
    function show()
    {
        $arr = array('', '', '', '', '', '', '', '', '','','current');
        $contact= Contact::all();
        return view('admin.contact',compact('arr','contact'));
    }
    function addmap()
    {
        $contact = Contact::find(1);
        $contact->lat =  request('lat');
        $contact->lang =  request('long');
        $contact->save();
        return back();
    }
    public function update(Request $request)
    {
        $Contact=Contact::find(1);
        $Contact->FB = request('fb');
        $Contact->twitter = request('twitter');
        $Contact->skype = request('skype');
        $Contact->youtube = request('youtube');
        $Contact->instagram = request('instagram');
        $Contact->save();

        Session::flash('update', 'This Contact was successfully updated.');

        return back();



    }

}
