<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Edit extends Component
{
    public $route;

    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $id)
    {
        $this->route = $route;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.edit');
    }
}
