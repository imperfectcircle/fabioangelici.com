<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $classes;
    public $anchorClass;
    public $route;
    public $name;
    
    public function __construct($route, $name, $classes = "", $anchorClass = '')
    {
        $this->classes = $classes;
        $this->anchorClass = $anchorClass;
        $this->route = $route;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
