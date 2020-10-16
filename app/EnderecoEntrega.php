<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class EnderecoEntrega extends Model
{
    protected $table = 'public.endereco_entregas';
    
    protected $fillable = [
        'uuid','user_id','cep','complemento','rua','numero','uf','cidade','bairro','pais'
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function users(){
        return  $this->hasMany(User::class);
    }
    
    function pedido () {
        return $this->belongsTo(Pedido::class);
    }

}
