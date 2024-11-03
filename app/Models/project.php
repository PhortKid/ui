<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table ='project';
    
    //primary key
   public $primarykey ='id';

   public $timestamp =true;
}
