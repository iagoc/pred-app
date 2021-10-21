@extends('template.layout')

@section('titulo')
    Cadastrar Predio
@endsection

@section('img-id')
    <img src="{{ asset('img/building.png') }}" />
@endsection

@section('content')

@section('content')
<section class="flex flex-col items-center">
    <form method="POST" name="building-registration" id="building-registration" class="bg-white shadow-md rounded-md mt-6 p-6 h-auto w-11/12">
        @csrf
        <fieldset name="info-resident" class="flex flex-wrap -mx-3">
            <p class="w-full px-3">
                <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-last-name">Endereço</label>
                <input  type="text" required name="address" id="address" placeholder="Rua das Palmeiras" class="w-full self-start appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">  
            </p>

            <p class="w-1/4 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Kitnet</label>
                <input type="number" name="address_kitnet" id="address-qt-kitnet" placeholder="Informe a quantidade" class="w-full self-start appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">  
            </p>

            <p class="w-1/4 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Casa</label>
                <input type="number" name="address_house" id="address-qt-house" placeholder="Informe a quantidade" class="w-full self-start appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">  
            </p>

            <p class="w-1/4 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Loja</label>
                <input type="number" name="address_store" id="address-qt-store" placeholder="Informe a quantidade" class="w-full self-start appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">  
            </p>

        </fieldset>       
    </form>
    <button type="submit" form="building-registration"  class="place-content-center bg-btn h-12 w-3/4 mt-6 rounded-md text-white text-xl font-semibold ">Salvar</button>
</section>

@endsection
 