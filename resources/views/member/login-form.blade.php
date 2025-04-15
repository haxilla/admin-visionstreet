@include('member.header.doctype')
<!DOCTYPE html>
<html lang="en" class="h-full bg-black text-white">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vision Street – Member Login</title>

    <!-- Tailwind CSS v4 -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Modern, bold font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet" />

    <style>
      body {
        background-image: url('/images/vision-street-member-login-1.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Inter', sans-serif;
      }
    </style>
  </head>

  <body class="h-full w-full flex flex-col items-center justify-center px-4 relative">

    <!-- Login Panel -->
    <main class="z-10 w-full max-w-md bg-white/90 text-black backdrop-blur-md border-2 border-black shadow-xl px-10 py-12 uppercase tracking-wide text-sm font-semibold">
      <h1 class="text-4xl text-center mb-8 text-black font-bold tracking-widest font-zendots">Vision Street</h1>

      <form action="/member/login" method="POST" class="space-y-6">
        <div>
          <label for="email" class="block text-xs mb-1 text-gray-800">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            class="w-full px-4 py-2 bg-white border-2 border-black text-black text-sm focus:outline-none focus:ring-2 focus:ring-black"
          />
        </div>

        <div>
          <label for="password" class="block text-xs mb-1 text-gray-800">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            required
            class="w-full px-4 py-2 bg-white border-2 border-black text-black text-sm focus:outline-none focus:ring-2 focus:ring-black"
          />
        </div>

        <button
          type="submit"
          class="w-full py-2 bg-black text-white font-bold tracking-wide hover:bg-neutral-800 transition uppercase"
        >
          Sign In
        </button>
      </form>
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