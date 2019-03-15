<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company_detail;
use App\User;
use App\companyAdverts;
use App\contact_person;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
        return $id;   
        $company_to_appr = company_detail::where('company_details.id','=',$id)
        ->where('company_details.is_approved','=','0')->first();
        $company_to_appr->is_approved=1;
        $company_to_appr->update();

        return $company_to_appr;
        
    }
    public function delete_request()
    {
        $id = $_POST['id'];
        $company_to_del = company_detail::where('company_details.id','=',$id)
        ->where('company_details.is_approved','=','0')->first();
        $company_to_del->delete();
        
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
    public function adverts(Request $request)
    {
        $cid = Auth::user()->company_id;
        $advert = companyAdverts::where('comp_adverts.company_id','=',$cid)->get();
        return view ('company.company_advert',compact('cid','advert'));
    }

    public function add_advert(Request $request)
    {
        if($request->ajax()){

            $this->validate($request, [
                'advert_file' => 'required|mimes:jpeg,png,pdf|max:10240',
                'ad_name' => 'required',
                'ad_info' => 'required',
             ]);
            $cid = $request->cid;

            $advert = new companyAdverts;
            $advert->company_id = $request->cid;
            $advert->ad_name = $request->ad_name;
            $advert->ad_info = strip_tags($request->ad_info);
            $advert->no_vacancies = $request->no_vacancies;
            $advert->is_approved = 0;


            $advert_file = $request->file('advert_file');
            $extension =  '.'.$advert_file->getClientOriginalExtension();
            $adName = $advert_file->getClientOriginalName();
            $path =  $advert_file->move('advert_documents/',$adName);

            $advert->ad_path = $path;
            $advert->save();

            return $advert;                        
            
        }
    }

    public function advert_view(Request $request)
    {        
        $advert_appr = DB::table('comp_adverts')
        ->leftJoin('company_details', 'comp_adverts.company_id', '=', 'company_details.id')
        ->select('comp_adverts.*','company_details.comp_name')
        ->where('comp_adverts.is_approved','=','0')
        ->get();
        // return $advert_appr;
        return view ('company.company_approve_advert',compact('advert_appr'));
    }

    public function advert_view_approve(Request $request)
    {        
        if($request->ajax()){

        $advert_id = $request->id;

        $advert_appr_view = DB::table('comp_adverts')
        ->leftJoin('company_details', 'comp_adverts.company_id', '=', 'company_details.id')
        ->select('comp_adverts.*','company_details.comp_name')
        ->where('comp_adverts.id','=',$advert_id)
        ->get();
        }
        return $advert_appr_view;
    }

    public function advert_approve(Request $request)
    {
        if($request->ajax()){
        
        $advert_id = $request->id;

        $appr_advert = companyAdverts::where('comp_adverts.id','=',$advert_id)
        ->where('comp_adverts.is_approved','=','0')->first(); 
        $appr_advert->is_approved=1;
        $d=Carbon::now();$d->addHours(5)->addMinutes(30);
        $appr_advert->approved_at=$d->toDateTimeString();
        $appr_advert->update();
        return $appr_advert;
        }
    }
}
