@include('admin.header.doctype')

<!DOCTYPE html>
<html lang="en" class="bg-black text-white h-full">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vision Street Admin</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Artistic Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&family=Orbitron:wght@500..900&display=swap" rel="stylesheet" />

    <style>
      body {
        background-image: url('/images/vision-street-admin-black-1.png');
        background-size: cover;
        background-position: center;
        font-family: 'Unica One', 'Orbitron', sans-serif;
      }
    </style>
  </head>

  <body class="h-full w-full flex items-center justify-center px-4">
    <div class="bg-black/70 backdrop-blur-md border border-white/20 p-8 md:p-10 rounded-md w-full max-w-sm shadow-2xl">
      <h1 class="text-center text-white text-sm tracking-widest mb-6 border-b border-white/20 pb-2">
        ADMIN ACCESS
      </h1>

      <form method="POST" action="/admin/login" class="space-y-5">
        <div>
          <label for="username" class="text-xs text-white/70 uppercase">Username</label>
          <input type="text" id="username" name="username"
            class="w-full mt-1 px-3 py-2 bg-black/80 text-white border border-white/30 rounded-sm outline-none focus:ring-2 focus:ring-white transition" required />
        </div>

        <div>
          <label for="password" class="text-xs text-white/70 uppercase">Password</label>
          <input type="password" id="password" name="password"
            class="w-full mt-1 px-3 py-2 bg-black/80 text-white border border-white/30 rounded-sm outline-none focus:ring-2 focus:ring-white transition" required />
        </div>

        <button type="submit"
          class="w-full mt-4 text-center py-2 tracking-widest text-sm uppercase font-bold bg-gradient-to-r from-white to-gray-200 text-black hover:from-gray-100 hover:to-white transition border border-white/30 rounded-sm">
          Enter
        </button>
      </form>

      <!-- Disclaimer at bottom -->
      <p class="mt-6 text-[0.65rem] text-center text-white/40 border-t border-white/10 pt-4">
        🔐 Authorized personnel only. This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
      </p>
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