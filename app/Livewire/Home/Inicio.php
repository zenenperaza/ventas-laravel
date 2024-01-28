<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Inicio test')]

class Inicio extends Component
{
    public function render()
    {
        return view('livewire.home.inicio');
    }
}
