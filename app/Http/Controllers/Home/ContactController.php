<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use App\Models\Footer;

class ContactController extends Controller
{
    public function HomeMain(){
        return view('frontend.index');
    }//End Method

    public function Contact(){
        $allfooter = Footer::findOrFail(1);
        return view('frontend.contact',compact('allfooter'));
    }//End Method

    public function StoreMessage(Request $request){
        Contact::insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'phone' =>$request->phone,
            'message' =>$request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' =>'Your Message Submitted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }//End Method

    public function ContactMessage(){
        $contact = Contact::latest()->get();
        return view('admin.contact.allcontact',compact('contact'));
    }//End Method

    public function DeleteMessage($id){
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' =>'Message Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }//End Method
}
