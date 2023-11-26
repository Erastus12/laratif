<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceInfo extends Model
{
    use HasFactory;

    // ========== SPECIFY TABLE TO USE (NOT MANDATORY => https://stackoverflow.com/a/51746287/19250775) ========== //
    protected $table = "maintenance__info";

    // ========== ENABLING AUTO INCREMENT FOR PRIMARY KEY ========== //
    public $primaryKey = "id";
    public $incrementing = true;

    // ========== MASS ASSIGNABLE ATTRIBUTES ========== //
    protected $fillable = [
        'is_maintenance',
    ];

}
