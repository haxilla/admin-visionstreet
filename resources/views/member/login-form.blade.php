@include('member.header.doctype')
<!DOCTYPE html>
<html lang="en" class="h-full bg-black text-white">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vision Street Login</title>

    <!-- Optional font (Sleek, confident, futuristic) -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet" />

    <style>
      body {
        background-image: url('/images/vision-street-member-login-1.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Rajdhani', sans-serif;
      }
    </style>
  </head>

  <body class="h-full flex items-center justify-center px-6">
    <div class="w-full max-w-md bg-black/70 backdrop-blur-sm border border-white/20 shadow-2xl rounded-md p-8 md:p-10">
      <h1 class="text-center text-2xl font-bold tracking-wide text-amber-400 mb-6">Member Login</h1>

      <form action="/member/login" method="POST" class="space-y-5">
        <div>
          <label for="email" class="block text-sm uppercase tracking-wider text-white/70">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            required
            class="mt-1 w-full bg-black/60 text-white px-3 py-2 border border-white/30 rounded-md focus:ring-2 focus:ring-amber-400 outline-none transition"
          />
        </div>

        <div>
          <label for="password" class="block text-sm uppercase tracking-wider text-white/70">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            required
            class="mt-1 w-full bg-black/60 text-white px-3 py-2 border border-white/30 rounded-md focus:ring-2 focus:ring-amber-400 outline-none transition"
          />
        </div>

        <button
          type="submit"
          class="w-full mt-4 bg-gradient-to-r from-amber-500 to-yellow-400 hover:from-amber-400 hover:to-yellow-300 text-black text-sm font-bold tracking-widest uppercase py-2 rounded-md shadow-md transition"
        >
          Sign In
        </button>
      </form>

      <p class="mt-6 text-xs text-center text-white/40 border-t border-white/10 pt-4">
        🔒 Secure access only. Unauthorized use is prohibited.
      </p>
    </div>
  </body>
</html>


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