<div>
    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label>
                {{ $item->name }}
            </x-input-label>
        </div>
    </td>
    <td>
        <div class="flex items-center ml-4">
            <x-input-label>
                {{ $item->description }}
            </x-input-label>
        </div>
    </td>
    <td>
        <div class="flex items-center ml-4">
            <x-input-label>
                {{ $item->level }}
            </x-input-label>
        </div>
    </td>
    <td>
        <div class="flex items-center px-4">
            @if($item->is_active ?? true)
                <span
                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    <span class="w-1.5 h-1.5 bg-green-400 rounded-full mr-1.5"></span>
                    Activo
                </span>
            @else
                <span
                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                    <span class="w-1.5 h-1.5 bg-red-400 rounded-full mr-1.5"></span>
                    Inactivo
                </span>
            @endif
        </div>
    </td>
    <td>
        <div class="flex items-center ml-4">
            <select
                id="permissions"
                required
                class="mt-2 block w-full bg-gray-800 border-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm">
                @php
                    $permissions = $item->permissions()->where('is_active', true)->get();
                @endphp
                @foreach($permissions as $permission)
                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                @endforeach
            </select>
        </div>
    </td>
    <td>
        <div class="flex items-center ml-4 grid-cols-2 gap-1">
            <button
                class="w-full bg-gradient-to-r from-orange-600 via-orange-700 text-white font-semibold py-2 px-4 rounded-md tracking-wider transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-orange-600/25 hover:from-orange-500 hover:to-orange-600"
                wire:click="editRole({{ $item->id }})">
                <x-icons.edit></x-icons.edit>
            </button>
            <button
                class="w-full bg-gradient-to-r from-red-600 via-orange-800 text-white font-semibold py-2 px-4 rounded-md tracking-wider transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-orange-600/25 hover:from-red-500 hover:to-red-600"
                wire:click="deleteRole({{ $item->id }})">
                <x-icons.delete></x-icons.delete>
            </button>
        </div>
    </td>
</div>
