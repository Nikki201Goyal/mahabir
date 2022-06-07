<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\apply;
use App\Models\booking;
use App\Models\contact;
use App\Models\job;
use App\Models\product;

class FrontendController extends Controller
{
    public function index(){
    
        return view('FrontendUi.index');
    }
    public function about(){
        return view('FrontendUi.About-us.aboutUs');
    }
    public function boardmember(){
        return view('FrontendUi.About-us.boardmember');
    }
    public function book(){
        $product = product::all();
        $i = 1;
        return view('FrontendUi.BookOnline.bookOnline', compact('product','i'));
    }
    public function carrer(){
        $carrer = job::all();
        return view('FrontendUi.Carrer.carrer',compact('carrer'));
    }
    public function contact(){
        return view('FrontendUi.Contact.contact');
    }
    public function product(){
        $items = product::all();
        return view('FrontendUi.products.product',compact('items'));
        
    }
    public function service(){
        return view('FrontendUi.Showroom.Servicing');
    }
    public function brouchre(){
        return view('FrontendUi.Showroom.brouchre');
    }
    public function team(){
        return view('FrontendUi.Team.team');
    }
    public function applyNow(){
        return view('FrontendUi.Carrer.applyNow');
    }

    public function storeContact(Request $request){
       
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'emailaddress'=>'required',
            'subject'=>'required',
            'message'=>'required', 
        ]);
        contact::create([
            'name' => $request->name,
             'phone' => $request->phone,
             'emailaddress' => $request->emailaddress,
             'subject' => $request->subject,
             'message' => $request->message,
         
 
         ]);  
        
         return redirect()->back();
 
      }
      
      public function storeJobApplied(Request $request){
       
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'vacancy'=>'required',
            'country'=>'required',
            'street'=>'required', 
            'town'=>'required',
            'email'=>'required',
            'phone'=>'required',
          
        ]);

        apply::create([
            'firstname' => $request->firstname,
             'lastname' => $request->lastname,
             'vacancy' =>$request->vacancy,
             'country' => $request->country,
             'street' => $request->street,
             'town' => $request->town,
             'email' => $request->email,
             'phone' => $request->phone,
         ]);  
        
         return redirect()->back();
 
      }

      public function storeBooking(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'item'=>'required',
            'country'=>'required',
            'street'=>'required',
            'postcode'=>'required',
            'town'=>'required',
            'phone'=>'required',
            'email'=>'required',
            
        ]);
        
        booking::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'country' => $request->country,
            'street' => $request->street,
            'postcode' => $request->postcode,
             'town' => $request->town,
             'item' => $request->item,
             'phone' => $request->phone,
             'email' => $request->email,
         ]);  
    
      }
}
