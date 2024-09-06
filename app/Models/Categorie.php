<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;


    protected $fillable = ['category_name'];

  
    //one to many relation
  /** 
              *  @return \Illuminate\Database\Eloquent\BelongsToMany

        */
    public function products(){

        return $this->hasOne(Product::class);
    }
   
}
