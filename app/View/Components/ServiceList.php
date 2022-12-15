<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $route;
    public $icon;
    public $text;
    
    public function __construct($route, $icon, $text)
    {
        $this->route = $route;
        $this->icon = $icon;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service-list');
    }
}
