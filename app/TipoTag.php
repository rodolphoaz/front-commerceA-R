<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTag extends Model
{
    protected $fillable = ['uuid', 'tipo'];

    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function produto(){
        return $this->belongsTo(Produto::class);
    }
}
