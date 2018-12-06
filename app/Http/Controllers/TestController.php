<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testSuccessData()
    {
        return response()->json([
            'message' => 'Bienvenido a la prueba de Envio Apps'
        ]);
    }
}
