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
        <h1>Create Post</h1>

        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="border border-gray-300 rounded-md p-2 w-full">
                @error("title")
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            {{-- Nambah Category --}}
            <div class="mb-4">
                <label for="title">Title</label>
                <select name="" id="" class="border border-gray-300 rounded-md p-2 w-full">
                    <option value="">pilih kategori</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="tags">Tags</label>
                <input  type="text" name="tags" id="tags" value="{{ old('tags') }}" class="border border-gray-300 rounded-md p-2 w-full">
            </div>

            <div class="mb-4">
                <label for="estimation_read_minutes">Estimation Read Minutes</label>
                <input value="{{ old('estimation_read_minutes') }}" type="number" name="estimation_read_minutes" id="estimation_read_minutes" class="border border-gray-300 rounded-md p-2 w-full">
                @error("estimation_read_minutes")
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="thumbnail_url">Thumbnail URL</label>
                <input type="text" name="thumbnail_url" id="thumbnail_url" class="border border-gray-300 rounded-md p-2 w-full">
                @error("thumbnail_url")
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="border border-gray-300 rounded-md p-2 w-full" rows="5">{{ old('body') }}</textarea>
                @error("body")
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create Post</button>

        </form>
    </div>
</body>
</html>
