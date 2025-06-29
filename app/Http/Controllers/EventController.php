<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                   //Los registros del modelo se pasan a la variable y con paginate se paginará cada x registros
                   $evento = Event::paginate(5);
                   //aqui va la ruta de la vista, carpeta punto archivo obviando blade php
                     return view('eventos.index', compact('Evento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //llama a la vista crear
         return view('eventos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Aqui va el codigo para guardar el nuevo registro
                //Esta funcion opera la adicion de nuevos registros mediante formulario
                $request->validate([
                    'etitulo' => 'required', 'edescripcion' => 'required','efecha' => 'required', 'ehora' => 'required', 'elugar' => 'required', 'tbeve_precio' => 'required', 'tbeve_imagen' => 'required|mimes:png,jpeg,gif',
                ]);

                Task:create($request->all());
        
                if($imagen =$request->file('tbeve_imagen')) {
                    $rutaGuardarImg = 'imagen/';
                    $imagenEvento = date('YmdHis'). "." .$imagen->getClientOriginalExtension();
                    $imagen->move($rutaGuardarImg, $imagenEvento);
                    $evento['tbeve_imagen'] = "$imagenEvento";
                }
                Evento::create($evento);
                return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
