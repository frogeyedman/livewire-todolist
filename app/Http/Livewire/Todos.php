<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Todos extends Component
{
    public $todo;

    public $title;

    public string $search = '';


    public function submit()
    {
        Todo::create([
            'title' => $this->title
        ]);
    }

    public function render()
    {
        $todos = Todo::where('title', 'LIKE', "%{$this->search}%")->get();

        return view('livewire.todos', compact('todos'));
    }

    public function markAsDone($id)
    {
        Todo::find($id)->setDone(true);
    }

    public function markAsNotDone($id)
    {
        Todo::find($id)->setDone(false);
    }

    public function destroy($id)
    {
        Todo::whereId($id)->delete();
    }
}
