<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $Id = ['Id'];
    protected $guarded = ['Nombres', 'Apellidos', 'Edad', 'Salario'];

    function __construct()
    {
        $this->Id = null;
    }

}
