<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    
    protected $table = 'public.forma_pagamentos';
    
    protected $fillable = [
        'uuid','tipo_pagamento_id','descricao'
    ];

    protected $with = ['tipoPagamento' ,'pedido'];

    protected static function boot() {
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function tipoPagamento()
    {
        return $this->hasMany(TipoPagamento::class);
    }
    
    function pedido(){
        return $this->belongsTo(Pedido::class);
    }

}
