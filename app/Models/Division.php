<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_name',
        'division_code'
    ];

    public function services() {
        return $this->hasMany(Service::class, 'division_id', 'id');
    }
}
