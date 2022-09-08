<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskItem extends Component
{
    public $deleteMode;
    public function mount($task, $deleteMode){
        $this->deleteMode = $deleteMode;
    }

    public function render()
    {
        return view('livewire.task-item');
    }
}
