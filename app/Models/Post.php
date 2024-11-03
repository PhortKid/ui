<?php

namespace App\Models;
//namespace App;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models;
 class Post extends Model
{
    //use HasFactory;
    
    //table name
    protected $table ='posts';
    
    //primary key
   public $primarykey ='id';

   public $timestamp =true;

}
