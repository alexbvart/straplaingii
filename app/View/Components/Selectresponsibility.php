<?php

namespace App\View\Components;
use App\Reponsibility;

use Illuminate\View\Component;

class Selectresponsibility extends Component
{
    public $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items)
    {
        $this->items=$items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.selectresponsibility'); 
    }
}
