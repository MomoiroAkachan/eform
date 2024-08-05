@extends('layout.base')
@section('description', 'Formulários para cadastro de alunos nas escola públicas de Teófilo Otoni')
@section('title', 'Formulário')
@vite(['resources/css/form.css'])
@section('content')
    <div class="page-bg">
        <div class="card">
            <form action="#" method="post"
                class='w-full flex flex-col gap-7 h-full bg-transparent border-red-600 p-4 overflow-y-auto'>
                @csrf

                {{-- Título do formulário --}}
                <h3 class='' style='font-family: "Roboto", sans-serif; text-shadow: 0 0px 2px rgba(0, 0, 0, 0.5)'>
                    cadastro
                    do aluno</h3>

                {{-- Dados Criança --}}
                <div class="e-group">
                    <span class="title">Dados Criança</span>
                    <x-hinput id='iName' placeholder='Nome completo' type='text' rgx='^[a-zä-üá-úà-ù\s]*$' />
                    <x-hinput id='iCPF' placeholder='CPF' type='text' rgx='^[0-9]{0,11}$' />
                    <x-hinput id='iBirth' placeholder='Data de nascimento' type='date' rgx='^.*$' />
                </div>

                {{-- Responsável 1 --}}
                <div class="e-group">
                    <span class="title">Responsável 1</span>
                    <x-hinput id='iResName' placeholder='Nome completo' type='text' rgx='^[a-zä-üá-úà-ù\s]*$' />
                    <x-hinput id='iRelLevel' placeholder='Grau de Parentesco' type='datalist' rgx='^.*$'
                        :liop="['Firefox', 'Chrome', 'Opera', 'Safari']" />
                    <x-hinput id='iResRG' placeholder='Número do RG' type='text' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iResCPF' placeholder='CPF' type='text' class='w-full' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iResWork' placeholder='Profissão' type='datalist' :liop="['Firefox', 'Chrome', 'Opera', 'Safari']" rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iCell' placeholder='Número de Telefone/Celular' type='tel' rgx='[a-zA-Z\s]+$' />
                    <x-hinput id='iEmail' placeholder='Endereço de E-mail' type='email' rgx='[a-zA-Z\s]+$' />
                </div>

                <div class="w-full flex flex-row flex-nowrap items-center">
                    <input type="checkbox" id="iResponsible" class='w-5 h-5' name="iResponsible">
                    <label class='ml-3' for="iResponsible">Adicionar Responsável</label>
                </div>

                {{-- Responsável 2 --}}
                <div class="e-group">
                    <span class="title">Responsável 2</span>
                    <x-hinput id='iResName2' placeholder='Nome completo' type='text' rgx='[a-zA-Z\s]+$' kind='unholy' />
                    <x-hinput id='iRelLevel2' placeholder='Grau de Parentesco' type='datalist' rgx='[a-zA-Z\s]+$' kind='unholy'
                        :liop="['Firefox', 'Chrome', 'Opera', 'Safari']" />
                    <x-hinput id='iResRG2' placeholder='Número do RG' type='text' rgx='[a-zA-Z\s]+$' kind='unholy' />
                    <x-hinput id='iResCPF2' placeholder='CPF' type='text' class='w-full' rgx='[a-zA-Z\s]+$' kind='unholy' />
                    <x-hinput id='iResWork2' placeholder='Profissão' type='datalist' :liop="['Firefox', 'Chrome', 'Opera', 'Safari']" rgx='[a-zA-Z\s]+$' kind='unholy' />
                    <x-hinput id='iCell2' placeholder='Número de Telefone/Celular' type='tel' rgx='[a-zA-Z\s]+$' kind='unholy' />
                    <x-hinput id='iEmail2' placeholder='Endereço de E-mail' type='email' rgx='[a-zA-Z\s]+$' kind='unholy' />
                </div>

            </form>
        </div>
    </div>
@endsection
