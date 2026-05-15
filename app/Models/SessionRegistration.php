<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionRegistration extends Model
{
    protected $fillable = [
        'name',
        'email',
        'interest_type',
        'referral_source',
    ];
}
