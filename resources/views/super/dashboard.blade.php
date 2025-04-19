@include('super.header.doctype')
<body class="bg-white h-full font-sans text-gray-800">

<!-- Vue or Alpine.js toggle logic — this example uses Alpine.js -->
<div x-data="{ collapsed: false }" class="flex h-screen overflow-hidden">

  <!-- Sidebar -->
  <aside 
    :class="collapsed ? 'w-20' : 'w-64'" 
    class="transition-all duration-300 bg-sidebar text-white flex flex-col fixed h-full z-40"
  >
    <!-- Logo -->
    <div class="px-4 py-5 border-b border-white/10 text-center">
      <template x-if="!collapsed">
        <img src="/images/vision-street-square-logo-pixels.png" alt="Vision Street Logo" class="h-12 mx-auto">
      </template>
      <template x-if="collapsed">
        <img src="/images/vision-V-icon.png" alt="V Logo" class="h-8 mx-auto">
      </template>
    </div>

    <!-- Nav -->
    <nav class="flex-1 mt-6 space-y-1 text-sm px-2" :class="collapsed ? 'px-1' : 'px-4'">
      <template x-for="item in [
        { label: 'Users', icon: 'user' },
        { label: 'Clients', icon: 'check' },
        { label: 'Leads', icon: 'lock' },
        { label: 'Projects', icon: 'clipboard' },
        { label: 'SEO', icon: 'bar' },
        { label: 'Pipeline', icon: 'menu' },
        { label: 'Tasks', icon: 'clock' }
      ]" :key="item.label">
        <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-white/10"
           :class="{ 'justify-center': collapsed }">
          <template x-if="item.icon === 'user'">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M16 21v-2a4 4 0
