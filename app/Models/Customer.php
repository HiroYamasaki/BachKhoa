<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_name',
        'email',
        'representative_name',
        'country',
        'tax_code',
        'province',
        'representative_phone',
        'address',
        'gender',
        'representative_dob',
    ];

    protected function casts(): array
    {
        return [
            'representative_dob' => 'date',
        ];
    }
}
