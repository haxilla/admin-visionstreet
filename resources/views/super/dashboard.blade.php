<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vision Street Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            sidebar: '#234567',
          },
        },
      },
    }
  </script>
</head>
<body class="h-full font-sans">

  <!-- Sidebar -->
  <div id="sidebar" class="fixed top-0 left-0 h-full w-60 bg-sidebar text-white transition-all duration-300 ease-in-out z-50">
    <!-- Logo & Burger -->
    <div class="flex items-center justify-between px-4 py-4 border-b border-white/10">
      <span class="font-black text-xl tracking-wide whitespace-nowrap">VISION<span class="font-light">STREET</span></span>
      <button id="toggleSidebar" class="text-white hover:text-blue-300 focus:outline-none">
        ☰
      </button>
    </div>

    <!-- Menu -->
    <nav class="mt-6 flex flex-col space-y-2 px-4 text-sm">
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
        <span>📋</span><span class="label">Pipeline</span>
      </a>
      <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
        <span>🛠️</span><span class="label">Tasks</span>
      </a>
      <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
        <span>🖼️</span><span class="label">Gallery</span>
      </a>
      <a href="#" class="flex items-center space-x-3 hover:text-blue-300">
        <span>🔧</span><span class="label">Dev</span>
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
  </div>

  <!-- Main Content -->
  <main id="mainContent" class="ml-60 transition-all duration-300 ease-in-out p-8">
    <h1 class="text-3xl font-bold mb-4">Dashboard Overview</h1>
    <p class="text-gray-600">Content area adjusts based on sidebar state. Feel free to build out whatever you want here.</p>
  </main>

  <script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    let collapsed = false;

    toggleBtn.addEventListener('click', () => {
      collapsed = !collapsed;
      sidebar.style.width = collapsed ? '60px' : '240px';
      mainContent.style.marginLeft = collapsed ? '60px' : '240px';
      document.querySelectorAll('.label').forEach(el => {
        el.style.display = collapsed ? 'none' : 'inline';
      });
    });
  </script>

</body>
</html>
