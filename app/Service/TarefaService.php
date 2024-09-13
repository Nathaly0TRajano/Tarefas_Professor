<?php

namespace App\Service;

use App\Models\Tarefa;

class TarefaService
{
    public function create(array $tarefa)
    {
        $dados = Tarefa::create([
            'titulo' => $tarefa['titulo'],
            'descricao' => $tarefa['descricao'],
            'status' => 'Em Aberto'
        ]);

        return $dados;
    }

    public function findById($id) {
        $tarefa = Tarefa::find($id);

        if($tarefa == null){
            return [
                'status' => false,
                'message' => 'Tarefa não encontrada'
            ];
        }

        return  [
            'status' => true,
            'message' => 'Pesquisa realizada com sucesso',
            'data' => $tarefa
        ];
    }

    public function getALL (){
        $tarefas = Tarefa::all();

        return [
            'status' => true,
            'message' => 'Pesquisa efetuada com sucesso',
            'dados' => $tarefas
        ];
    }
}
