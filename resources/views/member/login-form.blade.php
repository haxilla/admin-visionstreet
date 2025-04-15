@include('super.header.doctype')

<style>
    body {
        background-image: url('/images/admin_visionstreet_login.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .background-glow {
        backdrop-filter: blur(8px) saturate(160%);
        -webkit-backdrop-filter: blur(8px) saturate(160%);
        background-color: rgba(17, 25, 40, 0.65);
    }
</style>

<body class="h-screen w-screen flex flex-col justify-between text-white">

    {{-- Centered login container --}}
    <div class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-md mx-auto p-8 rounded-2xl background-glow shadow-2xl">
          <h1 class="text-4xl font-russo text-center mb-6 text-[#ffa600]">VISION STREET</h1>
            <form method="post" action="{{ route('login.submit') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold mb-2">Username</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-3 bg-white/10 text-white placeholder-white/40 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition"/>
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold mb-2">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-3 bg-white/10 text-white placeholder-white/40 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 transition"/>
                </div>

                <button type="submit"
                        class="w-full py-3 rounded-xl bg-gradient-to-r from-orange-500 to-pink-500 text-black font-bold text-lg hover:from-pink-500 hover:to-orange-400 transition-all shadow-lg hover:shadow-xl">
                    Log In
                </button>

                <input type="hidden" name="recaptcha_token" id="recaptchaToken">
            </form>

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
        </div>
    </div>

    {{-- RECAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'super_login'}).then(function (token) {
                document.getElementById('recaptchaToken').value = token;
            });
        });
    </script>

    {{-- footer --}}
    @include('super.footer.main')
</body>
</html>