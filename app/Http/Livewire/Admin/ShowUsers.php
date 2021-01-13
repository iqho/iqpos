<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ShowUsers extends Component
{
    public function render()
    {
        return <<<'blade'
            <div class="container">
            <livewire:user-datatables exportable hideable="select"/>
            </div>
        blade;
    }
}
