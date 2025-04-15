@include('member.header.doctype')
<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vision Street – Member Login</title>

    <!-- Tailwind CSS v4 -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Clean modern font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <style>
      body {
        background-image: url('/images/vision-street-member-login-1.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Work Sans', sans-serif;
      }
    </style>
  </head>

  <body class="h-full flex items-center justify-center px-4">
    <div class="bg-white/80 backdrop-blur-lg shadow-xl border border-white/30 w-full max-w-md rounded-xl p-8 md:p-10">
      <h1 class="text-center text-xl font-semibold text-gray-800 tracking-tight mb-6">
        Member Access
      </h1>

      <form action="/member/login" method="POST" class="space-y-5">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            required
            class="mt-1 w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            required
            class="mt-1 w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          />
        </div>

        <button
          type="submit"
          class="w-full mt-4 bg-indigo-500 text-white font-semibold tracking-wide py-2 rounded-md hover:bg-indigo-600 transition"
        >
          Sign In
        </button>
      </form>

      <p class="mt-6 text-xs text-center text-gray-500">
        For authorized members only. Secure connection encrypted.
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
    @include('member.footer.main')
</body>
</html>