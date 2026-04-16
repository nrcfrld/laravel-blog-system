<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="px-4 bg-white w-1/2">
        <h1>Login</h1>

        {{-- Bikin Form login --}}
        <form method="POST" action="">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
