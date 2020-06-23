<?php

namespace App\Http\Controllers;
use App\User;
use App\CompanyDetail;
// use App\Contract\Repository\Company\CompanyRepository as Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // protected $company; 

    // public function __construct(Company $company)
    // {
    //     $this->company = $company;  
       
    // } 

    public function home(){
        

        return view('first');
    }


    //company login methods
    public function companyLogin(){


        return view('web.company.cpmLogin');
    }


    //Rider login methods
    public function riderLogin(){


        return view('web.Rider.riderLogin');
    }


    //company Register methods
    public function companyRegister(){


        return view('web.company.cpmRegister');
    }


    //company Register methods
    public function riderRegister($id){
        $id = decrypt($id);
        $cpmDetail = CompanyDetail::findORFail($id);
        
        return view('web.Rider.riderRegister', compact('cpmDetail'));
    }


    //company Register methods
    public function driverRegister($id){
        $id = decrypt($id);
        $cpmDetail = CompanyDetail::findORFail($id);
        
        return view('web.Driver.driverRegister', compact('cpmDetail'));
    }



    //company login methods
    public function showProfile(Request $request){
       

        $email= $request->email;
    	$password = $request->password;
         return view('web.company.companyProfile', ['company'=> $this->company->signin($request)]);      
    }


    //show all company
    public function index()
    {
       // $company = User::all()->Where('role_id','=',2);
        $company = CompanyDetail::orderBy('id')->paginate(3);
        return view('web.company.companies', ['company'=>$company]);
    }


    //Company Details
    public function cpmDetail($id)
    {
        
         $id = decrypt($id);
        $cpmDetail = CompanyDetail::findORFail($id);
        return view('web.company.companyDetail', compact('cpmDetail')); 

    }


    //company Informaion
    public function cmpInfo()
    {
        return view('web.company.companyinfo');
    }
    //emergency Contact
    public function emergencyContact()
    {
        return view('emergency');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
