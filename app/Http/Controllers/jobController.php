<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;

class jobController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'responsibilities'=>'required',
            
        ]);
        $Jobs=job::create([
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'responsibilities'=>$request->get('responsibilities')
        ]);
        $Jobs->save();
        return redirect()->route('viewJobs');
    }

    public function index(){
        return view('dashboardui.jobs.viewjobs');
    }
    public function read(){
        $works = job::all();
        dd($works);
        $i=1;
        return view ('dashboardui.jobs.viewjobs',compact('works', 'i'));
    }
    public function edit($id){
        $work=job::findOrFail($id);
        return view ('dashboardui.jobs.editjobs', compact('work'));
    
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'responsibilities'=>'required',
         ]);

         job::find($id)->update($request->all());
         return redirect()->route('viewJobs');
    }
    public function delete($id){
        job::find($id)->delete();
        return redirect()->route('viewJobs');
    }
    public function viewJobs(){
        $works = job::all();
        $i=1;
        return view ('dashboardui.jobs.viewjobs',compact('works', 'i'));
    }
}
