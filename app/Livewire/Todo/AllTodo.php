<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class AllTodo extends Component
{
    use WithPagination;

    public $search;
    public $editingId;
    #[Validate('required|min:3|max:50')]
    public $editingName;

    #[On('todo-created')]

    public function delete($id){
        try {
            $todo = Todo::findOrFail($id);
            $todo->delete();
        } catch (\Exception $exc) {
            session()->flash('error','Failed to delete todo');
            return;
        }

    }
    public function toggle(Todo $todo){
        $todo->status = !$todo->status;
        $todo->update();
    }
    public function edit(Todo $todo){
        $this->editingId = $todo->id;
        $this->editingName = $todo->todo;
    }
    public function cancelEditing(){
        $this->reset('editingId','editingName');
    }
    public function update(){
        $this->validateOnly('editingName');
        Todo::find($this->editingId)->update([
            'todo' => $this->editingName
        ]);
        $this->cancelEditing();
    }
    public function render()
    {
        return view('livewire.todo.all-todo',[
            'todos' => Todo::where('todo','like',"%{$this->search}%")->latest()->paginate(5)
        ]);
    }
}
