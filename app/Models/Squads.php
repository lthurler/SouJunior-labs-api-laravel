<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squads extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['uuid', 'product_uuid', 'name', 'description'];
    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];
}
