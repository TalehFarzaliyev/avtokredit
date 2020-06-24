<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Auto extends Component
{
    public $detail;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($detail)
    {
        $this->detail = $detail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.auto');
    }
}
