<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'preco', 'tamanho', 'cor', 'tendencia_id'];

    public function tendencia()
    {
        return $this->belongsTo(Tendencia::class);
    }
}
