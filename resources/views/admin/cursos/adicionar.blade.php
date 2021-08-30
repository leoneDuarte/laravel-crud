
@extends('layout.site')

@include('layout._includes.topo')

@section('titulo','adicionar cursos')
    
@section('corpo')
<div class="container">
    <h3 class="center">ADICIONAR CURSO</h3>

    <div class="row">
        <form method="POST" action="{{route('admin.cursos.salvar')}}">            
            {{csrf_field() }}
            @include('layout._includes.form')
        </form>
    </div>

</div>
@endsection

@if($mensagem)
    <div class="alert alert-success">
        <p>{{$mensagem}}</p>
    </div>
@endif

@include('layout._includes.footer')