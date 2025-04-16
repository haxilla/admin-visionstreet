<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vision Street Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .collapsed .label {
      display: none;
    }
    .collapsed .sidebar {
      width: 64px;
    }
    .collapsed .main {
      margin-left: 64px;
    }
  </style>
</head>
<body class="h-full bg-gray-100 text-gray-800">

  <!-- Sidebar -->
  <div id="layout" class="flex h-screen transition-all duration-300">
    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar w-60 bg-blue-900 text-white flex flex-col transition-all duration-300 fixed top-0 left-0 h-full z-40">
      <!-- Top Logo Row -->
      <div class="flex items-center justify-between px-4 py-4 border-b border-blue-800">
        <span class="font-bold text-lg tracking-wide label">VISION STREET</span>
        <button id="toggleSidebar" class="text-white hover:text-blue-300">
          ☰
        </button>
      </div>
      <!-- Nav Items -->
      <nav class="mt-4 flex-1 flex flex-col space-y-3 px-4 text-sm">
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>👑</span><span class="label">Users</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>😊</span><span class="label">Clients</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>💰</span><span class="label">Leads</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>📊</span><span class="label">Projects</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>📈</span><span class="label">SEO</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>🧪</span><span class="label">Version</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>🔒</span><span class="label">Admin</span>
        </a>
        <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
          <span>🎰</span><span class="label">Baccarat</span>
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <div id="main" class="main flex-1 ml-60 transition-all duration-300 p-8">
      <h1 class="text-3xl font-bold mb-4">Dashboard Overview</h1>
      <p>This main content area adjusts when sidebar collapses.</p>
    </div>
  </div>

  <script>
    const toggleButton = document.getElementById('toggleSidebar');
    const layout = document.getElementById('layout');

    toggleButton.addEventListener('click', () => {
      layout.classList.toggle('collapsed');
    });
  </script>

</body>
</html>
