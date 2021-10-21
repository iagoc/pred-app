@extends('template.layout')

@section('titulo')
Predios
@endsection

@section('img-id')
    <img src="{{ asset('img/building.png') }}" />
@endsection

@section('content')
<section>

    <div>
        <form class="flex flex-col  items-center justify-center pt-6" action="/resident/create">
            <input type="search" name="" id="" placeholder="Digite o nome para buscar" class="w-3/4 appearance-none bg-gray-200 text-gray-700 
            border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <button type="submit" class="bg-btn mt-6 h-12 w-3/4 rounded-md text-white text-xl font-semibold ">Cadastrar Morador</button>
        </form>
    </div>
          

</section>
@endsection
