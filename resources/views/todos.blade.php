<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'To-Do List') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container flex gap-4">
        {{-- @yield('content') --}}
        <h1 class="p-4 shadow rounded mt-4">My To-Do's</h1>
        <table class="table rounded shadow">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Feito</th>
                    <th scope="col">Tarefa</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($todos as $todo)
                    <livewire:table-item :$todo :key="$todo->id"  />
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
