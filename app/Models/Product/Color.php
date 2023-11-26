<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    // ========== SPECIFY TABLE TO USE (NOT MANDATORY => https://stackoverflow.com/a/51746287/19250775) ========== //
    protected $table = "product__colors";

    // ========== ENABLING AUTO INCREMENT FOR PRIMARY KEY ========== //
    public $primaryKey = "id";
    public $incrementing = true;

    // ========== MASS ASSIGNABLE ATTRIBUTES ========== //
    protected $fillable = [
        'color',
        'hex_code',
    ];

    public function shop_items()
    {
        return $this->hasMany(ShopItem::class);
    }
}
