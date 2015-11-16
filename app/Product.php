<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeSearch($query, $term)
    {
        return $query->where('name', $term)
                     ->orWhere('company', $term)
                     ->orWhere('brand', $term)
                     ->orWhere('description', $term);
    }
}
