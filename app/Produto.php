<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Produto extends Model
{
    protected $table= 'public.produtos';
    
    protected  $fillable = [
        'descricao' , 'preco' , 'status' , 'nome_produto', 'categoria_produto_id'
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function galeriaProduto() {
        return $this->belongsTo(GaleriaProduto::class);
    }

    function categoriaProdutos(){
        return $this->hasMany(CategoriaProduto::class);
    }

    function tipoTags(){
        return $this->hasMany(TipoTag::class);
    }
}


