@include('member.header.doctype')
<body class="min-h-screen flex flex-col bg-gray-100">

  <!-- Page content (centered login box) -->
  <div class="flex-1 flex items-center justify-center">
    <div class="w-full max-w-5xl flex rounded-2xl overflow-hidden shadow-lg bg-white">

      <!-- Left Sidebar -->
      <div class="w-full md:w-1/2 bg-[#0A3A60] text-white p-8 flex flex-col justify-center space-y-6">
        <!-- Welcome Text -->
        <div>
          <h2 class="text-xl font-semibold">Welcome Back</h2>
          <p class="text-sm text-white/80">Sign in to your account</p>
        </div>

        <!-- Login Form -->
        <form class="space-y-4">
          <div>
            <label for="email" class="block text-sm mb-1">Email</label>
            <input type="email" id="email" name="email" placeholder="you@example.com"
              class="w-full px-3 py-2 rounded-md bg-white/10 text-white border border-white/30 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          </div>
          <div>
            <label for="password" class="block text-sm mb-1">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••"
              class="w-full px-3 py-2 rounded-md bg-white/10 text-white border border-white/30 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          </div>
          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center space-x-2">
              <input type="checkbox" class="accent-blue-500" />
              <span>Remember me</span>
            </label>
            <a href="#" class="text-blue-200 hover:underline">Forgot password?</a>
          </div>
          <button type="submit" class="w-full py-2 rounded-md bg-blue-500 hover:bg-blue-600 font-semibold">Sign In</button>
        </form>
      </div>

      <!-- Right Illustration Area -->
      <div class="hidden md:flex w-1/2 bg-white p-6">
        <img src="/images/vision-street-square.jpg" alt="Vision Street Logo" class="object-cover w-full h-full" />
      </div>

    </div>
  </div>

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
