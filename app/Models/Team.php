<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'id',
        'teamid',
        'verifystatus',
        'fullname',
        'captainname',
        'teamname',
        'verifyotp',
        'mobilenumber',
        'institutionname',
        'coachname',
        'instituterecognizedby',
        'email',
        'teamsize',
        'alternatecontactnumber',
        'city',
        'state',
        'password',
        'institutetype',
        'buggy',
        'quad',
        'communicationaddress',
        'status'
    ];
}
