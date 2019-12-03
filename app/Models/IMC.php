<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IMC extends Model
{
    protected $table = 'i_m_c_s';

    protected $fillable = [
        'nome', 'peso', 'altura', 'resultado', 'diagnostico'
    ];
}
