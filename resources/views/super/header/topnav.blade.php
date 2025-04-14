<nav class="fixed top-0 left-0 w-full h-16 bg-white/5 backdrop-blur-lg border-b border-white/10 shadow-md z-50 flex items-center justify-between px-6">
<a href="/super/dashboard" class="flex items-center gap-3 group pl-1 pr-4 py-1 rounded-md bg-gradient-to-br from-yellow-500 to-orange-600 shadow-[0_0_25px_rgba(255,170,0,0.4)] hover:shadow-[0_0_35px_rgba(255,170,0,0.7)] transition-all duration-300 scale-95 hover:scale-100">
    {{-- Left neon block mark --}}
    <div class="w-6 h-6 bg-yellow-300 rounded-sm shadow-[0_0_10px_rgba(255,200,0,0.9)]"></div>

    {{-- Vision Street text --}}
    <span class="font-russo text-xl uppercase tracking-[0.1em] text-black drop-shadow-[0_1px_1px_rgba(255,255,255,0.3)]">
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