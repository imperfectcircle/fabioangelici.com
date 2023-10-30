<?php

namespace App\View\Components;

use Illuminate\View\Component;

class layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $description;
    public $ogImage;
    public $ogUrl;
    public $ogDescription;
    public $ogTitle;
    public $canonical;
    
    public function __construct($title, $description, $ogUrl, $ogDescription, $ogTitle, $canonical, $ogImage = '')
    {
        $this->title = $title;
        $this->description = $description;
        $this->ogUrl = $ogUrl;
        $this->ogDescription = $ogDescription;
        $this->ogTitle = $ogTitle;
        $this->canonical = $canonical;
        $this->ogImage = $ogImage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
