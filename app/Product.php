<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeSearch($query, $prop, $term)
    {
        switch ($prop) {
            case "Product Name":
                $prop = "name";
                break;
            case "Brand":
                $prop = "brand";
                break;
            case "Supplier":
                $prop = "company";
                break;
            case "Description":
                $prop = "description";
                break;
            case "Any":
                $prop = NULL;
                break;
            default:
                $prop = NULL;
        }

        $this->leftJoin('posts', 'product.company_id', '=', 'user.id');

        //If a property is passed in, search by that property, else search all props
        if(isset($prop)) {
          return $query->where($prop, 'like', $term);
        }
        else {
          return $query->where('name', 'like', $term)
                       ->orWhere('brand', 'like', $term)
                       ->orWhere('company', 'like', $term)
                       ->orWhere('description', 'like', $term);
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'company_id');
    }
}
