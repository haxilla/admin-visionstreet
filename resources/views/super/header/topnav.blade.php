<nav class="fixed top-0 left-0 w-full h-16 bg-white/5 backdrop-blur-lg border-b border-white/10 shadow-md z-50 flex items-center justify-between px-6">
    <a href="/super/dashboard" class="flex items-center space-x-3 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 7h18M3 12h18M3 17h18"/>
        </svg>

        <span class="font-russo text-lg text-[#ffa600] group-hover:text-yellow-300 transition tracking-wider">
            Vision Street
        </span>
    </a>

    <div class="flex items-center space-x-6">
        <a href="/super/dashboard" class="text-sm text-white/80 hover:text-white">Dashboard</a>
        <a href="/super/settings" class="text-sm text-white/80 hover:text-white">Settings</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="text-sm text-red-400 underline hover:text-red-300 bg-transparent border-none p-0 cursor-pointer">
                Logout
            </button>
        </form>
    </div>
</nav>