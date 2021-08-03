<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    use Notifiable;

    protected $fillable = [
        'nome', 'descricao', 'disponivel',
    ];

    protected $casts = [
        'disponivel' => 'datetime',
    ];
}
