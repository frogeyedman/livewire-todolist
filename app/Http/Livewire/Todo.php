<?php

namespace App\Http\Livewire;

use App\Models\Todo as TodoModel;
use Livewire\Component;

class Todo extends Component
{
    /**
     * @var TodoModel $todo
     */
    public $todo;

    public function mount(TodoModel $todo)
    {
        $this->todo = $todo;
    }

    public function render()
    {
        return view('livewire.todo');
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
    }
}
