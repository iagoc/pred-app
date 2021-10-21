@extends('template.layout')

@section('titulo')
Predios
@endsection

@section('img-id')
    <img src="{{ asset('img/building.png') }}" />
@endsection

@section('content')
    
<section class="flex justify-center items-center flex-col">
    <form class="bg-white shadow-md rounded-md pb-6 m-6 h-auto w-3/4">
        <p class="px-4 text-xl py-4 text-gray-700 flex justify-between">
            <a class="pt-3">Prédios cadastrados</a>
            <a href="building/create" 
            {{-- class="bg-btn w-2/6 text-white text-center h-12 px-4 py-3 rounded-sm leading-tight text-lg font-semibold"  --}}
            class="text-btn text-sm bg-transparent border border-solid border-btn rounded-full hover:bg-btn hover:text-white active:bg-purple-600 font-semibold uppercase px-4 py-3 outline-none focus:outline-none ease-linear transition-all duration-150"
            >
            Cadastrar Prédio</a>
        </p>
        <p class="flex flex-col px-3">
            @foreach ($buildings as $building)
            <a href="" class="h-12 m-1 px-4 py-3 rounded-md border border-opacity-80 leading-tight text-lg">{{ $building->address }}</a>
            @endforeach
        </p>
    </form>

</section>

    
@endsection
