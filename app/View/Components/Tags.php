<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tags extends Component
{
    public $tags;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tags = [
            '#moodboard', '#trabajo', '#abogado', '#contrato', '#empresa', '#robótica', '#programación', '#coches', '#moticicleta', '#velocidad', '#tecnología', '#jucio', '#robótica', '#pobreza', '#pyme', '#programación', '#empresa', '#coches', '#movimiento', '#moodboard', '#velocidad', '#contrato','#tecnología', '#juicio', '#inflación', '#moodboard', '#trabajo', '#abogado', '#contrato', '#empresa', '#robótica', '#programación', '#coches', '#moticicleta','#velocidad', '#tecnología', '#jucio', '#robótica', '#pobreza', '#pyme', '#programación', '#empresa', '#coches', '#movimiento', '#moodboard', '#velocidad', '#contrato', '#tecnología', '#juicio', '#inflación',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tags');
    }
}
