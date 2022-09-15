<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id_number', 
        'name', 
        'gender',
        'date_of_birth', 
        'email', 
        'phone_number', 
        'address', 
        'division', 
        'position'
    ];
}
