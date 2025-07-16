<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner2 extends Model
{
    use HasFactory;
    protected $fillable=['section', 'slug','img', 'content', 'heading'];
}
