<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="flex h-screen">
        @include('admin.layouts.sidebar')
        <main class="flex-1 p-8">
            <h2 class="text-3xl font-bold text-white mb-6">Edit Berita</h2>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="title" class="block text-gray-400 mb-2">Judul Berita</label>
                        <input type="text" name="title" id="title" class="w-full bg-gray-700 text-white rounded p-2" value="{{ $post->title }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-gray-400 mb-2">Isi Berita</label>
                        <textarea name="content" id="content" rows="10" class="w-full bg-gray-700 text-white rounded p-2" required>{{ $post->content }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-400 mb-2">Gambar (kosongkan jika tidak ingin ganti)</label>
                        <input type="file" name="image" id="image" class="w-full bg-gray-700 text-white rounded p-2">
                        @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="mt-4 h-20 w-auto rounded">
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="bg-yellow-400 text-gray-900 font-bold py-2 px-4 rounded-lg">Update</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>