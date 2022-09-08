<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Taskboard') }}
        </h2>
    </x-slot>

    <div id="like_button_container"></div>

    @livewire("task-list")
    

    <div class="m-6 bg-white shadow rounded p-6 px-4">
        <div class=''>
            @livewire("task-form")    
        </div>
        
        
        
        <div class='divide-y'>
            @forelse ($tasks as $task)

                @livewire('task-item-old', ['task' => $task], key($task->id))
            @empty
                
            @endforelse    
        </div>
    </div>

</x-app-layout>