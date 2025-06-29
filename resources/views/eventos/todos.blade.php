<x-guest-layout>   
    <x-slot name="title">
        {{ __('Listado de Eventos') }}
    </x-slot>

    <x-carruselflow/>
  
    <div class="bg-red-500 mx-auto my-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 ">

         @foreach ($eventos as $evento) 

          <div class="flex justify-center">
            <!-- targeta 1 -->
            <div class="bg-yellow-300 rounded-lg shadow-lg bg-white-100 max-w-sm">
              <a href="#!">
                <img class="rounded-t-lg" src="/imagen/{{$evento->tbeve_imagen}}" alt=""/>
              
                <div class="p-2">
                  <h5 class="text-gray-900 text-sm text-transform: uppercase font-bold text-center lg:text-base mb-4">{{$evento->tbeve_nombre}}</h5>
                   <p class="inline bg-green-100 text-gray-500 text-sm p-2 "><x-zondicon-calendar class="w-8 h-8 inline"/> {{Carbon\Carbon::parse($evento->tbeve_fecha)->isoFormat('dddd[,] DD [de] MMM YYYY [/ ]hh A')}}</p>
                  <p class="text-gray-500 text-sm mt-2"> {{$evento->tbeve_lugar}} </p>
                  {{-- <p class="text-gray-700 text-base mb-2"> Desde S/. {{$evento->tbeve_precio}} </p> --}}
                  <p class="text-gray-500 text-base mb-2"> 
                    @if ($evento->tbeve_precio===0)
                    <p class="text-gray-700 text-base mb-2"> Entrada Libre</p>
                    @else
                    <p class="text-gray-700 text-base mb-2"> Desde S/. {{$evento->tbeve_precio}} </p>
                    
                @endif
               
              </a>
                <!-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> -->
                </div>
            </div>
          </div>
          @endforeach 
          
    </div>
</div>   
<!-- Aqui el enlace para que se ejecute los componentes tailwind con FLOWBITE  -->

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>  
</x-guest-layout>