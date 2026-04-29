<!DOCTYPE html>
<html>
<head>
    <title>AI Blog Generator</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">
            AI Blog Generator
        </h1>

        <div>
            {{ auth()->user()->name }}
        </div>
    </div>
</nav>

<div class="container mx-auto py-8">
    @yield('content')
</div>

</body>
</html>