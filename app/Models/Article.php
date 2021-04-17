<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attribute that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'featured_image'
    ];
}

