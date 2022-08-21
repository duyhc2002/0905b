<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
      public $timestamps = false; //set time to false
    protected $fillable = [
    	'username','email','password','phone','address'
    ];
   
 	protected $table = 'registers';
}