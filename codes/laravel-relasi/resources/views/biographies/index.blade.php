<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biografi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('My Biography') }}
                            </h2>
                        </header>

                        @if($biography)
                        <div class="mt-6 space-y-6">
                            <p>{{ $biography->content }}</p>

                            <a href="{{ route('biographies.edit', $biography) }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Edit</a>
                        </div>
                        
                        @else
                        <p>Tidak ada biography. <a href="{{ route('biographies.create') }}">Buat baru?</a></p>
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>