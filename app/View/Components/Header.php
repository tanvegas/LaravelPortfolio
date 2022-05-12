<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $name;
    public $experiences;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $experiences)
    {
        //
        $this->name = $name;
        $this->experiences = $experiences;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
