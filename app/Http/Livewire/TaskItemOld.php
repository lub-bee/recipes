<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskItemOld extends Component
{
    public $task;
    public $label;
    public $detail;
    public $status;
    public $icon;

    protected $rules = [
        "label" => "required|max:50",
        "detail" => "nullable|max:255"
    ];

    public function mount($task){
        // $this->id = $task->id;
        $this->label = $task->label;
        $this->detail = $task->detail;
        $this->status = $task->status;
        $this->icon = ($this->status) ? "<i class='fa-regular fa-square-check'></i>" : "<i class='fa-regular fa-square'></i>";
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.task-item-old');
    }

    public function submit(){

        $validated = $this->validate();

        Task::where([
            "id" => $this->task->id,
            "user_id" => Auth::user()->id
        ])->update([
            "label" => $validated['label'],
            "detail" => $validated["detail"],
        ]);

        return redirect()->route("taskboard");
    }

    public function updateStatus(){
        Task::where([
            "id" => $this->task->id,
            "user_id" => Auth::user()->id
        ])->update([
            "status" => !$this->status,
        ]);

        return redirect()->route("taskboard");
    }

    public function delete(){
        Task::where([
            "id" => $this->task->id,
            "user_id" => Auth::user()->id
        ])->delete();

        return redirect()->route("taskboard");
    }
}
