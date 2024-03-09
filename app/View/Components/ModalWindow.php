<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalWindow extends Component
{
    public $name;
    public $slug;
    public $content;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $name =$modalWindow->name ?? NULL;
        $slug =$modalWindow->slug ?? NULL;
        $content =$modalWindow->content ?? NULL;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {

        return view('components.modal-window');
    }
}
