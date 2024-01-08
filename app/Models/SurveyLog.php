<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'service_id',
        'age',
        'sex',
        'region',
        'client_type',
        'agency_visited',
        'cc1',
        'cc2',
        'cc3',
        'cc3_remarks',
        'sqd1',
        'sqd2',
        'sqd3',
        'sqd4',
        'sqd5',
        'sqd6',
        'sqd7',
        'sqd8',
        'remarks'
    ];
}
