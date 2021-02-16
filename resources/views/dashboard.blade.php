<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{add_modal:false}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" >
                    <div class="grid grid-cols-4">
                        <div class="p-3 m-0.5 border rounded-md bg-green-100 hover:bg-green-200 cursor-pointer" @click="add_modal= true">
                            Adicionar
                        </div>
                    @foreach ($user->restaurantes as $res)
                        <div class="p-3 m-0.5 border rounded-md hover:bg-gray-200">
                        *img*
                            <h3 class="items-center">
                            {{$res->nome}}</h3>
                         <br> {{$res->endereco}}
                        </div>
                    @endforeach
                    </div>
                </div>

            </div>
        </div>

            <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="fixed z-10 inset-0 overflow-y-auto" x-show="add_modal"  >
          <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" >
            <!--
              Background overlay, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal=false">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="p-3">
                    Adicionar Restaurantes
                    <!-- <form action="{{action([\App\Http\Controllers\RestauranteController::class, 'store'])}}" method="POST"> -->
                    <form action="{{route('add-Res')}}" method="POST">   
                        @csrf

                                    <!-- nome -->
                        <div>
                            <x-label for="nome" :value="__('Nome')" />

                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
                        </div>
                                     <!-- Endereço -->
                        <div>
                            <x-label for="endereco" :value="__('Endereço')" />

                            <x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autofocus />
                        </div>
                                     <!-- Imagem -->
                        <div>
                            <x-label for="imagem" :value="__('Imagem')" />

                            <x-input id="imagem" class="block mt-1 w-full" type="text" name="imagem" :value="old('imagem')" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" @click="add_modal=false">
                            {{ __('Cancelar') }}
                            </a>

                            <x-button class="ml-4">
                            {{ __('Adicionar') }}
                             </x-button>

                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>

    </div>
</x-app-layout>
