@extends('layout.base')
@section('description', 'Sala de espera para a abertura do formulário de Cadastro')
@section('title', 'Em breve')
@section('styles')
@vite(['resources/css/coming.css'])
@endSection
@section('content')
<div class="bg">
    <div class="context relative">

        <div class="title">
            <h1>Cadastro</h1>
            <h1 style='text-shadow: 0 0 0.3rem #2227;'>escolar 2024/2025</h1>
        </div>

        <div class="subtitle">
            <h1>educação infantil</h1>
        </div>

        <div class="infos">
            <div class="ratio">
                <h4>Para crianças de 0 a 5 anos</h4>
            </div>

            <div class="book">
                <h3>Cadastro disponível a partir do dia</h3>
                <h3>
                    <span class='font-bold'>20/08</span> até <span class='font-bold'>20/09</span> de 2024
                </h3>
            </div>
        </div>

        <div class="realization mt-[8%] flex flex-col items-center uppercase lg:fixed lg:m-0 lg:right-0 lg:bottom-[15%]">
            <h5 class='font-[700] md:font-[900] text-[1rem] md:text-[1.5rem]'>Realização:</h5>
            <div class="flex flex-row gap-[10%] items-center justify-center mt-[5%] lg:mt-0">
                <span class="max-w-[40%] font-[800] md:font-[900] uppercase text-center text-[0.8rem] md:text-2xl lg:text-xl text-slate-700">Secretaria de Educação</span>
                <span class="font-[600] text-red-500">&</span>
                <img src="{{ asset('img/logo-prefeitura.png') }}" alt="Logotipo da prefeitura" class="h-[5rem] md:h-[8rem] lg:h-[7rem]">
            </div>
        </div>

        <div class="md:h-[10%]"></div>
    </div>
    <div class="footer">
    </div>
</div>
@endSection
