<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class EnderecoCobranca extends Model
{
    protected $table = 'public.endereco_cobrancas';

    protected $with = ['users'];

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
        return $this->hasMany(User::class);
    }
}
