<!DOCTYPE html>
<html lang="en" class="h-full bg-white text-gray-900">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vision Street Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', 'Segoe UI', 'Helvetica Neue', sans-serif;
    }
    .logo-accent {
      background: conic-gradient(from 180deg, #f44336, #ff9800, #4caf50, #2196f3, #9c27b0, #f44336);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body class="h-full">

  <!-- Top Navbar -->
  <header class="fixed top-0 left-0 w-full h-16 bg-white shadow z-40 flex items-center justify-between px-6 border-b">
    <div class="flex items-center space-x-2">
      <img src="/path/to/logo.png" alt="Vision Street" class="h-8 w-auto" />
      <span class="font-extrabold text-lg tracking-tight logo-accent">VISION STREET</span>
    </div>
    <div class="text-sm text-gray-600">Welcome back, Agent</div>
  </header>

  <!-- Sidebar -->
  <aside class="fixed top-16 left-0 w-52 h-[calc(100vh-4rem)] bg-white border-r z-30 flex flex-col py-6 px-3 text-sm space-y-2 shadow">
    <nav class="flex flex-col space-y-1">
      <a href="#" class="px-3 py-2 rounded hover:bg-gray-100 text-blue-600 font-semibold">Add Lead</a>
      <a href="#" class="px-3 py-2 rounded hover:bg-gray-100 text-green-600 font-semibold">Add Client</a>
      <a href="#" class="px-3 py-2 rounded hover:bg-gray-100 text-pink-600 font-semibold">Add Project</a>
      <hr class="my-2">
      <a href="#" class="px-3 py-2 rounded hover:bg-gray-100 text-gray-800">Clients</a>
      <a href="#" class="px-3 py-2 rounded hover:bg-gray-100 text-gray-800">Tools</a>
      <a href="#" class="px-3 py-2 rounded hover:bg-gray-100 text-gray-800">Projects</a>
      <a href="#" class="px-3 py-2 rounded hover:bg-gray-100 text-yellow-600 font-semibold">SEO</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="ml-52 mt-16 p-8 bg-white text-gray-800 min-h-[calc(100vh-4rem)]">
    <h1 class="text-3xl font-bold tracking-tight mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="rounded-xl p-5 border shadow bg-gradient-to-br from-blue-100 via-blue-50 to-white">
        <h2 class="text-lg font-semibold mb-2 text-blue-800">Leads</h2>
        <p class="text-4xl font-bold text-blue-700">42</p>
      </div>
      <!-- Card 2 -->
      <div class="rounded-xl p-5 border shadow bg-gradient-to-br from-green-100 via-green-50 to-white">
        <h2 class="text-lg font-semibold mb-2 text-green-800">Clients</h2>
        <p class="text-4xl font-bold text-green-700">15</p>
      </div>
      <!-- Card 3 -->
      <div class="rounded-xl p-5 border shadow bg-gradient-to-br from-pink-100 via-pink-50 to-white">
        <h2 class="text-lg font-semibold mb-2 text-pink-800">Projects</h2>
        <p class="text-4xl font-bold text-pink-700">8</p>
      </div>
    </div>

    <section class="mt-10">
      <h2 class="text-xl font-semibold mb-4 text-gray-900">Recent Activity</h2>
      <ul class="space-y-2">
        <li class="border rounded-lg px-4 py-3 text-sm bg-gray-50">✔️ New lead added: <strong class="text-blue-600">John Doe</strong></li>
        <li class="border rounded-lg px-4 py-3 text-sm bg-gray-50">🚀 SEO audit complete for <strong class="text-yellow-600">VisionApp</strong></li>
        <li class="border rounded-lg px-4 py-3 text-sm bg-gray-50">🛠️ Project <strong class="text-pink-600">PixelRush</strong> initialized</li>
      </ul>
    </section>
  </main>

</body>
</html>
