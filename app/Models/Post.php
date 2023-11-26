<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ========== SPECIFY TABLE TO USE (NOT MANDATORY => https://stackoverflow.com/a/51746287/19250775) ========== //
    protected $table = "posts";

    // ========== ENABLING AUTO INCREMENT FOR PRIMARY KEY ========== //
    public $primaryKey = "id";
    public $incrementing = true;

    // ========== MASS ASSIGNABLE ATTRIBUTES ========== //
    protected $fillable = [
        'title',
        'slug',
        'hero_image',
        'article',
        'division_id',
        'viewed'
    ];

    public function article_image()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
