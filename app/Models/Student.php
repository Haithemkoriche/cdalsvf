<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'addres',
        'email',
        'telephone',
        'date_naissance',
        'lieu_naissance',
    ];
}
