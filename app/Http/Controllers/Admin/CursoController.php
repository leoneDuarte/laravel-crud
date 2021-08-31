<?php

namespace App\Http\Controllers\Admin;

use App\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('admin.cursos.index',compact('cursos'));
    }

    public function adicionar()
    {
        
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $requisicao)
    {        
        $dados = $requisicao->all();     
        Curso::create(['curso_nome' => $dados['curso_nome'],'curso_descricao' => $dados['curso_descricao'] ,'curso_imagem' => $dados['curso_descricao'],'curso_valor' => $dados['curso_valor'], 'curso_publicado' =>'Sim']);
        return view('admin.cursos.adicionar',['mensagem'=>'Salvo com sucesso!!']);
    }

    public function editar($cursoid)
    {   
        $registro = Curso::find($cursoid);        
        return view('admin.cursos.editar',compact('registro'));
    }

    public function atualizar(Request $curso, $curso_id)
    {   
      Curso::find($curso_id)->update(['curso_id' =>  $curso_id,'curso_nome' => $curso['curso_nome'],'curso_descricao' => $curso['curso_descricao'] ,'curso_imagem' => $curso['curso_descricao'],'curso_valor' => $curso['curso_valor'], 'curso_publicado' =>'Sim']);     
      return Redirect::to(route('admin.cursos'));
    }

    public function deletar($cursoid){
        Curso::find($cursoid)->delete();  
        return Redirect::to(route('admin.cursos'));
    }
}
