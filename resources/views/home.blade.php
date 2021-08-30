
@extends('layout.site')

@include('layout._includes.topo')

@section('titulo','Home')
    
@section('corpo')
<div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">GERENCIE CURSOS</span>
          <p>Crud para gerenciar aspectos de curso.</p>
        </div>
        <div class="card-action">
          <a  href="{{route('admin.cursos')}}">Cursos listagem</a>
          <a  href="{{route('admin.cursos.adicionar')}}">Adicionar Curso</a>
        </div>
      </div>
    </div>
  </div>
@endsection


@include('layout._includes.footer')