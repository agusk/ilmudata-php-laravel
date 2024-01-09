<x-myapp-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demo One-to-Many') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                            {{ isset($post) ? 'Edit' : 'Buat' }} Post
                            </h2>
                        </header>

                        <form method="POST" action="{{ isset($post) ? route('posts.update', $post) : route('posts.store') }}"  class="mt-6 space-y-6">
                            @csrf
                            @if(isset($post))
                                @method('PUT')
                            @endif

                            <div>
                                <label for="title">Judul:</label>
                                <input type="text" class="mt-1 block w-full" id="title" name="title" value="{{ $post->title ?? '' }}" required>
                            </div>

                            <div>
                                <label for="content">Konten:</label>
                                <textarea class="mt-1 block w-full" id="content" name="content" required>{{ $post->content ?? '' }}</textarea>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Simpan') }}</x-primary-button>
                                <a href="{{ route('posts.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
                            </div>

                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-myapp-layout>
