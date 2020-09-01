<?php

namespace App\View\Components\Btn;

use Illuminate\View\Component;

class Cancel extends Component
{
    public $backLink;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($backLink)
    {
        $this->backLink = $backLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.btn.cancel');
    }
}
