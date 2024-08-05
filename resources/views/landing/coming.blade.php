@extends('layout.base')
@section('description', 'Sala de espera para a abertura do formulário de Cadastro')
@section('title', 'Em breve')
@section('styles')
@vite(['resources/css/coming.css'])
@endSection
@section('content')
<div class="bg">
    <div class="context">

        <div class="title">
            <h1>Cadastro</h1>
            <h1 style='text-shadow: 0 0 3px #2227;'>escolar 2024/2025</h1>
        </div>

        <div class="subtitle">
            <h1>educação infantil</h1>
        </div>

        <div class="infos relative mt-[20%] max-w-[80%] mx-auto max-h-[40%]">
            <div class="ratio">
                <h4>Para crianças de 0 a 5 anos</h4>
            </div>

            <div class="ctt text-[1.5rem] md:text-[3rem] shadow-lg border pt-[10%] border-gray-300 bg-white md:px-8 px-5 z-[10] relative py-7 rounded-md text-center">
                <h3>Cadastro disponível a partir do dia</h3>
                <h3>
                    <span class='font-bold'>20/08</span> até <span class='font-bold'>20/09</span> de 2024
                </h3>
            </div>
        </div>

        <div class="realization mt-[15%] flex flex-col items-center justify-center max-h-[20%]">
            <h5 class='font-bold text-[1rem] md:text-[2.5rem]'>Realização:</h5>
            <img src="{{ asset('img/logo-prefeitura.png') }}" alt="Logotipo da prefeitura" class="h-[8rem] md:h-[16rem]">
        </div>
    </div>
</div>

<div class="footer">
</div>
@endSection