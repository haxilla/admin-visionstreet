<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vision Street Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', 'Segoe UI', 'Helvetica Neue', sans-serif;
    }
    .accent-bar {
      background: linear-gradient(to bottom, #4caf50, #2196f3, #f44336, #ff9800, #9c27b0);
      width: 4px;
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Top Header -->
  <header class="fixed top-0 left-0 w-full h-12 backdrop-blur-sm bg-white/80 border-b border-gray-200 flex justify-between items-center px-6 z-50">
    <div class="flex items-center space-x-3">
      <img src="/path/to/logo.png" alt="Vision Street" class="h-7" />
      <span class="text-xl font-black tracking-tight">VISION STREET</span>
    </div>
    <div class="flex space-x-4 items-center text-gray-500 text-sm">
      <button class="hover:text-blue-600 transition">🔔</button>
      <button class="hover:text-blue-600 transition">👤</button>
    </div>
  </header>

  <!-- Sidebar -->
  <aside class="fixed top-12 left-0 w-16 h-[calc(100vh-3rem)] bg-white border-r z-40 shadow-sm flex flex-col items-center pt-6 space-y-6">
    <div class="accent-bar absolute left-0 top-0 h-full rounded"></div>
    <a href="#" title="Add Lead" class="hover:scale-110 transition">
      <div class="w-5 h-5 bg-blue-500 rounded-sm"></div>
    </a>
    <a href="#" title="Add Client" class="hover:scale-110 transition">
      <div class="w-5 h-5 bg-green-500 rounded-sm"></div>
    </a>
    <a href="#" title="Add Project" class="hover:scale-110 transition">
      <div class="w-5 h-5 bg-pink-500 rounded-sm"></div>
    </a>
    <a href="#" title="Clients" class="hover:scale-110 transition">
      <div class="w-5 h-5 bg-gray-800 rounded-sm"></div>
    </a>
    <a href="#" title="Tools" class="hover:scale-110 transition">
      <div class="w-5 h-5 bg-gray-500 rounded-sm"></div>
    </a>
    <a href="#" title="Projects" class="hover:scale-110 transition">
      <div class="w-5 h-5 bg-indigo-500 rounded-sm"></div>
    </a>
    <a href="#" title="SEO" class="hover:scale-110 transition">
      <div class="w-5 h-5 bg-yellow-500 rounded-sm"></div>
    </a>
  </aside>

  <!-- Main Content -->
  <main class="ml-16 mt-12 px-10 py-8 relative">
    <!-- Hero -->
    <div class="mb-8">
      <h1 class="text-4xl font-black tracking-tight">Welcome, Visionary</h1>
      <p class="text-sm text-gray-500 mt-1">Here’s what’s new this week.</p>
    </div>

    <!-- Asymmetric Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="relative p-6 border rounded-xl shadow bg-white">
        <div class="absolute -top-2 -left-2 w-3 h-3 bg-blue-500 rounded-sm"></div>
        <h2 class="text-sm uppercase text-gray-500">Leads</h2>
        <p class="text-4xl font-black text-blue-700 mt-1">42</p>
      </div>
      <div class="relative p-6 border rounded-xl shadow bg-white -mt-4">
        <div class="absolute -top-2 -left-2 w-3 h-3 bg-green-500 rounded-sm"></div>
        <h2 class="text-sm uppercase text-gray-500">Clients</h2>
        <p class="text-4xl font-black text-green-700 mt-1">15</p>
      </div>
      <div class="relative p-6 border rounded-xl shadow bg-white rotate-1">
        <div class="absolute -top-2 -left-2 w-3 h-3 bg-pink-500 rounded-sm"></div>
        <h2 class="text-sm uppercase text-gray-500">Projects</h2>
        <p class="text-4xl font-black text-pink-700 mt-1">8</p>
      </div>
    </div>

    <!-- Activity Feed -->
    <section class="mt-10 max-w-2xl">
      <h2 class="text-xl font-bold mb-4">Recent Activity</h2>
      <ul class="space-y-3">
        <li class="flex items-start space-x-3">
          <div class="w-2 h-full bg-blue-500 rounded"></div>
          <p>Added new lead: <span class="font-semibold text-blue-600">John Doe</span></p>
        </li>
        <li class="flex items-start space-x-3">
          <div class="w-2 h-full bg-yellow-500 rounded"></div>
          <p>Updated SEO tags for <span class="font-semibold text-yellow-600">VisionApp</span></p>
        </li>
        <li class="flex items-start space-x-3">
          <div class="w-2 h-full bg-pink-500 rounded"></div>
          <p>Launched new project: <span class="font-semibold text-pink-600">PixelRush</span></p>
        </li>
      </ul>
    </section>
  </main>

</body>
</html>
