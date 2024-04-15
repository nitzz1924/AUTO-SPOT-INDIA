<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Team extends Model implements Authenticatable
{
    use AuthenticableTrait;
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
