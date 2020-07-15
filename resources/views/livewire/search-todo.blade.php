<div class="w-100">
    <div class="card">
        <div class="card-header">
            <input type="text" class="form-control" wire:model="search">
        </div>
        <div class="card-body">
            @foreach($todos as $todo)
                <div>
                    @livewire('todo', ['todo' => $todo], key($todo->id))
                </div>
            @endforeach
        </div>
        <div class="d-block text-right card-footer">
            <button class="mr-2 btn btn-link btn-sm">Cancel</button>
            <button data-toggle="modal" data-target="#create-task" class="btn btn-primary">Add Task</button>
        </div>
    </div>
</div>
