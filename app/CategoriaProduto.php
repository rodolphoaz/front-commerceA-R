<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CategoriaProduto extends Model
{
    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function produto(){
        return $this->belongsTo(Produto::class);
    }

    function subCategoriaProduto(){
        return $this->belongsTo(SubCategoriaProduto::class);
    } 
}
