@extends('template.layout')

@section('titulo')
Predios
@endsection

@section('img-id')
    <img src="{{ asset('img/building.png') }}" />
@endsection

@section('content')
<section class="">
    <div class="flex flex-col justify-center items-center bg-white shadow-md rounded-md pb-6 m-6 h-auto w-full">
        <form class="flex justify-center w-full px-4 text-xl py-4 text-gray-700" method="get" action="/resident">
            <input type="search" name="search" id="search" placeholder="Digite o nome para buscar" class="w-1/2 appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">       
            <button type="submit">Buscar</button>
        </form>

        {{-- <button type="submit" class="bg-btn mt-6 h-12 w-3/12 rounded-md text-white text-xl font-semibold ">Cadastrar Morador</button> --}}
        <a href="/resident/create" class="bg-btn mt-6 h-12 w-3/12 rounded-md text-white text-xl font-semibold">Cadastrar Morador</a>

        
        <p class="flex flex-col px-3">
            @foreach ($residents as $resident)
                <a href="" class="h-12 m-1 px-4 py-3 rounded-md border border-opacity-80 leading-tight text-lg">{{ $resident->name }} | <span>{{ $resident->info_address_local }}</span> </a>
            @endforeach 
        </p>

    </div>
</section>
@endsection
