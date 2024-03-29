<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyAuth extends Model
{
    use HasFactory;
    protected $table="my_auths";
    protected $fillable=['name','email','password'];
}
