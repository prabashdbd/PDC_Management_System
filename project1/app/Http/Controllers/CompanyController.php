<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company_detail;
use App\User;
use App\contact_person;
use Illuminate\Support\Facades\Hash;


class CompanyController extends Controller
{
    //
    public function index(Request $request)
    {
        
          $company = company_detail::where('is_approved','=','1')->get();;
          return view ('company.company_view', compact('company'));
    }
    public function approve_comp(Request $request)
    {
        
          $appr_company = company_detail::where('is_approved','=','0')->get();
          return view ('company.company_approve', compact('appr_company'));
    }

    public function approve()
    {
        $id = $_POST['id'];   
        $company_to_appr = company_detail::where('company_details.id','=',$id)->first();
        $company_to_appr->is_approved=1;
        $company_to_appr->update();

        return $company_to_appr;
        
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

        $user = new user;
        $user->role_id=3;
        $user->company_id=$company->id;
        $user->username=$contactPerson->email;
        $user->password=Hash::make($request['email']);
        $user->save();

        return redirect()->back()->with(['success'=>'Company Registered successfully !']);

    }
}
