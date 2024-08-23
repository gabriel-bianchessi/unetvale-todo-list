<div>
    <tr>
        <th scope="row">{{ $id }}</th>
        <td>
            @if ($completed)
                <input class="form-check-input" id="completed" type="checkbox" wire:model="completed"
                    wire:change="save({{ $id }})" checked>
            @else
                <input class="form-check-input" id="completed" type="checkbox" wire:model="completed"
                    wire:change="save({{ $id }})">
            @endif
        </td>
        <td>{{ $name }}</td>
    </tr>
</div>
