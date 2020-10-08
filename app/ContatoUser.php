<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ContatoUser extends Model
{
    protected $table = 'public.contato_users';
    
    protected $fillable = ['tipo','uuid']; 

    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function telefone(){
        return $this->belongsTo(Telefone::class);
    }

    function enderecoCobranca(){
        return $this->belongsTo(EnderecoCobranca::class);
    }
}
