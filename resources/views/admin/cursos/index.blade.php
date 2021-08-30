
@extends('layout.site')

@include('layout._includes.topo')

@section('titulo','cursos')
    
@section('corpo')
    <div class="container">
        <h3 class="center">LISTA DE CURSOS</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Titulo</td>
                        <td>Descricao</td>
                        <td>valor</td>
                        <td>Publicado</td>
                        <td>Ação</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{$curso->curso_id}}</td>
                            <td>{{$curso->curso_nome}}</td>
                            <td>{{$curso->curso_descricao}}</td>
                            <td>{{$curso->curso_valor}}</td>
                            <td>{{$curso->curso_publicado}}</td>
                            <td>
                                <a href="{{route('admin.cursos.editar',$curso->curso_id)}}" class="btn deep-orange">editar</a>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <a href="{{route('admin.cursos.adicionar')}}" class="btn deep-orange">Adicionar</a>
        </div>

    </div>




@endsection


@include('layout._includes.footer')