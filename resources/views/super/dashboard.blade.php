<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Collapsible Sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .transition-width {
      transition: width 0.3s ease;
    }
  </style>
</head>
<body class="flex h-screen bg-gray-100">

  <!-- Sidebar -->
  <div id="sidebar" class="bg-gray-900 text-white transition-width duration-300 w-64 flex flex-col">
    
    <!-- Logo/Header -->
    <div class="flex items-center justify-between p-4 border-b border-gray-700">
      <div id="logo-full" class="text-xl font-bold">VisionStreet</div>
      <div id="logo-mini" class="hidden text-2xl font-bold">V</div>
      <button onclick="toggleSidebar()" class="text-gray-400 hover:text-white">
        <svg id="collapse-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-0 transition-transform" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6 4a1 1 0 011.707-.707l6 6a1 1 0 010 1.414l-6 6A1 1 0 016 15.586L11.586 10 6 4.414A1 1 0 016 4z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>

    <!-- Sidebar Content -->
    <nav class="flex-1 p-4 space-y-4">
      <a href="#" class="block hover:bg-gray-800 rounded px-2 py-1">Dashboard</a>
      <a href="#" class="block hover:bg-gray-800 rounded px-2 py-1">Tools</a>
      <a href="#" class="block hover:bg-gray-800 rounded px-2 py-1">Settings</a>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-10">
    <h1 class="text-3xl font-bold">Main Content Here</h1>
  </div>

  <!-- JS Toggle Logic -->
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const logoFull = document.getElementById('logo-full');
      const logoMini = document.getElementById('logo-mini');
      const icon = document.getElementById('collapse-icon');

      if (sidebar.classList.contains('w-64')) {
        // Collapse
        sidebar.classList.remove('w-64');
        sidebar.classList.add('w-16');
        logoFull.classList.add('hidden');
        logoMini.classList.remove('hidden');
        icon.classList.add('rotate-180');
      } else {
        // Expand
        sidebar.classList.remove('w-16');
        sidebar.classList.add('w-64');
        logoFull.classList.remove('hidden');
        logoMini.classList.add('hidden');
        icon.classList.remove('rotate-180');
      }
    }
  </script>

</body>
</html>
