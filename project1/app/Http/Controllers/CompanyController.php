<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company_detail;
use App\contact_person;


class CompanyController extends Controller
{
    //
    public function index(Request $request)
    {
        
          $company = company_detail::where('company_id','=','1')->get();//->toArray();         

          $contact = contact_person::where('company_id','=','1')->get();
          //$contact = $company->contact()->all();
          return view ('profile_view', compact('company','contact'));
    }


    public function index_comp(Request $request)
    {
    	return view('company');
    }		
}
