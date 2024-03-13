<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    // use HasFactory;
    protected $fillable = [
        'asset_name',
        'acquired_date',
        'cost',
        'depreciation_rate',
        'owner_id',
    ];

}
