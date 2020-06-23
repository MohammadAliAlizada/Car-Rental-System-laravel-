<?php

namespace App\Http\Controllers;
use App\User;
use App\Book;
use App\Reserve;
// use App\Contract\Repository\Company\CompanyRepository as Company;

use Illuminate\Http\Request;

class RiderController extends Controller

{
    //find Rider Profile
    public function find()
    {

        return view('web.Rider.riderProfile');
    }


    //find Rider Profile
    public function booking()
    {


        return view('Rider');
    }


    //my Rides
    public function myride()
    {

        // $rider_id = decrypt($id);
       
         $accept = Reserve::all();
        return view('web.Rider.myride',['accept'=>$accept]);
    }

    
    //book now 
    public function book(Request $request)
    {
        //
    //     $this->validate($request, [
            
    //         'user_id' => 'required|',
    //         'company_detail_id' => 'required|',
    //         'puck_up' => 'required|',
    //         'drop_up' => 'required',
           
            
    //     ]);


    //     $book  = new Book;
    //    $book->user_id = $request->user_id;
    //     $book->company_detail_id = $request->company_detail_id;
    //     $book->puck_up = $request->puck_up; 
    //     $book->drop_up = $request->drop_up; 
    //     $book->car_type = $request->car_type; 

    //     $book->save();
    //     return view('web.Rider.myride');
    return view('Rider');
    }


    //lists of rider request 
   public function riderrequest($id)
   {


    $company_detail_id = decrypt($id);
       
    $drivers = Book::all()->Where('company_detail_id', '=',$company_detail_id);
        return view('web.Driver.request', ['drivers'=>$drivers]);
   }



    //Accest ride by Driver 
   public function accept($id)
   {


    $id = decrypt($id);
       
    $accept = Book::findOrFail($id);
        return view('web.Driver.accept', ['accept'=>$accept]);
   }



    //lists of ride list of drivers
   public function ridelist()
   {

    // $email = decrypt($id);
       
    $accept = Reserve::all();
        return view('web.Driver.ridelist', ['accept'=>$accept]);
   }



    //driver profile
   public function driverprofile()
   {


        return view('driver');
   }
}
