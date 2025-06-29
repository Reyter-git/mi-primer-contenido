
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">    
             
        <!-- Aqui va el contenido de esta vista -->
        <div class="bg-slate-50 flex justify-center items-center">
                     <!-- Aqui va la ruta del controlador funcion store que guarda los registros -->
            <form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-lg">
                <img class="h-14 mb-4 mx-auto" src="https://www.synointcdn.com/wp-content/uploads/2019/04/Amazon-Logo-PNG.png" alt="">
                
                    <h1 class="text-center text-2xl font-semibold text-gray-600">Nuevo Evento</h1>
                    <div>
                    <label class="block mb-1 text-gray-600 font-semibold">Titulo</label>
                    <input name="tbeve_titulo" type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                    <div>
                    <label class="block mb-1 text-gray-600 font-semibold">Descripción</label>
                    <input name="tbeve_descripcion" type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                    <div>
                    <label class="block mb-1 text-gray-600 font-semibold">Fecha</label>
                    <input name="tbeve_fecha" type="datetime-local" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                    <div>
                    <label class="block mb-1 text-gray-600 font-semibold">Hora</label>
                    <input name="tbeve_hora" type="time" step="1" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                    
                    <label class="block mb-1 text-gray-600 font-semibold">Lugar</label>
                    <input name="tbeve_lugar" type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                    <div>
                    <label class="block mb-1 text-gray-600 font-semibold">Precio</label>
                    <input name="tbeve_precio" type="number" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
                    </div>
                    <!-- ahora para ver la imagen seleccionada -->
                        <div class="py-6 grid grid-cols-1 mt-5 mx-2">
                            <img id="imagenSeleccionada" style="max-height: 300px;">
                        </div>

                        <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="block mb-1 text-gray-600 font-semibold">Subir Imagen</label>
                            <div class="flex item-center justify-center w-full">
                                <label class="flex flex-col border-4 border-dashed w-full h-32 hover: bg-gray-100 hover:border-purple-300 group">
                                    <div class="flex flex-col item-center justify-center pt-7">
                                        <p class="text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider">Seleccione la imagen</p>
                                    </div>
                                    <input name="tbeve_imagen" id="imagen" type='file' class="hidden" />
                        </label>
                        </div>
                        </div>

                
                <div class="flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5">
                    <a href="{{route('eventos.index')}}" class="w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Cancelar</a>
                <button type="submit" class="w-auto bg-yellow-500 hover:bg-yellow-700 rounded-lg shadow-1 font-medium text-white px-4 py-2">Guardar</button>
                </div>
            </form> 
        
        </div>
    </div>
</x-app-layout>

{{-- Scrip para ver la imagen en el formulario antes de CREAR UN NUEVO EVENTO --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e) {
        $('#imagen').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>