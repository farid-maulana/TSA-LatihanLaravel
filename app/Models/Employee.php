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
        'division_id', 
        'position',
        'photo',
    ];

    /**
     * Get the division that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
