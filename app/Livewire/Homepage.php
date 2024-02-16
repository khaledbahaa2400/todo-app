<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app-layout')]
class Homepage extends Component
{
    use WithPagination;

    #[Rule('required|min:3')]
    public $name;

    #[Url(as: 's', history: true)]
    public $search;

    public $editingTodoId;

    #[Rule('required|min:3')]
    public $editingTodoName;

    public function createTodo()
    {
        $this->validateOnly('name');
        Todo::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
        ]);

        $this->reset('name');
        session()->flash('success', 'Todo Created Successfully');
        $this->resetPage();
    }

    public function deleteTodo(Todo $todo)
    {
        $todo->delete();
    }

    public function editTodo(Todo $todo)
    {
        $this->editingTodoId = $todo->id;
        $this->editingTodoName = $todo->name;
    }

    public function updateTodo(Todo $todo)
    {
        $this->validateOnly('editingTodoName');
        $todo->name = $this->editingTodoName;
        $todo->save();
        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->reset('editingTodoName', 'editingTodoId');
    }

    public function toggleCompleted(Todo $todo)
    {
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function render()
    {
        return view(
            'livewire.homepage',
            [
                'todos' => Todo::latest()->where("name", "like", "%{$this->search}%")
                    ->where("user_id", Auth::id())
                    ->paginate(5)
            ]
        );
    }
}
