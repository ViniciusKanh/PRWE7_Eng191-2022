<?php

namespace App\Http\Controllers;

use App\Services\LojaService;
use Illuminate\Http\Request;

class LojaController extends Controller{
    
    private $LojaService;

    public function __construct(LojaService $LojaService)
    {
        $this->LojaService = $LojaService;
    }

    public function index(){

        $dados = $this->LojaService->index();

        //dd($dados);

        return view('Loja.index', [
            'dados' => $dados['dados']
        ]);
    }

    public function new(){
        return view('Loja.incluir');
    }

    public function create(Request $request){
        $data = $request->all();
        //dd($data);
        $mensagem = $this->LojaService->create($data);
        return([
            'success' => $mensagem['success'],
            view('Loja.index')
        ]);
    }

    public function store(Request $request, $id){
        $data = $request->all();
        $mensagem = $this->LojaService->store($data, $id);

        return redirect()->route('Loja.listar')
                          ->with('success', $mensagem['success']);
    }

    public function show($id){
        $registro = $this->LojaService->show($id);
        return view('Loja.alterar', [
            'registro' => $registro['registro'],
        ]);
    }

    public function cancelar(){
        //$registro = $this->bancoService->index();
        return redirect()->route('Loja.listar');
    }

    public function delete($id){
        $registro = $this->LojaService->delete($id);
        return view('Loja.excluir', [
            'registro' => $registro['registro'],
        ]);
    }

    public function excluir($id){
        $registro = $this->LojaService->excluir($id);
        return redirect()->route('Loja.listar');
    }
}
