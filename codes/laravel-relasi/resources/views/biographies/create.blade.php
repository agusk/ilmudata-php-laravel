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
                                {{ __('Buat Biografi') }}
                            </h2>
                        </header>

                        <form method="POST" action="{{ route('biographies.store') }}"  class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <label for="content">Konten</label>
                                <textarea class="mt-1 block w-full" id="content" name="content" rows="5"></textarea>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Simpan') }}</x-primary-button>                            
                            </div>
                            
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
