<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Veiculo extends Model
{
    use SoftDeletes;
    protected $table = 'veiculos';

    protected $fillable = [
        'identify',
        'placa',
        'marca',
        'modelo',
        'ano_fabricacao',
        'numero_eixos',
        'cor'
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
