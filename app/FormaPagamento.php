<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = ['uuid' , 'tipo'];

    protected $with = ['tipoPagamento' ,'pedido'];

    protected static function boot() {
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function tipoPagamento()
    {
        return $this->belongsTo(TipoPagamento::class);
    }
    
    function pedido(){
        return $this->belongsTo(Pedido::class);
    }

}
