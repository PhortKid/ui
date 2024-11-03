<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModal extends Model
{
    use HasFactory;
    protected $fillable = [
        // other attributes...
        'role',
    ];
    protected $table ='users';
    
    //primary key
   public $primarykey ='id';

   public $timestamp =true;
}
