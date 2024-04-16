<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillables = [
        'membername',
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

