<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskForm extends Component
{

    public $label;
    public $detail;
    public $status;

    protected $rules = [
        "label" => "required|max:50",
        "detail" => "nullable|max:255"
    ];

    public function render()
    {
        return view('livewire.task-form');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(){
        $validated = $this->validate();

        $user_id = Auth::user()->id;

        Task::create([
            "label" => $validated['label'],
            "detail" => $validated["detail"],
            "user_id" => $user_id,
        ]);

        return redirect()->route("taskboard");
    }
}
