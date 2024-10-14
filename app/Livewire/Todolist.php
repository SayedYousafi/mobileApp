<?php

namespace App\Livewire;
use App\Models\Todo;

use Livewire\Component;

class Todolist extends Component
{
    //#[Rule('required|min:30|max:50')]
    protected $rules = [
        'name' => 'required|min:6',
        
    ];
    public $name;
    
    public function create()
    {
       // 'name'  => ['required', 'string', 'max:255'],
        $validated=$this->validateOnly('name');
        Todo::create($validated);
        $this->reset('name');
        session()->flash('message','saved successfuly');
    }

    public function render()
    {
        return view('livewire.todolist');
    }
}
