<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $color;
    public $titulo = 'Titulo de Alerta por defecto';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $color = 'green')
    {
        $this->color = $color;              //agregado por mi
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }

//metodo agregado por mi
    public function prueba(){
        if($this->color == 'pink')
            return "el componentes es pink. metodo prueba()";
    }
}
