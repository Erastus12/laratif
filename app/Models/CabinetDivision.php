<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabinetDivision extends Model
{
    use HasFactory;

    // ========== SPECIFY TABLE TO USE (NOT MANDATORY => https://stackoverflow.com/a/51746287/19250775) ========== //
    protected $table = "cabinet_divisions";

    // ========== ENABLING AUTO INCREMENT FOR PRIMARY KEY ========== //
    public $primaryKey = "id";
    public $incrementing = true;

    // ========== MASS ASSIGNABLE ATTRIBUTES ========== //
    protected $fillable = [
        'division_id',
        'management_year_id',
    ];

    public function committee()
    {
        return $this->hasMany(Committee::class);
    }

    public function work_program()
    {
        return $this->hasMany(WorkProgram::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function management_year()
    {
        return $this->belongsTo(ManagementYear::class);
    }
}
