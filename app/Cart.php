<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id' , 'caricature_id' , 'item_adicional_id'];
}
