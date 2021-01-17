<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Selectone extends Component
{
    public $one;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($one,$name)
    {
        $this->one=$one;
        $this->name=$name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.selectone');
    }
}
