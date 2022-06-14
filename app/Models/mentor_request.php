<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentor_request extends Model
{
    use HasFactory;
    protected $fillable = [
        'mentor_firstname',
        'mentor_lastname',
        'mentor_email',
        'mentor_password',
        'mentor_phone_number',
        'mentor_image',
        'mentor_category',
        'mentor_about'

    ];
}
