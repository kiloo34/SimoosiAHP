<?php

namespace App\View\Components\Btn;

use Illuminate\View\Component;

class Add extends Component
{
    // public $title, $subtitle;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link)
    {
        // $this->$title= $title;
        // $this->$subtitle = $subtitle;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.btn.add');
    }
}
