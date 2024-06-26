<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Services::All();
        return view('service.index', compact('services'));
    }


    public function create(Request $request)
    {
        //dd($request);
    //$fileName = time().'.'.$request->logo->extension();
   // $request->logo->move(public_path('company_logos'),$fileName);

    $services = Services::create([
        //'city' => strip_tags($request->input('city')),

        'name'=> strip_tags($request->input('name')),
                
                'description'=> strip_tags($request->input('description')),
                'icon'=> strip_tags($request->input('icon')),
                'status'=> 'active',
               // 'userid'=>  auth()->user()->id,
    ]);

   if($services->save()) {
  //  notify()->success('City Saved Successfully');

  Session::flash('success', "Company successfully created, in your profile");
  return Redirect::to('service');
   }
   }
}
