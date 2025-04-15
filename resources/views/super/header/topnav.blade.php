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
    <div class="flex items-center gap-6 pr-6 text-sm uppercase tracking-wider font-russo">
        <a href="/super/dashboard"
           class="text-sky-100 hover:text-white">
            Dashboard
        </a>

        <div x-data="{ open: false }" class="relative">
          <button
            @click="open = !open"
            @click.away="open = false"
            class="text-sky-400 hover:text-white transition duration-200 focus:outline-none"
            aria-label="Settings"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M12 15.5A3.5 3.5 0 1 0 12 8a3.5 3.5 0 0 0 0 7Zm9.43-3.5c.04.49.07.99.07 1.5s-.03 1.01-.07 1.5l2.11 1.65c.19.15.24.42.1.64l-2 3.46a.5.5 0 0 1-.61.21l-2.49-1a9.48 9.48 0 0 1-2.6 1.5l-.38 2.65a.5.5 0 0 1-.5.42h-4a.5.5 0 0 1-.5-.42l-.38-2.65a9.48 9.48 0 0 1-2.6-1.5l-2.49 1a.5.5 0 0 1-.61-.21l-2-3.46a.5.5 0 0 1 .1-.64l2.11-1.65A9.83 9.83 0 0 1 2.5 12c0-.51.03-1.01.07-1.5L.46 8.85a.5.5 0 0 1-.1-.64l2-3.46a.5.5 0 0 1 .61-.21l2.49 1a9.48 9.48 0 0 1 2.6-1.5l.38-2.65a.5.5 0 0 1 .5-.42h4a.5.5 0 0 1 .5.42l.38 2.65a9.48 9.48 0 0 1 2.6 1.5l2.49-1a.5.5 0 0 1 .61.21l2 3.46a.5.5 0 0 1-.1.64l-2.11 1.65Z" />
            </svg>
          </button>

          <div
            x-show="open"
            x-transition
            class="absolute right-0 mt-2 w-40 bg-black border border-sky-600 shadow-lg rounded-lg py-2 z-50 text-sm"
          >
            <a href="/profile" class="block px-4 py-2 hover:bg-sky-800 text-sky-300 hover:text-white transition">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button
                type="submit"
                class="w-full text-left px-4 py-2 hover:bg-red-600 hover:text-white text-red-400 transition"
              >
                Logout
              </button>
            </form>
          </div>
        </div>
    </div>


</nav>

