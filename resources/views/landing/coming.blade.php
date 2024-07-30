@extends('layout.base')
@section('description',
    'Página inicial do site de formulários para cadastro de alunos nas escola públicas de Teófilo
    Otoni')
@section('title', 'Em breve')
@vite(['resources/css/coming.css'])
@section('content')
    <div class="background">
        <div class="w-full h-fit relative flex flex-col items-center gap-2">
            <div
                class="rounded-full bg-indigo-800 uppercase text-indigo-50 py-1 px-6 md:py-3 md:tracking-wide md:px-10 text-center md:text-2xl lg:text-3xl font-[900] z-20 w-fit h-fit text-lg relative">
                <h2 class="relative">Prefeitura Municipal de Teófilo Otoni</h2>
            </div>
            <div
                class="rounded-full bg-white uppercase md:text-6xl md:drop-shadow-2xl md:pb-6 md:-top-6 md:pt-7 lg:text-7xl text-red-600 pb-2.5 px-8 pt-3.5 font-[900] z-10 drop-shadow-md tracking-wider w-fit h-fit text-4xl relative -top-4">
                <h2 class="relative">Cadastro Escolar</h2>
            </div>

            <div class="text-violet-900 text-4xl md:mt-8 font-[900] lg:text-7xl">
                <h2>2024</h2>
            </div>
            <div class="text-red-600 text-3xl md:mt-8 font-[900] uppercase lg:text-6xl">
                <h2>Educação infantil</h2>
            </div>
            <div class="rounded-[100%] text-2xl md:mt-10 md:p-16 md:py-20 md:text-4xl bg-white max-w-[500px] w-[50%] text-red-600 font-[900] text-center flex flex-col items-center p-10 mt-8"
                style="box-shadow: 3px 3px 0 0 rgba(10, 50, 150, 1);">
                <h4 class="text-base lg:text-lg font-bold text-indigo-800">(Alunos de 0 a 5 anos)</h4>
                <h4 class='uppercase lg:text-4xl lg:max-w-[75%] leading-[1] mt-2'><span class='text-violet-700'>01</span> à <span class='text-violet-700'>31</span> de Agosto de 2024.</h4>
            </div>
            <div class="max-w-[75%] mt-8 flex flex-row items-center justify-center text-center gap-8">
                <div class="text-xl max-w-[40%] font-[900] tracking-wider text-violet-900  lg:bg-red-400 uppercase">
                    <h3>Secretaria de Educação</h3>
                </div>
                <img class="h-[85px]" src="{{ asset('/img/pref-logo.png') }}"
                    alt="Logotipo da Prefeitura Municipal de Teófilo Otoni">
            </div>
        </div>
        <div class="w-full absolute bottom-0 left-0 h-[30%] lg:h-[35%] flex flex-row justify-between items-baseline filter saturate-[.7] lg:px-[8%] 2xl:px-[15%]">
            <img src="{{ asset('/img/c2.png') }}" alt="Criança segurando o caderno contra sua barriga." class="h-full">
            <img src="{{ asset('/img/c1.png') }}" alt="Criança segurando o caderno contra sua barriga." class="h-full">
        </div>
    </div>
@endSection
