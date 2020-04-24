<div class="w-100">
    <div class="card">
        <div class="card-header">
            <input type="text" class="form-control" wire:model="search">
        </div>
        <div class="card-body">
            @foreach($todos as $todo)
                @include('todo.parts.todo')
            @endforeach
        </div>
        <div class="d-block text-right card-footer">
            <button class="mr-2 btn btn-link btn-sm">Cancel</button>
            <button class="btn btn-primary">Add Task</button>
        </div>
    </div>
</div>
