<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    protected $fillable = ['admin', 'fullname', 'surname', 'nationalid', 'speciality', 'email', 'age', 'guardianfname', 'guarrdian_nationalid', 'guardian_mobile'];
}
