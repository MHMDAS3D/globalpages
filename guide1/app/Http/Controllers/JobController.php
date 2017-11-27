<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session ;
use App\Job;
use App\JobType;
use Response;
use App\User;
use Hash;
class JobController extends Controller
{
    function show()
    {
        $arr = array('', '', '', '', '', '', '', 'current', '','','');
        $jobs= Job::all();
        $cats= JobType::all();

        return view('admin.jobs',compact('arr','jobs','cats'));
    }
    function addJobs()
    {
        $arr = array('', '', '', '', '', '', '', 'current', '','','');
        $cats= JobType::all();


        return view('admin.addjobs',compact('arr','cats'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        $job = new Job();
        $job->title_ar = request('job_ar');
        $job->title_en = request('job_en');
        $job->desc_ar = request('desc_ar');
        $job->desc_en = request('desc_en');

        $job->company_name_ar = request('company_name_ar');
        $job->company_name_en = request('company_name_en');

        $job->salary = request('salary');


        $job->type_id=	request('cat_id');

        $job->save();
        Session::flash('success', 'This job was successfully saved.');

        return back();


    }
    public function addcats(Request $request)
    {
        $arr = array('', '', '', '', '', '', '', 'current', '','','');


        return view('admin.addCatJob',compact('arr'));

    }
    public function storecat(Request $request)
    {
        $this->validate($request, [

        ]);

        $job = new JobType();
        $job->name_ar = request('title_ar');
        $job->name_en = request('title_en');
        $job->save();
        Session::flash('success', 'This job type was successfully saved.');

        return back();

    }


    public function delete(Job $id)
    {
        $id->delete();
        Session::flash('delete', 'This Job was successfully deleted.');
        return redirect('/jops');

    }

    function showService()
    {
        $jobs=Job::with('jobtype')->get();
        return Response::json(array('Jobs' =>$jobs
        , 'state' => 'true'));
    }

    function getJobById($id)
    {
        $jobs=Job::with('jobtype')->find($id)->get();
        return Response::json(array('Job' =>$jobs
        , 'state' => 'true'));
    }
public function isAuth(Request $request)
{
    $user = User::where('email','=',$request->email)->first();

   if ($user)
   {
       $ss=  Hash::check($request->password , $user->getAuthPassword());

       if ($ss){
           return 1 ;
       }else{
           return  0 ;
       }

   }
   else{
       return 0 ;
   }

}
public function regester(Request $request)
{
        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return 'sassss' ;
    }

public function showCategory()
{
    $jobs=JobType::all();
    return Response::json(array('Jobs' =>$jobs
    , 'state' => 'true'));
}

}
