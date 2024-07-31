<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateTodo extends Component
{
    #[Validate('required|min:3|max:50')]
    public $todo;

    public function create(){
        $validated = $this->validateOnly('todo');
        $todo = Todo::create($validated);
        $this->reset('todo');
        session()->flash('success','Todo Created Successfully');
        $this->dispatch('todo-created');
    }

    public function render()
    {
        return view('livewire.todo.create-todo');
    }
}
