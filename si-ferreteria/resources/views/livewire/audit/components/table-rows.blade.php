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
            <x-input-label value="{{ $item->created_at }}"/>
        </div>
    </td>

    <td class="px-6 py-2 whitespace-nowrap">
        <div class="flex items-center ml-4">
            <x-input-label value="{{ $item->updated_at }}"/>
        </div>
    </td>

</div>
