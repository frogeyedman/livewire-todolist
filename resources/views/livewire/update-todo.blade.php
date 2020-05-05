<div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="todo-indicator bg-{{$todo->is_done ? "success" : "warning"}}"></div>
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-2">
                        <div class="custom-checkbox custom-control">
                            <input class="custom-control-input" id="exampleCustomCheckbox12" type="checkbox">
                            <label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                        </div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">{{$todo->title}}
                            <div class="badge badge-danger ml-2">Rejected</div>
                        </div>
                        <div class="widget-subheading"><i>By Bob</i></div>
                    </div>
                    <div class="widget-content-right">
                        @if(!$todo->is_done)
                            <button wire:click="markAsDone" class="border-0 btn-transition btn btn-outline-success">
                                <i class="fa fa-check"></i>
                            </button>
                        @else
                            <button wire:click="markAsNotDone" class="border-0 btn-transition btn btn-success">
                                <i class="fa fa-check"></i>
                            </button>
                        @endif
                        <button wire:click="destroy" class="border-0 btn-transition btn btn-outline-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
