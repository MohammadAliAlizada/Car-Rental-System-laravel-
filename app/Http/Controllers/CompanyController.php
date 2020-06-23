<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;

class CompanyController extends Controller
{
    //list of all Rider of companies

    public function allRiders($id)
    {
        
       
        $company_detail_id = decrypt($id);
        $id = User::findORFail($company_detail_id);
        $riders = User::all()->Where('role_id','=',4)->Where('company_detail_id', '=',$id->company_detail_id);
        return view('web.Rider.riderList', ['riders'=>$riders]);
    }


    //list of all Driver of companies
    public function allDrivers($id)
    {

        $company_detail_id = decrypt($id);
        $id = User::findORFail($company_detail_id);
        $drivers = User::all()->Where('role_id','=',3)->Where('company_detail_id', '=',$id->company_detail_id);
        return view('web.Driver.driverList', ['drivers'=>$drivers]);
    }




    //list of all reserved ride
    public function Booked($id)
    {

        $company_detail_id = decrypt($id);
       
        $drivers = Book::all()->Where('company_detail_id', '=',$company_detail_id);
        return view('cms.Book.bookList', ['drivers'=>$drivers]);
    }

    
    


    //show company profile
    public function profile()
    {

        return view('company');

    }
    //delete a rider
    public function deleteRider($id)
    {
        
    $id = decrypt($id);
    $rider = User::findORFail($id);
    $rider->delete();
    return back();
    }


     //update a rider
     public function updateRider($id)
     {
        $id = decrypt($id);
        $rider = User::find($id);
      
        return view('web.Rider.editRider', compact('rider'));
     }


    //delete a driver
    public function deleteDriver($id)
    {


    $id = decrypt($id);
    $post = User::findORFail($id);
    $post->delete();
    return back();
    }


     //update a driver
     public function updateDriver($id)
     {


        $id = decrypt($id);
        $post = User::find($id);
        $update =true;
        return view('cms.post.create_post', compact('post', 'update'));
     }


     
}
