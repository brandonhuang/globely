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

        //If a property is passed in, search by that property, else search all props
        if(isset($prop)) {
          return $query->where($prop, $term);
        }
        else {
          return $query->where('name', $term)
                       ->orWhere('brand', $term)
                       ->orWhere('company', $term)
                       ->orWhere('description', $term);
        }
    }
}
