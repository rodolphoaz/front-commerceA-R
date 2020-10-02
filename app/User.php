<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cpf', 'surmane', 'level_id','registration'
    ];

    protected $with = ['contatoUser', 'enderecoCobranca','enderecoEntrega'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function contatoUser() {
        return $this->belongsTo(ContatoUser::class);
    } 

    function enderecoCobranca(){
        return $this->belongsTo(EnderecoCobranca::class);
    }

    function enderecoEntrega()
    {
        return $this->belongsTo(EnderecoEntrega::class);
    }

    function pedido(){
        return $this->belongsTo(Pedido::class);
    }
}
