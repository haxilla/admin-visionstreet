@include('member.header.doctype')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vision Street Login</title>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .glow-logo {
      filter: drop-shadow(0 0 12px rgba(58, 187, 255, 0.25));
    }

    @keyframes shine {
      0% {
        background-position: -200%;
      }
      100% {
        background-position: 200%;
      }
    }

    .glow-button {
      background: linear-gradient(120deg, #1d71b8, #29a3ef, #1d71b8);
      background-size: 200% 200%;
      animation: shine 2.5s infinite linear;
    }
  </style>
</head>
<body class="min-h-screen bg-gray-900 relative flex flex-col">

  <!-- Background -->
  <div class="absolute inset-0 z-0">
    <img src="/images/vision-street-member-login-2.jpg" alt="Vision Street Background"
         class="w-full h-full object-cover object-center" />
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <!-- Main Content -->
  <main class="flex-1 flex items-center justify-center z-10 px-4">
    <div class="bg-[#0a3a60cc] border border-blue-900/40 backdrop-blur-lg shadow-xl rounded-xl max-w-md w-full px-8 py-10 md:p-12 text-white space-y-8">

      <!-- Logo -->
      <div class="flex justify-center">
        <img src="/images/vision-street-square-logo-pixels.png" alt="Vision Street Logo" class="w-40 glow-logo" />
      </div>

      <!-- Headline -->
      <div class="text-center">
        <p class="text-sm text-white/80">Sign in to your Vision Street account</p>
      </div>

      <!-- Form -->
      <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
        @csrf
        <div>
          <label for="email" class="block text-sm mb-1">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com"
            class="w-full px-4 py-2 rounded-md bg-white/10 text-white border border-white/30 placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div>
          <label for="password" class="block text-sm mb-1">Password</label>
          <input type="password" id="password" name="password" placeholder="••••••••"
            class="w-full px-4 py-2 rounded-md bg-white/10 text-white border border-white/30 placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="accent-blue-500" />
            <span>Remember me</span>
          </label>
          <a href="#" class="text-blue-300 hover:underline">Forgot password?</a>
        </div>

        <!-- Glow Button -->
        <button type="submit"
          class="w-full py-2 px-4 rounded-md text-white font-bold glow-button hover:scale-[1.015] transition-all duration-200 shadow-md">
          Sign In
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
  </main>

  <!-- Footer -->
  <footer class="z-10 text-xs text-center text-white/70 px-4 py-4">
    This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy" class="underline">Privacy Policy</a> and
    <a href="https://policies.google.com/terms" class="underline">Terms of Service</a> apply.
    <br />
    &copy; 2025 Vision Street. All rights reserved.
  </footer>

  <!-- Footer -->
  @include('member.footer.main')

  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
  <script>
    grecaptcha.ready(function () {
        grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'super_login'}).then(function (token) {
            document.getElementById('recaptchaToken').value = token;
        });
    });
  </script>
</body>
</html>
