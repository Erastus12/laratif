<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    // ========== SPECIFY TABLE TO USE (NOT MANDATORY => https://stackoverflow.com/a/51746287/19250775) ========== //
    protected $table = "commitees";

    // ========== ENABLING AUTO INCREMENT FOR PRIMARY KEY ========== //
    public $primaryKey = "id";
    public $incrementing = true;

    // ========== MASS ASSIGNABLE ATTRIBUTES ========== //
    protected $fillable = [
        'name',
        'photo',
        'position_id',
        'cabinet_division_id',
    ];

    public function cabinet_division()
    {
        return $this->belongsTo(CabinetDivision::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
