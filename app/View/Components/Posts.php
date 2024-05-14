<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Posts extends Component
{
    public $posts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->posts = [
            [
                'title' => 'Heladerias',
                'body' => '¡Bienvenidos a la empresa líder en suministros para oficina! 💼 En nuestro sitio encontrarás todo lo que necesitas para hacer de tu espacio de trabajo un lugar más eficiente y agradable. Desde papelería hasta mobiliario, pasando por tecnología y productos de limpieza, tenemos todo lo que necesitas para tamos buscando maneras de ofrecerte los mejores...'
            ],
            [
                'title' => 'Restaurantes',
                'body' => '¡Bienvenidos a la empresa líder en suministros para oficina! 💼 En nuestro sitio encontrarás todo lo que necesitas para hacer de tu espacio de trabajo un lugar más eficiente y agradable. Desde papelería hasta mobiliario, pasando por tecnología y productos de limpieza, tenemos todo lo que necesitas para tamos buscando maneras de ofrecerte los mejores...'
            ],
            [
                'title' => 'Clínicas dentales',
                'body' => '¡Bienvenidos a la empresa líder en suministros para oficina! 💼 En nuestro sitio encontrarás todo lo que necesitas para hacer de tu espacio de trabajo un lugar más eficiente y agradable. Desde papelería hasta mobiliario, pasando por tecnología y productos de limpieza, tenemos todo lo que necesitas para tamos buscando maneras de ofrecerte los mejores...'
            ],
            [
                'title' => 'Heladerias',
                'body' => '¡Bienvenidos a la empresa líder en suministros para oficina! 💼 En nuestro sitio encontrarás todo lo que necesitas para hacer de tu espacio de trabajo un lugar más eficiente y agradable. Desde papelería hasta mobiliario, pasando por tecnología y productos de limpieza, tenemos todo lo que necesitas para tamos buscando maneras de ofrecerte los mejores...'
            ],
            [
                'title' => 'Restaurantes',
                'body' => '¡Bienvenidos a la empresa líder en suministros para oficina! 💼 En nuestro sitio encontrarás todo lo que necesitas para hacer de tu espacio de trabajo un lugar más eficiente y agradable. Desde papelería hasta mobiliario, pasando por tecnología y productos de limpieza, tenemos todo lo que necesitas para tamos buscando maneras de ofrecerte los mejores...'
            ],
            [
                'title' => 'Clínicas dentales',
                'body' => '¡Bienvenidos a la empresa líder en suministros para oficina! 💼 En nuestro sitio encontrarás todo lo que necesitas para hacer de tu espacio de trabajo un lugar más eficiente y agradable. Desde papelería hasta mobiliario, pasando por tecnología y productos de limpieza, tenemos todo lo que necesitas para tamos buscando maneras de ofrecerte los mejores...'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.posts');
    }
}
