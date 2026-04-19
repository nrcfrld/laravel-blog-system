<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog System with Laravel</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="px-4">
        <h1 class="text-2xl font-bold">Daftar Post</h1>

        @session('success')
            <div class="bg-green-500 text-white px-4 py-2 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endsession

        <a href="/admin/create-post" class="bg-blue-400 px-3 py-2 text-white">Tambah</a>

        <table class="mt-4 w-full border border-gray-300">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th>Author ID</th>
                    <th>Estimation Read Minutes</th>
                    <th>Thumbnail URL</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                {{-- Loop setiap data yang sudah kita ambil --}}
                @foreach($posts as $post)
                    <tr class="border-t border-gray-300">
                        <td class="p-2">{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->tags }}</td>
                        <td>{{ $post->author_id }}</td>
                        <td>{{ $post->estimation_read_minutes }}</td>
                        <td>{{ $post->thumbnail_url }}</td>
                        <td class="flex gap-2 justify-center">
                            <a class="bg-yellow-200 hover:bg-yellow-300 text-yellow-900 px-3 py-2 rounded-lg" href="/admin/posts/{{ $post->id }}">Edit</a>
                            <form action="/admin/posts/{{ $post->id }}/delete" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapus post ini?')">
                                @csrf
                                @method("delete")
                                <button type="submit" class="bg-red-200 hover:bg-red-300 text-red-900 px-3 py-2 rounded-lg hover:cursor-pointer">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
