<div>
    @if($isEditing)
        <input
            type="text"
            class="form-control"
            placeholder="100 characters max."
            wire="textInput"
            wire:model.lazy="newTitle"
            wire:keydown.enter="isEditing = false"
            wire:keydown.escape="isEditing = false"
        >
    @endif
</div>
