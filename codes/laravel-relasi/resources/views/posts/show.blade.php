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
                            {{ $post->title }}
                            </h2>
                            <p>{{ $post->content }}</p>
                        </header>

                        <h3>Komentar:</h3>
                        <div class="mb-4">
                        @foreach ($post->comments as $comment)
                            <div>{{ $comment->comment }}
                            <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                [<button type="submit" class="text-blue-600 hover:text-blue-800">X</button>]
                            </form>
                            </div>
                        @endforeach
                        </div>


                        {{-- Include the add comment form --}}
                        @include('comments.create')


                    </section>
                </div>
            </div>
        </div>
    </div>
</x-myapp-layout>
