<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use App\User;
use Livewire\Component;

class UpdateTodo extends Component
{
    public $todo;

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function render()
    {
        return view('livewire.update-todo');
    }

    public function markAsDone()
    {
        $this->todo->setDone(true);
    }

    public function markAsNotDone()
    {
        $this->todo->setDone(false);
    }

    public function destroy()
    {
        $this->todo->delete();
        $this->emit('renderTodos');
    }
}
