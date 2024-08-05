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

            <div class="infos relative mt-[8.5rem] max-w-[80%] mx-auto">
                <div
                    class="date text-[12px] md:text-[19px] py-0.5 md:py-1 md:px-5 bg-[#ffe342] px-2 relative rounded-full z-[100] text-[#1d1d1d] text-center font-semibold mx-4">

                    <h4>Para crianças de 0 a 5 anos</h4>
                </div>
                <div class="ctt shadow-md bg-white px-5 z-[10] relative -top-5 py-7 rounded-md text-center">
                    <h3>Cadastro disponível a partir do dia</h3>
                    <h3>
                        <span class='font-bold'>20/08</span> até <span class='font-bold'>20/09</span> de 2024
                    </h3>
                </div>
            </div>
            <div class="realization mt-[4rem] flex flex-col items-center justify-center">
                <h5 class='font-bold text-[1.3rem]'>Realização:</h5>
                <img src="{{ asset('img/logo-prefeitura.png') }}" alt="Logotipo da prefeitura" width="75px">
            </div>
        </div>

        <div class="footer">
        </div>
    </div>
@endSection
