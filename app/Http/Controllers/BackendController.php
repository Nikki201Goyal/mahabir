<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\job;
use App\Http\Controllers\jobController;
use App\Models\product;
use App\Http\Controllers\productController;
use App\Models\apply;
use App\Models\booking;
use App\Models\contact;
use Carbon\Carbon;

class BackendController extends Controller
{



    public function index(){
        return view('dashboardui.dashboard');
    }
    public function product(){
        return view('dashboardui.product.product');
    }
    public function jobs(){
        return view('dashboardui.jobs.jobs');
    }
    public function JobsApplied(){
        $Apply = apply::all();
        $i=1;
        return view('dashboardui.JobsApplied.jobsApplied',compact('Apply','i'));
    }
    public function Contact(){
        $contact = contact::all();
        $i=1;
        return view('dashboardui.Contact.contact', compact('contact', 'i'));
    }
    public function ConInfo($id){
        $mytime = Carbon::now()->format('d-m-Y');
     $contact=contact::findOrFail($id);
    return view('dashboardui.Contact.conInfo', compact('contact', 'mytime'));
    }


    public function editproduct(){
        return view('dashboardui.product.editproduct');
        return redirect()->route('viewProducts');
    }
    public function editjob(){
        return view('dashboardui.jobs.editjobs');
        return redirect()->route('viewJobs');
    }
    public function booking(){
        $booking = booking::all();
        $products = product::all();
        $i=1;
        return view('dashboardui.booking.booking',compact('booking','i','product'));
    }

}
