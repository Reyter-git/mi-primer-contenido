<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi pagina de inicio</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="">
 {{-- descargar esta serie de videos https://www.youtube.com/watch?v=jL47NfIHoeQ --}}
  <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
   <!-- bloque correspondiente al logo -->
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
      <span class="font-semibold text-xl tracking-tight">Huaycán.com</span>
    </div>
    <!-- bloque del boton que se oculta -->
    <div class="block lg:hidden">
      <button id='boton' class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
    <!-- bloque del menu -->
    <div id='menu' class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden">
      <div class="text-sm lg:flex-grow">
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Docs
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Examples
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Blog
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
          Eventos
        </a>
      </div>
      <div>
        <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
      </div>
    </div>
  </nav>
        

    <div class="bg-blue-500">Logotipo</div>
    <div class="bg-purple-300">
      <img class="" src="/imagenes/miraflores-slider1.jpg" alt=""/> 

    </div>

    <!-- EMPIEZA EL BLOQUE CENTRAL -->
    <div class="container bg-gray-300 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 my-2">

      {{ $evento->created_at->diffForHumans()}}
      {{ $evento->created_at->formatLocalized('%A %d %B %Y')}}
      {{ $evento->created_at->isoFormat('LLLL')}}
      

      {{Carbon\Carbon::parse($evento->tbeve_fecha)->isoFormat('dddd[,] DD [de] MMMM YYYY')}}

          <div class="flex justify-center bg-blue-500">
            <!-- targeta 1 -->
            <div class="bg-green-300 rounded-lg shadow-lg max-w-sm">
              <a href="#!">
                <img class="rounded-t-lg" src="/imagen/card-1.jpg" alt=""/>
              
                <div class="p-6">
                  <h5 class="text-gray-900 text-xl sm:text-base font-medium mb-2">Aniversario del Centro Cultural Wayra PerÃº</h5>
                  <p class="text-gray-700 text-base"> SÃ¡bado 12 nov. - 8:00 pm </p>
                  <p class="text-gray-700 text-base"> Anfiteatro "El hueco" </p>
                  <p class="text-gray-700 text-base mb-2"> Entrada: Gratis </p>
              </a>
                <!-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> -->
                </div>
            </div>
          </div>

          <div class="flex justify-center bg-blue-500">
            <!-- targeta 1 -->
            <div class="bg-green-300 rounded-lg shadow-lg max-w-sm">
              <a href="#!">
                <img class="rounded-t-lg" src="/imagenes/card-1.jpg" alt=""/>
              
                <div class="p-6">
                  <h5 class="text-gray-900 text-xl sm:text-base font-medium mb-2">Aniversario del Centro Cultural Wayra PerÃº</h5>
                  <p class="text-gray-700 text-base"> SÃ¡bado 12 nov. - 8:00 pm </p>
                  <p class="text-gray-700 text-base"> Anfiteatro "El hueco" </p>
                  <p class="text-gray-700 text-base mb-2"> Entrada: Gratis </p>
              </a>
                <!-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> -->
                </div>
            </div>
          </div>

          <div class="flex justify-center bg-blue-500">
            <!-- targeta 1 -->
            <div class="bg-green-300 rounded-lg shadow-lg max-w-sm">
              <a href="#!">
                <img class="rounded-t-lg" src="/imagenes/card-1.jpg" alt=""/>
              
                <div class="p-6">
                  <h5 class="text-gray-900 text-xl sm:text-base font-medium mb-2">Aniversario del Centro Cultural Wayra PerÃº</h5>
                  <p class="text-gray-700 text-base"> SÃ¡bado 12 nov. - 8:00 pm </p>
                  <p class="text-gray-700 text-base"> Anfiteatro "El hueco" </p>
                  <p class="text-gray-700 text-base mb-2"> Entrada: Gratis </p>
              </a>
                <!-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> -->
                </div>
            </div>
          </div>

          <div class="flex justify-center bg-blue-500">
            <!-- targeta 1 -->
            <div class="bg-green-300 rounded-lg shadow-lg max-w-sm">
              <a href="#!">
                <img class="rounded-t-lg" src="/imagenes/card-1.jpg" alt=""/>
              
                <div class="p-6">
                  <h5 class="text-gray-900 text-xl sm:text-base font-medium mb-2">Aniversario del Centro Cultural Wayra PerÃº</h5>
                  <p class="text-gray-700 text-base"> SÃ¡bado 12 nov. - 8:00 pm </p>
                  <p class="text-gray-700 text-base"> Anfiteatro "El hueco" </p>
                  <p class="text-gray-700 text-base mb-2"> Entrada: Gratis </p>
              </a>
                <!-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> -->
                </div>
            </div>
          </div>

          <div class="flex justify-center bg-blue-500">
            <!-- targeta 1 -->
            <div class="bg-green-300 rounded-lg shadow-lg max-w-sm">
              <a href="#!">
                <img class="rounded-t-lg" src="/imagenes/card-1.jpg" alt=""/>
              
                <div class="p-6">
                  <h5 class="text-gray-900 text-xl sm:text-base font-medium mb-2">Aniversario del Centro Cultural Wayra PerÃº</h5>
                  <p class="text-gray-700 text-base"> SÃ¡bado 12 nov. - 8:00 pm </p>
                  <p class="text-gray-700 text-base"> Anfiteatro "El hueco" </p>
                  <p class="text-gray-700 text-base mb-2"> Entrada: Gratis </p>
              </a>
                <!-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> -->
                </div>
            </div>
          </div>





    </div>
    <div class="bg-orange-600">pie de pagina</div>


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />  -->

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>