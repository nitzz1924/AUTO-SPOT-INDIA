<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'teamid',
        'member',
        'emailaddress',
        'mobile',
        'age',
        'role',
        'gender',
        'graduationyear',
        'bloodgroup',
        'memberphoto',
        'idproofmember'
    ];
}

