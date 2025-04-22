<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind CSS Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-center p-10">

    <h1 class="text-4xl font-bold text-blue-600 mb-4">Tailwind CSS is working 🎉</h1>

    <p class="text-lg text-gray-700">
        If you see this styled nicely, you're running Tailwind v4 with Laravel!
    </p>

    <div class="mt-6">
        <button class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg shadow">
            Test Button
        </button>
    </div>
    <div class="bg-sidebar text-white p-4 text-lg">
  TEST BLOCK: Should show dark background
</div>

</body>
</html>
