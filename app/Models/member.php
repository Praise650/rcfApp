<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'gender',
      'email',
      'phoneNumber',
      'lastname',
      'setyear',
      'deparment',
      'schoolAddress',
      'homeAddress',
      'phoneNumber',
    ];
}
