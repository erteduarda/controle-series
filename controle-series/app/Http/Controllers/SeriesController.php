<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        // session(['mensagem.sucesso' => 'Serie removidada com sucesso']);
        $mensagemSucesso = session('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
        return view('series.index')
            ->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $series = Serie::create($request->all());
        return to_route('series.index')
        ->with('mensagem.sucesso',"Série '{$series->nome}' removidada com sucesso");
    }

    public function destroy(Serie $series)
    {
        $series->delete();
        return to_route('series.index')
            ->with('mensagem.sucesso',"Série '{$series->nome}' removidada com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }
}
