<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TableItem extends Component
{
    public $id, $name, $completed;

    public function save()
    {
        var_dump($this->name);
        $todo = Todo::find($this->id);

        $todo->completed = !$this->completed;

        $todo->save();
    }

    public function mount($todo)
    {
        $this->id = $todo->id;
        $this->name = $todo->name;
        $this->completed = $todo->completed;
    }

    public function render()
    {
        return view('livewire.table-item')->with([
            'id' => $this->id,
            'name' => $this->name,
            'completed' => $this->completed,
        ]);
    }
}
