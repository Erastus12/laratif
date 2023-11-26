<?php

namespace App\Models;

use App\Models\Product\Category;
use App\Models\Product\Color;
use App\Models\Product\Gallery;
use App\Models\Product\WithColor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopItem extends Model
{
    use HasFactory;

    // ========== SPECIFY TABLE TO USE (NOT MANDATORY => https://stackoverflow.com/a/51746287/19250775) ========== //
    protected $table = "shop__items";

    // ========== ENABLING AUTO INCREMENT FOR PRIMARY KEY ========== //
    public $primaryKey = "id";
    public $incrementing = true;

    // ========== MASS ASSIGNABLE ATTRIBUTES ========== //
    protected $fillable = [
        'item',
        'slug',
        'description',
        'product__categories_id',
        'published'
    ];

    public function product_category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product_color()
    {
        return $this->belongsTo(Color::class);
    }

    public function product_gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    public function product_with_color()
    {
        return $this->belongsTo(WithColor::class);
    }
}
