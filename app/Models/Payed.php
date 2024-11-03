<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payed extends Model
{
    //table name
    protected $table ='orders';
    
    //primary key
   public $primarykey ='id';

    use HasFactory;
}
