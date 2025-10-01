<div>
   <x-table.td>
       {{ $item->name }}
   </x-table.td>

    <x-table.td>
        {{ $item->description }}
    </x-table.td>

    <x-table.td>
        {{ $item->module }}
    </x-table.td>

    <x-table.td>
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
    </x-table.td>

    <td>
        <div class="flex items-center ml-4 grid-cols-2 gap-1">
            <button
                class="w-full bg-gradient-to-r from-orange-600 via-orange-700 text-white font-semibold py-2 px-4 rounded-md tracking-wider transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-orange-600/25 hover:from-orange-500 hover:to-orange-600"
                wire:click="edit({{ $item->id }})">
                <x-icons.edit/>
            </button>
            <button
                class="w-full bg-gradient-to-r from-red-600 via-orange-800 text-white font-semibold py-2 px-4 rounded-md tracking-wider transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-orange-600/25 hover:from-red-500 hover:to-red-600"
                wire:click="delete({{ $item->id }})">
                <x-icons.delete/>
            </button>
        </div>
    </td>
</div>
