<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class SearchTodo extends Component
{
    public string $search = '';

    public $listeners = ['renderTodos' => 'render'];

    public function render()
    {
        $todos = Todo::where('title', 'LIKE', "%{$this->search}%")->get();

        return view('livewire.search-todo', compact('todos'));
    }
}
