<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AllTodo extends Component
{
    use WithPagination;

    public $search;
    #[On('todo-created')]
    public function render()
    {
        return view('livewire.todo.all-todo',[
            'todos' => Todo::where('todo','like',"%{$this->search}%")->latest()->paginate(5)
        ]);
    }
}
