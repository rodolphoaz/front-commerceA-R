<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class GaleriaProduto extends Model
{
    protected $table = 'public.galeria_produtos';

    protected $fillable = [
        'uuid','produto_id','caminho','nome_imagem'
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }
    
    function produtos() {
        return $this->hasMany(Produto::class);
    }
}
