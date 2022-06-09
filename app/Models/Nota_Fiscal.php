<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota_Fiscal extends Model
{
    use HasFactory;

    protected $fillable = [
        'Num_Nota',
        'DT_Emissao',
        'Data_Saida'

    ];


}