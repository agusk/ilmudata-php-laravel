<form action="{{ route('comments.store', $post) }}" method="POST" class="mt-6 space-y-6">
    @csrf
    <div>
        <label for="comment">Tulis komen:</label>
        <textarea class="mt-1 block w-full" id="comment" name="comment" rows="2" required></textarea>
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah komen</button>
    <a href="{{ route('posts.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kembali</a>
</form>
