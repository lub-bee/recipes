<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;
    public $deleteMode = false;

    public function mount(){
        $this->tasks = Task::where("user_id", Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.task-list');
    }

    public function deleteTask(){
        return "YES";
    }
}
