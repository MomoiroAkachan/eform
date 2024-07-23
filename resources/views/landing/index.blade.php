@extends('layout.base')
@section('description', 'Página inicial do site de formulários para cadastro de alunos nas escola públicas de Teófilo Otoni')
@section('title', 'Início')

@section('content')
    <a href="{{ route('form.index') }}" class='e-link'>ir para o formulário</a>
@endsection