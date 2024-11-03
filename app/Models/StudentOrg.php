<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOrg extends Model
{
    use HasFactory;
    protected $table ='studentorg';
    
    //primary key
   public $primarykey ='Id';

   

}