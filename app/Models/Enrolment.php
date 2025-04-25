<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    use HasFactory;
    protected $table = 'enrolments';
    protected  $fillable =[
        'client_id',
        'program_id',
        'status'
    ];
}