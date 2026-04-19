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
        <h1>Welcome to Blog System</h1>

        <div class="flex flex-col gap-4">
            @foreach ($posts as $post)
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <img class="h-40 w-full object-cover rounded-lg" src="https://hecolab.id/_next/image?url=https%3A%2F%2Fadmin.hecolab.id%2Fuploads%2Fimage_f0a9888b3c.webp&w=1080&q=75" alt="">
                <h2 class="font-bold text-gray-800">{{ $post->title }}</h2>
                <p>
                    {{ substr($post->body, 0, 100) }}
                    @if(strlen($post->body) > 100)
                    ...
                    @endif
                </p>

                <small>{{ $post->estimation_read_minutes}} min</small>
            </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>
