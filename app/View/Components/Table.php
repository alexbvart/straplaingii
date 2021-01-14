<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $isEditable; //define si la tabla tendra los botones de editar y eliminar
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $isEditable=false )
    {
        $this->isEditable =$isEditable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table');
    }
}
