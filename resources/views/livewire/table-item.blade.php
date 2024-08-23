<div>
    <tr>
        <th scope="row">{{ $id }}</th>
        <td>
            <form wire:submit="save()">
                <button class="bg-transparent border-none border-0 outline-none" type="submit">
                    <input id="{{ $id }}" class="form-check-input" type="checkbox" wire:model="completed"
                        @if ($completed) checked @endif
                    />
                </button>
            </form>
        </td>
        <td>{{ $name }}</td>
    </tr>
</div>
