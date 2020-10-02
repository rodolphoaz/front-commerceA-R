<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class TipoTelefone extends Model
{
    protected $table = 'public.tipo_telefones';
    
    protected $fillable = ['uuid','tipo' ];
    
    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function telefone()
    {
        return $this->belongsTo(Telefone::class);
    }

}
