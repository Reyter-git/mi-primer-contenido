<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['etitulo', 'edescripcion','efechaini','efechafin' ,'ehora','elugar','eprecio','eimagen', 'state'];
}
