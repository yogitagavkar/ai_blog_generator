<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Blog Generator</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4">

            <div class="flex items-center justify-between">

                <div>
                    <h1 class="text-2xl font-bold text-gray-800">
                        AI Blog Generator
                    </h1>
                </div>

                <div class="flex items-center gap-4">

                    <div class="text-sm text-gray-600">
                        Welcome,
                        <span class="font-semibold text-gray-900">
                            {{ auth()->user()->name }}
                        </span>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg text-sm">
                            Logout
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </nav>

    <!-- Main -->
    <main class="py-10">
        @yield('content')
    </main>

</body>

</html>