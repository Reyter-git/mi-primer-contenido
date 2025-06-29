En la multipart
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
             
                <a type="button" href="{{ route('eventos.create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear</a>
                <table class="table-fixed w-full">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <!-- Se esta ocultando la columna ID con la funcion style display none -->
                        <th style="display: none">ID</th>
                        
                        <th class="border px-4 py-2">TITULO</th>
                        <th class="border px-4 py-2">DESCRIPCION</th>
                        <th class="border px-4 py-2">FECHA</th>
                        <th class="border px-4 py-2">HORA</th>
                        <th class="border px-4 py-2">LUGAR</th>
                        <th class="border px-4 py-2">PRECIO</th>
                        <th class="border px-4 py-2">IMAGEN</th>
                        <th class="border px-4 py-2">ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                        <!-- recorre y asigna los registros a la variable PRODUCTOS y o recorre hastta el final de la variable PRODUCTO en singular -->
                        @foreach ($tbeventos as $evento)
                        <tr>
                             <!--  Se esta ocultando el valor de ID con la funcion style display none -->
                            <td style="display: none">{{$tbevento->id}}</td>
                            <td>{{$tbevento->tbeve_titulo}}</td>
                            <td>{{$tbevento->tbeve_descripcion}}</td>
                            <td>{{$tbevento->tbeve_fecha}}</td>
                            <td>{{$tbevento->tbeve_hora}}</td>
                            <td>{{$tbevento->tbeve_lugar}}</td>
                            <td>{{$tbevento->tbeve_precio}}</td>
                            <td class="border px-14 py-1">
                                <img src="/imagen/{{$tbevento->tbeve_imagen}}" width="60%">
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center rounded-lg text-lg" role="group">
                                     <!--  Boton editar -->
                                    <a href="{{route('eventos.edit', $tbevento->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a>
                                    
                                     <!--  Boton borrar -->
                                     <form action="{{route('eventos.destroy', $tbevento->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Borrar</button>
                                </form>
                                
                                </div>
                            </td>
                          </tr>
                        
                    </tbody>
                    @endforeach
                </table>
                <div>
                    {!! $eventos->links() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.formEliminar')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
        event.preventDefault()
        event.stopPropagation()
    Swal.fire({
        title: '¿Confirma la eliminación del registro?',
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#20c997',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Confirmar'
    }) .then((result) => {
        if (result.isConfirmed) {
            this.submit();
            Swal.fire('¡Eliminado!','El registro a sido eliminado exitosamente.', 'success');
        }
    })

      }, false)
  })
})()
</script>  --}}