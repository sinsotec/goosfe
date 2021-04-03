<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Models\Cuestionario;

class CuestionarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $cuestionarios = Cuestionario::all();
        return view('cuestionario.index', compact('cuestionarios'));
    }
    
    public function create()
    {
        return view('cuestionario.create');
    }

    public function edit(Cuestionario $cuestionario)
    {
       return view('cuestionario.edit', compact('cuestionario'));
    }

    public function store()
    {
        $data = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        $cuestionario = Cuestionario::create($data);
    
        return redirect('/cuestionarios/'.$cuestionario->id);
    }

    public function show(Cuestionario $cuestionario)
    {

        $cuestionario->load('preguntas');

        //dd($cuestionario);

        return view('cuestionario.show', compact('cuestionario'));
    }

}
