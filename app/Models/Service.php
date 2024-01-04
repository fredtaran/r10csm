<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_code',
        'service_name',
        'division_id'
    ];

    public function division() {
        return $this->hasMany(Division::class, 'id', 'division_id');
    }
}
