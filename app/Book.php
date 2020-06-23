<?php

namespace App;
use App\Book; 
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // 

    protected $fillable = [
        'user_id','company_detail_id','pick_up','drop_up' ,'car_typ', 
      ];
  
}
