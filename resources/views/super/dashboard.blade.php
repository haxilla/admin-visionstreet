<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fixed Sidebar Test</title>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans h-screen overflow-hidden text-gray-800">

<div x-data="{ collapsed: false }" class="flex h-full">

  <!-- Sidebar -->
  <aside :class="collapsed ? 'w-20' : 'w-64'" class="bg-[#0A1B32] text-white transition-all duration-300 flex flex-col">
    <!-- Logo -->
    <div class="p-4 border-b border-white/10 flex justify-center">
      <template x-if="!collapsed">
        <img src="/images/vision-street-square-logo-pixels.png" class="h-10" alt="Logo">
      </template>
      <template x-if="collapsed">
        <img src="/images/vision-V-icon.png" class="h-8" alt="V">
      </template>
    </div>

    <!-- Menu -->
    <nav class="flex-1 mt-4 space-y-1">
      <a href="#" class="flex items-center px-4 py-2 hover:bg-white/10 rounded"
         :class="{ 'justify-center': collapsed, 'gap-3': !collapsed }">
        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <span x-show="!collapsed" class="transition-all duration-200">Users</span>
      </a>
      <!-- Add more items similarly -->
    </nav>
  </aside>

  <!-- Main Panel -->
  <div class="flex-1 flex flex-col">

    <!-- Top Bar -->
    <header class="h-16 flex items-center justify-between px-6 bg-white border-b border-gray-200">
      <button @click="collapsed = !collapsed" class="text-gray-600 hover:text-black">
        <!-- No x-show needed. Let it stay static -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <input type="text" placeholder="Search..."
             class="w-[60%] max-w-[700px] pl-5 py-2 text-base border border-gray-300 rounded-full shadow focus:ring-2 focus:ring-blue-400">

      <svg class="w-7 h-7 text-gray-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.591 1.062c1.527-.88 3.276.869 2.397 2.397a1.724 1.724 0 0 0 1.061 2.59c1.757.427 1.757 2.924 0 3.351a1.724 1.724 0 0 0-1.061 2.59c.879 1.528-.87 3.277-2.397 2.397a1.724 1.724 0 0 0-2.591 1.061c-.426 1.757-2.924 1.757-3.35 0a1.724 1.724 0 0 0-2.59-1.061c-1.528.88-3.277-.869-2.398-2.397a1.724 1.724 0 0 0-1.06-2.59c-1.757-.427-1.757-2.924 0-3.351a1.724 1.724 0 0 0 1.06-2.59c-.879-1.528.87-3.277 2.398-2.397a1.724 1.724 0 0 0 2.59-1.061z"/>
        <circle cx="12" cy="12" r="3" />
      </svg>
    </header>

    <!-- Content -->
    <main class="flex-1 p-10 overflow-auto bg-white">
      <h1 class="text-3xl font-bold mb-4">It works!</h1>
      <p>Collapse and expand using the button. Sidebar icons stay visible, labels toggle.</p>
    </main>

  </div>
</div>

</body>
</html>
