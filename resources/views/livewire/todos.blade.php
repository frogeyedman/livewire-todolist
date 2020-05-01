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
            <button data-toggle="modal" data-target="#create-task" class="btn btn-primary">Add Task</button>
        </div>
    </div>
</div>


<div class="modal" id="create-task" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form wire:submit.prevent="submit">
                    <div class="form-group">
                        <input type="text" wire:model="title" class="form-control" placeholder="Groceries with Ben">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add to list</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
