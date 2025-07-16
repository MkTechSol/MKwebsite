<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dectr extends Model
{
    use HasFactory;
    protected $fillable=['img', 'designation', 'name', 'content'];
}
