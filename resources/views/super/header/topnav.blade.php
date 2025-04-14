<nav class="fixed top-0 left-0 w-full h-20 z-50 flex items-center justify-between px-0">

    {{-- Logo with no padding and full height --}}
    <div class="flex items-center px-6 py-2 h-full">
        <a href="/super/dashboard"
           class="group flex items-center gap-2 text-2xl uppercase font-russo text-sky-300 tracking-wide relative select-none">
            <svg class="w-5 h-5 text-sky-300 group-hover:text-white transition duration-150" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                 viewBox="0 0 24 24">
                <path d="M13 2L3 14h7v8l11-12h-8z"/>
            </svg>
            Vision Street
        </a>
    </div>


    {{-- Nav links (push them away from logo) --}}
    <div class="flex items-center gap-6 pr-6 text-sm uppercase tracking-wider">
        <a href="/super/dashboard"
           class="text-sky-200 hover:text-white transition duration-150">
            Dashboard
        </a>

        <a href="/super/settings"
           class="text-sky-200 hover:text-white transition duration-150">
            Settings
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="text-red-400 hover:text-white transition duration-150 bg-transparent border-none p-0 cursor-pointer">
                Logout
            </button>
        </form>
    </div>


</nav>

