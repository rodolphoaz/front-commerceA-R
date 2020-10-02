<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Pedido extends Model
{
    
    protected $fillable = ['uuid'];
    
    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }
    
    function enderecoCobranca(){
        return $this->hasOne(EnderecoCobranca::class);
    }

    function enderecoEntrega(){
        return $this->hasOne(EnderecoEntrega::class);
    }

    function formaPagamento() {
        return $this->hasOne(FormaPagamento::class);
    }

    function users(){
        return $this->hasMany(User::class);
    }
}

