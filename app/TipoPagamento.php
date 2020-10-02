<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class TipoPagamento extends Model
{
    
    Protected $with = ['formaPagamentos'];

    protected $fillable = ['uuid','tipo'];//credito, debito e especie
    
    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function formaPagamentos()
    {
        return $this->hasMany(FormaPagamento::class);
    }
}
