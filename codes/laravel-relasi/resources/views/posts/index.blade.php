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
                        <header class="mb-4">
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Kumpulan Post') }}
                            </h2>
                        </header>
                        <div>
                            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buat Post baru</a>
                        </div>
                        @foreach ($posts as $post)
                            <div class="mt-6 bg-white shadow-sm rounded-lg">
                                <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                                <p class="text-gray-700">{{ $post->content }}</p>
                                <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:text-blue-800">View Post</a> |
                                <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:text-blue-800">Edit Post</a> |
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-blue-600 hover:text-blue-800">Hapus</button>
                                </form>
                            </div>
                        @endforeach


                    </section>
                </div>
            </div>
        </div>
    </div>
</x-myapp-layout>
