@extends('layout.site')
@include('layout._includes.topo')
@section('titulo','adicionar curso')
   
@section('corpo')
<div class="container">
    <h3 class="center">EDITAR CURSO</h3>
    <div class="row">
        <form method="POST" action="{{route('admin.cursos.atualizar',$registro->curso_id)}}">            
            {{csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('layout._includes.form')
        </form>
    </div>
</div>
@endsection

@include('layout._includes.footer')