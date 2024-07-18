<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Attributes\On;
use Livewire\Component;

class AllTodo extends Component
{
    #[On('todo-created')]
    public function render()
    {
        return view('livewire.todo.all-todo',[
            'todos' => Todo::latest()->get()
        ]);
    }
}
