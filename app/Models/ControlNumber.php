<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlNumber extends Model
{
    use HasFactory;
    protected $table ='controlnumber';
    
    //primary key
   public $primarykey ='Id';

   

}