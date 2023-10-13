<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ClienteModel extends Model
{
    use SoftDeletes;
    protected $table = 'client';

    protected $fillable = [
        'cpf',
        'nome',
        'sobrenome',
        'data_nascimento',
        'email',
        'genero'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($veiculo) {
            if (!$veiculo->identify) {
                $veiculo->identify = Str::uuid()->toString();
            }
        });
    }
}
