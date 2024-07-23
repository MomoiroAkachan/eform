@extends('layout.base')
@section('description', 'Formulários para cadastro de alunos nas escola públicas de Teófilo Otoni')
@section('title', 'Formulário')

@section('content')
    <div class="page-bg">
        <div
            class="card relative py-[10%] px-2.5 bg-white max-w-[90%] mx-auto mt-[15%] overflow-y-auto rounded-md shadow-lg border-b border-gray-400">
            <form action="#" method="post" class='w-full flex flex-col gap-7 h-full bg-transparent border-red-600 p-4 overflow-y-auto'>
                @csrf
                
                {{-- Título do formulário --}}
                <h3 class='text-2xl text-slate-800 text-center mb-4 uppercase font-semibold' style='font-family: "Roboto", sans-serif; text-shadow: 0 0px 2px rgba(0, 0, 0, 0.5)'>cadastro
                    do aluno</h3>

                <div class="flex flex-col gap-2 mb-3">
                    <x-hinput id='iName' placeholder='Nome completo' type='text' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iCPF' placeholder='CPF' type='text' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iBirth' placeholder='Data de nascimento' type='date'
                        rgx='[a-zA-Z\s]+$' />
                </div>
                <div class="flex flex-col gap-2 mb-3 border relative border-slate-400 rounded-lg px-2 py-4">
                    <span class="text-slate-600 absolute -top-3.5 left-[50%] white-space-nowrap text-sm translate-x-[-50%] bg-white px-1">Responsável 1</span>
                    <x-hinput id='iResName' placeholder='Nome completo' type='text'rgx='[a-zA-Z\s]+$' />
                    
                    <x-hinput id='iRelLevel' placeholder='Grau de Parentesco' type='datalist' rgx='[a-zA-Z\s]+$' :liop="['Firefox', 'Chrome', 'Opera', 'Safari']" />

                    <x-hinput id='iResRG' placeholder='Número do RG' type='text' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iResCPF' placeholder='CPF' type='text' class='w-full' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iResWork' placeholder='Profissão' type='datalist' :liop="['Firefox', 'Chrome', 'Opera', 'Safari']"
                        rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iCell' placeholder='Número de Telefone/Celular' type='tel' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iEmail' placeholder='Endereço de E-mail' type='email' rgx='[a-zA-Z\s]+$' />
                </div>

                <div class="w-full flex flex-row flex-nowrap items-center">
                    <input type="checkbox" id="iResponsible" class='w-5 h-5' name="iResponsible">
                    <label class='ml-3' for="iResponsible">Adicionar Responsável</label>
                </div>
                
                <div class="flex flex-col gap-2 mb-3 border relative border-slate-400 rounded-lg px-2 py-4">
                    <span class="text-slate-600 absolute -top-3.5 left-[50%] white-space-nowrap text-sm translate-x-[-50%] bg-white px-1">Responsável 2</span>
                    <x-hinput id='iResName2' placeholder='Nome completo' type='text'rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iRelLevel2' placeholder='Grau de Parentesco' type='datalist' rgx='[a-zA-Z\s]+$' :liop="['Firefox', 'Chrome', 'Opera', 'Safari']" />
                    <x-hinput id='iResRG2' placeholder='Número do RG' type='text' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iResCPF2' placeholder='CPF' type='text' class='w-full' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iResWork2' placeholder='Profissão' type='datalist' :liop="['Firefox', 'Chrome', 'Opera', 'Safari']"
                        rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iCell2' placeholder='Número de Telefone/Celular' type='tel' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iEmail2' placeholder='Endereço de E-mail' type='email' rgx='[a-zA-Z\s]+$' />
                </div>
                
            </form>
        </div>
    </div>
@endsection
