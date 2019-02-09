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
    
    public function CompanyReg(Request $request)
    {
        //return $request;
        
        $company = new company_detail;

        $company->comp_name = $request->comp_name;
        $company->comp_website = $request->comp_website;
        $company->comp_parent = $request->comp_parent;
        $company->comp_est_date = $request->comp_est_date;
        $company->comp_reg_num = $request->comp_reg_num;
        $company->comp_add_no = $request->comp_add_no;
        $company->comp_add_street1 = $request->comp_add_street1;
        $company->comp_add_street2 = $request->comp_add_street2;
        $company->comp_add_city = $request->comp_add_city; 
        $company->num_employees = $request->num_employees;
        $company->num_techleads = $request->num_techleads;

        $company->save();

        //return $company;

        $contactPerson = new contact_person;

        $contactPerson->company_id = $company->id;
        $contactPerson->person_name = $request->person_name;
        $contactPerson->email = $request->email; 
        $contactPerson->tel = $request->tel;
        $contactPerson->designation = $request->designation;
       
        $contactPerson->save();

        return redirect()->back()->with(['success'=>'Company Registration successfully !']);

    }
}
