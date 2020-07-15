<?php

namespace App\Http\Livewire\Parts;

use App\Models\Todo;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class EditTitle extends Component
{
    public $newTitle = '';
    public $isEditing = false;
    public $todo = null;

    public $listeners = ['showEdit' => 'showEdit'];


    public function mount(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function showEdit()
    {
        $this->isEditing = true;
    }

    public function render()
    {
        return view('livewire.parts.edit-title');
    }
}
