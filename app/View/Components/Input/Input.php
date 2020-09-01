<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Input extends Component
{
    public $name, $type, $label, $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type, $label, $id = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input.input');
    }
}
