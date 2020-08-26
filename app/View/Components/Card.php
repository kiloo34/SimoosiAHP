<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title, $subtitle, $data, $date;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        // , $subtitle, $data, $date
        $this->title =  $title;
        // $this->subtitle =  $subtitle;
        // $this->data =  $data;
        // $this->date =  $date;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
