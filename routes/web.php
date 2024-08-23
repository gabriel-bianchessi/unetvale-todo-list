<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Models\Todo;

Route::get('/', function () {
    return redirect('todos');
});

Route::get('/todos', function () {
    return view('todos', [
        'todos' => Todo::latest()->get()
    ]);
})->name('todos');

// rota sem uso pois já está sendo utilizando o livewire
Route::post('/todos/completed/{todoId}', function(Request $request, $todoId) {
    return "Rota para completar a tarefa";
})->name('toggleTodo');
