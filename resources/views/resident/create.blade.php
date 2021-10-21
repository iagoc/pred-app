@extends('template.layout')

@section('titulo')
    Cadastrar Morador
@endsection

@section('img-id')
    <img src="{{ asset('img/building.png') }}" />
@endsection

@section('content')
<section class="flex flex-col items-center">
    <form method="POST" name="resident-registration" id="resident-registration" class="bg-white shadow-md rounded-md mt-6 p-6 h-auto w-11/12">
        @csrf
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <fieldset name="info-resident" class="flex flex-wrap -mx-3">
            <p class="w-full px-3">
                <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-last-name">Nome</label>
                <input required  type="text" name="name" id="address" placeholder="Digite o nome" class="w-full self-start appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">      
            </p>

            <p class="w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Telefone</label>
                <input  type="tel" name="name" id="aptos_number" placeholder="99999-9999" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </p>

            <p class="w-2/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Endereço do Prédio</label>
                <select id="info-address" onchange="boraLa()" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="">Selecione</option>
                    @foreach ($buildings as $building)
                        <option value="{{ $building->id }}">{{ $building->address }}</option>
                    @endforeach
                </select>  
               
            </p>

            <p class="w-1/3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-1" for="grid-last-name">Local</label>
                <select name="" id="info-address-local" class="block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="">Selecione</option>
                </select>            
            </p>
        </fieldset>
        <fieldset  name="info-building" class="flex flex-wrap justify-center -mx-3">
            <p class="w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Número Apart.</label>
                <select name="" id="" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="endereco" i></option>
                </select>
            </p>
            <p class="w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Número do relógio</label>
                <input  type="tel" name="name" id="aptos_number" placeholder="99999-9999" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </p>

            <p class="w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Valor do aluguel</label>
                <input  type="number" name="name" id="aptos_number" placeholder="R$ 600,00" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </p>
            <p class="w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Data de Vencimento</label>
                <input  type="date" name="name" id="aptos_number" placeholder="99999-9999" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </p>
            <button type="submit" form="resident-registration" class="bg-btn h-12 w-1/3 mt-6 rounded-md text-white text-xl font-semibold ">Salvar</button>
        </fieldset>     
    </form>
</section>

@endsection
 