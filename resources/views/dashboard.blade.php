{{-- invoco al componente AppLayout.php que esta en app/View/Components/AppLayout.php --}}
<x-app-layout>
    {{-- slot con nombre 'header', va a mostrarse en {{ $header }} --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- todo lo demas va a mostrarse en {{ $slot }} --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
