<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    //table name
    protected $table ='leader';
    
    //primary key
   public $primarykey ='id';

   public $timestamp =true;
    use HasFactory;
}
