<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CompanyDetail;
class AdminController extends Controller
{
    //show add detail
    public function addDetail()
    {
        return view('web.company.adddetail');
    }

    //Add Company Detial 
    public function save(Request $request)
    {
    	$this->validate($request, [
    		'user_id' => 'required',
    		'companyName' => 'required|min:10',
    		'desc' => 'required|min:10',
    		'address' => 'required|min:10',
    		
    	]);

    	// dd($request);

    	$post = new Post;
    	$post->user_id = $request->user_id;
    	$post->companyName = $request->companyName;
    	$post->desc = $request->desc;
    	$post->address = $request->address;
    	

        $post->save();

        return back()->with('succesMsg', 'Post is created successfully!');
     }


    //Detele Company
    public function deleteCompany($id)
    {


    $id = decrypt($id);
    $post = User::findORFail($id);
    $post->delete();
    return back();
    }


     //update a Company
     public function updateCompany($id)
     {


        $id = decrypt($id);
        $company = User::findORFail($id);
     
        return view('web.company.updateCompany', ['company'=>$company]);
     }
    

     //show All companies
     public function allCompany()
    {
        $companies = User::all()->Where('role_id','=',2);
        return view('web.company.companyList', ['companies'=>$companies]);
    }


     //show All companies
     public function cpmDetailList($id)
    {

        $user_id = decrypt($id);
        $companies = CompanyDetail::findORFail($user_id);
        return view('web.company.cpmDetailList', ['companies'=>$companies]);
    }

}
