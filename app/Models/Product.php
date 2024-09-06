<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    
    use HasFactory;

       

    //one to one
        /** 
              *  @return \Illuminate\Database\Eloquent\BelongsToMany

        */
        
    public function categories(){

        return $this->hasOne(Categorie::class);

        
    }
    
   
}
