@include('member.header.doctype')

<style>
  body {
    background-image: url('/images/vision-street-member-login-1.jpg');
    background-size: cover;
    background-position: center;
  }
</style>

<body class="h-full w-full flex flex-col items-center justify-center px-4 relative">

    <!-- Login Panel -->
    <main class="z-10 w-full max-w-md bg-white/90 text-black backdrop-blur-md border-2 border-black shadow-xl px-10 py-12 uppercase tracking-wide text-sm font-semibold">
<div class="max-w-md w-full px-6 py-10 rounded-[60px] backdrop-blur-md bg-white/20 border border-white/10 text-white shadow-xl transition-all duration-500">
  <h1 class="text-center text-2xl tracking-widest font-bold mb-8 text-white/90">VISION STREET</h1>

  <form method="POST" action="/login" class="space-y-5">
    <div>
      <label for="email" class="text-xs uppercase text-white/70">Email</label>
      <input type="email" id="email" name="email"
             class="w-full mt-1 px-4 py-2 rounded-full bg-white/10 text-white placeholder-white/60 border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
    </div>

    <div>
      <label for="password" class="text-xs uppercase text-white/70">Password</label>
      <input type="password" id="password" name="password"
             class="w-full mt-1 px-4 py-2 rounded-full bg-white/10 text-white placeholder-white/60 border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
    </div>

    <button type="submit"
            class="w-full py-2 mt-4 rounded-full bg-gradient-to-r from-yellow-400 via-orange-300 to-yellow-400 text-black font-semibold uppercase tracking-widest hover:from-yellow-300 hover:to-orange-400 transition">
      Sign In
    </button>
  </form>
</div>

      

    </main>

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
    @include('member.footer.main')
</body>
</html>