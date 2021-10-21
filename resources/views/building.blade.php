@extends('template.layout')

@section('titulo')
Predios
@endsection

@section('content')
<section>
    <div class="flex justify-center pt-6">
        <img src="{{ asset('img/building.png') }}" />
    </div>

    <div class="flex justify-center pt-6">
        <button type="button" class="bg-btn h-12 w-3/4 rounded-md text-white text-xl font-semibold ">Cadastrar Prédio</button>
    </div>
    

</section>
@endsection
