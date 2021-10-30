@extends('template.layout')

@section('titulo')
Predios
<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>
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
            <button type="submit" onclick="toggleModal('modal-example-small')" class="bg-btn mt-6 h-12 w-3/4 rounded-md text-white text-xl font-semibold ">Cadastrar Morador</button>
        </form>
    </div>



<button type="submit" onclick="toggleModal('modal-example-regular')" class="bg-btn mt-6 h-12 w-3/4 rounded-md text-white text-xl font-semibold ">Cadastrar Morador</button>
<!-- Modal -->
<div
  class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
  id="modal-example-regular">
  <div class="relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
        <h3 class="text-3xl font-semibold">
          Cadastrar Morador
        </h3>
        <button
          class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
          onclick="toggleModal('modal-example-regular')">
          <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
            <i class="fas fa-times"></i>
          </span>
        </button>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto">
        <p class=" text-gray-500 text-lg leading-relaxed">
            <section class="flex flex-col items-center">
                <form method="POST" name="resident-registration" id="resident-registration" class="w-full rounded-lg h-auto">
                    @csrf
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <fieldset name="info-resident" class="flex flex-wrap -mx-3">
                        <p class="w-full px-3">
                            <label class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-last-name">Nome</label>
                            <input required  type="text" name="resident_name" id="resident_name" placeholder="Digite o nome" class="w-full self-start appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">      
                        </p>
            
                        <p class="w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Telefone</label>
                            <input  type="tel" name="resident_tel" id="resident_tel" placeholder="99999-9999" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </p>
            
                        <p class="w-3/5 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Endereço do Prédio</label>
                            <select name="building_adrress" id="building_adrress" onchange="boraLa()" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">Selecione</option>
                                {{-- @foreach ($buildings as $building)
                                    <option value="{{ $building->id }}">{{ $building->address }}</option>
                                @endforeach --}}
                            </select>  
                           
                        </p>
            
                        <p class="w-1/5 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4 mb-1" for="grid-last-name">Local</label>
                            <select name="info_address_local" id="info_address_local" class="block bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">Selecione</option>
                            </select>            
                        </p>
                        <p class="w-1/5 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Número Apart.</label>
                            <input  type="number" name="apart_number" id="apart_number" placeholder="18B" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </p>
                    </fieldset>
                    <fieldset  name="info-building" class="flex flex-wrap justify-center -mx-3">

                        {{-- <p class="w-1/2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Número do relógio</label>
                            <input  type="tel" name="apart_light" id="apart_light" placeholder="99999-9999" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </p> --}}
            
                        <p class="w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Valor do aluguel</label>
                            <input  type="number" name="hent_price" id="hent_price" placeholder="R$ 600,00" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </p>
                        <p class="w-1/2">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mt-4  mb-1" for="grid-last-name">Data de Vencimento</label>
                            <input  type="date" name="due_date" id="due_date" placeholder="99999-9999" class="block w-full appearance-none bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </p>
                        {{-- <button type="submit" form="resident-registration" class="bg-blueMenu h-12 w-1/3 rounded-md text-white text-xl font-semibold ">Salvar</button> --}}
                    </fieldset>     
                </form>
            </section>
        </p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
        <button
          class="text-purple-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
          type="button" onclick="toggleModal('modal-example-regular')">
          Close
        </button>
        <button
          class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
          type="button" onclick="toggleModal('modal-example-regular')">
          Save Changes
        </button>
      </div>
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-regular-backdrop"></div>
<script type="text/javascript">
  function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
</script>
          

</section>
@endsection
