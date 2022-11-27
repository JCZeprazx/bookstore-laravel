<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $titleModal;
    public $idModal;
    /**
     * Create a new component instance.
     * @param string $titleModal
     * @param string $idModal
     * @return void
     */
    public function __construct($titleModal, $idModal)
    {
        $this->titleModal = $titleModal;
        $this->idModal = $idModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
