<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioDetailLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $route;
    public $par;
    
    public function __construct($title, $route, $par)
    {
        $this->title = $title;
        $this->route = $route;
        $this->par = $par;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio-detail-link');
    }
}
