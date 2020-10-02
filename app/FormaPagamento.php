<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = ['uuid' , 'tipo'];

    protected $with = ['tipoPagamento'];

    public function tipoPagamento()
    {
        return $this->belongsTo(TipoPagamento::class);
    }

}
