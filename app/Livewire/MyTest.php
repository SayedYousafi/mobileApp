<?php

namespace App\Livewire;

use Livewire\Component;

class MyTest extends Component
{
    public $name='Sayed';
    
    public function render()
    {
        return view('livewire.my-test');
    }
}
