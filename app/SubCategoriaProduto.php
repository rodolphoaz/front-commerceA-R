<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class SubCategoriaProduto extends Model
{
    protected $table = 'public.sub_categoria_produtos';

    protected $fillable = [
        'uuid', 'categoia_produto_id', 'nome_subcategoria'];
    
    protected static function boot(){
        parent::boot();
        static::creating(function ($post){
            $post->uuid = (string) Str::uuid();
        });
    }

    function categoriaProduto()
    {
        return $this->hasMany(CategoriaProduto::class);
    }
}
