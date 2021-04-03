<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuestionario;

class PreguntaController extends Controller
{
    public function create(Cuestionario $cuestionario)
    {
        return view('pregunta.create', compact('cuestionario'));
    }

    public function store(Cuestionario $cuestionario)
    {
        $data = request()->validate([
            'pregunta.pregunta' => 'required',        
        ]);

       $pregunta = $cuestionario->preguntas()->create($data['pregunta']);
        
       return redirect('/cuestionarios/'.$cuestionario->id);
    }
}
