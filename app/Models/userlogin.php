<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userlogin extends Model
{
    use HasFactory;
    protected $table = 'userlogins';
    protected $fillable = ['name','mobileNo','Email','password'];
}
