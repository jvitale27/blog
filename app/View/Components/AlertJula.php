<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertJula extends Component
{
    public $color;                                      //agregado por mi
    public $titulo = 'Titulo de Alerta por defecto';    //agregado por mi
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $color = 'green')
    {
        $this->color = $color;              //agregado por mi, para que setee el color del componente
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert-jula');
    }

//metodo agregado por mi
    public function prueba(){
        if($this->color == 'pink')
            return "el componentes es pink. metodo prueba()";
        else
            return "el componentes NO es pink. metodo prueba()";
    }
}
