<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HolaController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'mensaje'   => 'Hola Mundo',
            'lenguaje'  => 'PHP',
            'framework' => 'Laravel',
        ], 200);
    }
}