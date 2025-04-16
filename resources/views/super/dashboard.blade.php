@include('super.header.doctype')
@include('super.header.topnav')
<style>
body {
    font-family: 'Inter', 'Segoe UI', 'Helvetica Neue', sans-serif;}
</style>
<body class="h-full">

  <!-- Top Navbar -->
  <header class="fixed top-0 left-0 w-full h-14 bg-gradient-to-r from-blue-700 via-blue-800 to-blue-900 shadow z-40 flex items-center justify-between px-6">
    <div class="text-lg font-bold tracking-wide">VISION STREET</div>
    <div class="text-sm text-gray-300">Welcome back, Agent</div>
  </header>

  <!-- Sidebar -->
  <aside class="fixed top-14 left-0 w-56 h-[calc(100vh-3.5rem)] bg-blue-950 border-r border-blue-800 z-30 flex flex-col py-6 px-4 space-y-4 text-sm">
    <nav class="flex flex-col space-y-2">
      <a href="#" class="text-blue-100 hover:text-white hover:bg-blue-800 px-3 py-2 rounded transition">Add Lead</a>
      <a href="#" class="text-blue-100 hover:text-white hover:bg-blue-800 px-3 py-2 rounded transition">Add Client</a>
      <a href="#" class="text-blue-100 hover:text-white hover:bg-blue-800 px-3 py-2 rounded transition">Add Project</a>
      <hr class="border-blue-700 my-2">
      <a href="#" class="text-blue-100 hover:text-white hover:bg-blue-800 px-3 py-2 rounded transition">Clients</a>
      <a href="#" class="text-blue-100 hover:text-white hover:bg-blue-800 px-3 py-2 rounded transition">Tools</a>
      <a href="#" class="text-blue-100 hover:text-white hover:bg-blue-800 px-3 py-2 rounded transition">Projects</a>
      <a href="#" class="text-blue-100 hover:text-white hover:bg-blue-800 px-3 py-2 rounded transition">SEO</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="ml-56 mt-14 p-6 bg-gray-950 text-gray-100 min-h-[calc(100vh-3.5rem)] overflow-y-auto">
    <h1 class="text-2xl font-semibold mb-4">Dashboard Overview</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-blue-900/60 rounded-xl p-5 shadow-lg backdrop-blur border border-blue-800">
        <h2 class="text-lg font-bold mb-1">Leads This Month</h2>
        <p class="text-3xl font-semibold text-blue-300">42</p>
      </div>
      <!-- Card 2 -->
      <div class="bg-blue-900/60 rounded-xl p-5 shadow-lg backdrop-blur border border-blue-800">
        <h2 class="text-lg font-bold mb-1">Active Clients</h2>
        <p class="text-3xl font-semibold text-blue-300">15</p>
      </div>
      <!-- Card 3 -->
      <div class="bg-blue-900/60 rounded-xl p-5 shadow-lg backdrop-blur border border-blue-800">
        <h2 class="text-lg font-bold mb-1">Projects In Progress</h2>
        <p class="text-3xl font-semibold text-blue-300">8</p>
      </div>
    </div>

    <section class="mt-10">
      <h2 class="text-xl font-semibold mb-3">Recent Activity</h2>
      <ul class="space-y-2">
        <li class="bg-gray-800/50 border border-gray-700 rounded p-3">✔️ Added new lead: <span class="font-medium text-blue-300">John Doe</span></li>
        <li class="bg-gray-800/50 border border-gray-700 rounded p-3">✔️ Updated SEO report for <span class="font-medium text-blue-300">VisionApp</span></li>
        <li class="bg-gray-800/50 border border-gray-700 rounded p-3">✔️ Added new project: <span class="font-medium text-blue-300">PixelRush</span></li>
      </ul>
    </section>
  </main>

</body>
</html>