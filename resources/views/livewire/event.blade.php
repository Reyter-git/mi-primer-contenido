<?php

use Livewire\Volt\Component;

new class extends Component {
    //hola
    public ?int $eventId=null;
    public string $etitulo='';
    public string $edescripcion='';
    public DateTime $efechaini='';
    public DateTime $efechafin='';
    public bool $state=true;



    $table->id();
            $table->string('etitulo');
            $table->text('edescripcion')-> nullable();
            $table->dateTime('efechaini');
            $table->dateTime('efechafin');
            $table->time('ehora');
            $table->string('elugar');
            $table->decimal('eprecio', 4, 2);
            $table->string('eimagen');
            $table->boolean('state')->default(true);
            $table->timestamps();
}; ?>

<div>
    en tus manos para borrar
</div>
