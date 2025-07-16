<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description','img', 'imgtxt', 'category_id'];

    public function keyFeatures()
{
    return $this->hasMany(KeyFeature::class);
}

public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
