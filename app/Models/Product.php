<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'subtitle',
      'description',
      'price',
      'slugy',
      'fullpath',
      'image',
        'meta_title',
        'meta_description',
        'balise_alt'

    ];
}
