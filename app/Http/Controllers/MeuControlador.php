<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos() {
        return "Meus produtos";
    }

    public function getNome() {
        return "Meu nome";
    }

    public function multiplicar($n1, $n2) {
        return "Soma: " . ($n1 + $n2);
    }
}
