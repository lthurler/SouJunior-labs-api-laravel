<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['uuid', 'name', 'role', 'squad_uuid'];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];

}
