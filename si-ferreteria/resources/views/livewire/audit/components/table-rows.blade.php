<div>
    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label value="{{ $item->user->name }}"/>
        </div>
    </td>

    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label value="{{ $item->action }}"/>
        </div>
    </td>

    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label value="{{ $item->affected_model ?? 'N/A' }}"/>
        </div>
    </td>

    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex flex-col ml-4 text-sm text-gray-700">
            @foreach(($item->changes['after'] ?? []) as $field => $newValue)
                @php
                    $oldValue = $item->changes['before'][$field] ?? '—';
                    if ($field === 'updated_at' || $field === 'created_at') {
                        $newValue = \Carbon\Carbon::parse($newValue)->format('d/m/Y H:i:s');
                        $oldValue = \Carbon\Carbon::parse($oldValue)->format('d/m/Y H:i:s');
                    }
                @endphp
                <div>
                    <x-input-label>
                        <strong>{{ ucfirst($field) }}</strong>:
                        {{ $oldValue }} → {{ $newValue }}
                    </x-input-label>

                </div>
            @endforeach
        </div>
    </td>


    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label value="{{ $item->ip_address }}"/>
        </div>
    </td>

    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label value="{{ $item->user_agent }}"/>
        </div>
    </td>

    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label value="{{ $item->updated_at }}"/>
        </div>
    </td>

</div>
