<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination,WithoutUrlPagination;

    #[Validate('required',message:"Name cannot be empty")]
    public $name;
    #[Validate('required|email|unique:users')]
    public $email;
    #[Validate('required|min:6')]
    public $password;
    public $description;

    public function createUser(){
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
        $this->reset(['name','email','password']);
        //Session()->flash('success','User Created Successfully');
    }
    public function render()
    {
        $title = "Laravel Livewire";
        $users = User::paginate(5);
        return view('livewire.counter',[
            'title' => $title,
            'users' => $users
        ]);
    }
}
