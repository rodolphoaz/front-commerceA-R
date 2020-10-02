<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Telefone extends Model
{
    protected $table='public.telefones';
    
    protected $fillable = [
        'uuid','contato_user_id','tipo_telefone_id','codigo_pais','ddd','numero'
    ];
    
    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function tipoTelefones()
    {
        return $this->hasMany(TipoTelefone::class);
    }

    function contatoUser(){
        return $this->hasMany(ContatoUser::class);
    }
}
