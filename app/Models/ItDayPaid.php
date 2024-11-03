<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItDayPaid extends Model
{
    use HasFactory;
    protected $table ='paid_itday';
    
    //primary key
   public $primarykey ='id';

   public $timestamp =true;

}
