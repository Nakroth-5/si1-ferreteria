<x-gradient-div>
    <x-container-div>
        @include('livewire.user.components.header-user')

        @if (session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <x-container-second-div>
            <div class="overflow-x-auto rounded-lg bg-orange-500">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr class="bg-gray-800">
                        @include('livewire.user.components.table-header')
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr class="bg-gray-800 hover:bg-gray-900">
                            @include('livewire.user.components.table-rows')
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center">
                                <div class="flex flex-col items-center justify-center space-y-3">
                                    <x-icons.user class="h-12 w-12 text-gray-400"></x-icons.user>
                                    <p class="text-gray-400 text-lg">
                                        @if($search)
                                            No se encontraron usuarios que coincidan con "{{ $search }}"
                                        @else
                                            No hay usuarios registrados
                                        @endif
                                    </p>
                                    @if($search)
                                        <button
                                            wire:click="clearSearch"
                                            class="text-blue-400 hover:text-blue-300 underline text-sm">
                                            Limpiar búsqueda
                                        </button>
                                    @else
                                        <x-primary-button wire:click="openCreateModal" class="mt-2">
                                            <x-icons.user class="mr-2"></x-icons.user>
                                            Crear primer usuario
                                        </x-primary-button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            @if($users->hasPages())
                <div class="mt-6">
                    {{ $users->links() }}
                </div>
            @endif
        </x-container-second-div>

        @include('livewire.user.modal-edit-store')
    </x-container-div>
</x-gradient-div>
