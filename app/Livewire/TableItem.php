<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TableItem extends Component
{
    public Todo $todo;

    public function save()
    {
        $todoUpdate = Todo::find($this->todo->id);

        $todoUpdate->completed = !$this->completed;

        $todoUpdate->save();
    }

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function render()
    {
        return view('livewire.table-item')->with([
            'id' => $this->todo->id,
            'name' => $this->todo->name,
            'completed' => $this->todo->completed,
        ]);
    }
}
