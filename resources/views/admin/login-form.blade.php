@include('admin.header.doctype')
<style>
  body {
    background-image: url('/images/vision-street-admin-black-1.png');
    background-size: cover;
    background-position: center;
  }
</style>

<body class="h-full w-full flex flex-col items-center justify-center px-4 relative font-orbitron">
    <!-- Login Panel -->
    <div class="bg-black/70 backdrop-blur-md border border-white/20 p-8 md:p-10 rounded-md w-full max-w-sm shadow-2xl z-10 mt-10">
      <h1 class="text-center text-white text-4xl tracking-widest mb-6 border-b border-white/20 pb-2 uppercase">
        Vision Street
      </h1>

      <form method="POST" action="{{ route('login.submit') }}" class="space-y-5">
        @csrf
        <div>
          <label for="username" class="text-xs text-white/60 uppercase">Username</label>
          <input type="text" id="username" name="username"
                 class="w-full mt-1 px-3 py-2 bg-black/80 text-white border border-white/30 rounded-sm outline-none focus:ring-1 focus:ring-white transition" required />
        </div>

        <div>
          <label for="password" class="text-xs text-white/60 uppercase">Password</label>
          <input type="password" id="password" name="password"
                 class="w-full mt-1 px-3 py-2 bg-black/80 text-white border border-white/30 rounded-sm outline-none focus:ring-1 focus:ring-white transition" required />
        </div>

        <button type="submit"
                class="w-full mt-4 text-center py-2 tracking-widest text-sm uppercase font-bold text-white/60 hover:from-gray-100 hover:to-white transition border border-white/30 rounded-sm cursor-pointer">
          Enter
        </button>
      @if ($errors->any())
        <div class="mt-6 flex items-start rounded-md border-l-4 border-orange-400 bg-gradient-to-r from-red-600 to-pink-600 p-4 text-sm text-white shadow-lg">
            <svg class="h-5 w-5 mr-3 mt-0.5 flex-shrink-0 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01M4.93 4.93l14.14 14.14M12 2a10 10 0 100 20 10 10 0 000-20z"/>
            </svg>
            <ul class="list-disc space-y-1 pl-1">
                @foreach ($errors->all() as $error)
                    @if ($error) <li>{{ $error }}</li> @endif
                @endforeach
            </ul>
        </div>
      @endif
      </form>

      <p class="mt-6 text-[0.65rem] text-center text-white/40 border-t border-white/10 pt-4">
        🔐 Authorized personnel only.
      </p>
    </div>

    {{-- RECAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'admin_login'}).then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });
    </script>

    {{-- footer --}}
    @include('admin.footer.main')
</body>
</html>