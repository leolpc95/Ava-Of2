<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipanteFormRequest;
use App\Services\ParticipanteService;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    private  $list;

    public function  __construct(ParticipanteService $list)
    {
        $this->list = $list;
    }

    public function novo()
    {
        return view('participante.form');
    }

    public function gravar(ParticipanteFormRequest $request)
    {
        $request->validated();
        $this->list->gravar($request->all());

        $participantes = $this->list->listagem();
        return view('participante.table', ['participantes' => $participantes, 'cadastro_sucesso' => true]);
    }

    public function listagem()
    {
        $participantes = $this->list->listagem();
        return view('participante.table', ['participantes' => $participantes, 'cadastro_sucesso' => false]);
    }

}
