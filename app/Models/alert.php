<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alert extends Model
{
    use HasFactory;
    protected $table ='alerts';
    
    //primary key
   public $primarykey ='id';

   public $timestamp =true;
}
