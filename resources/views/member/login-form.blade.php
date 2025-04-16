@include('member.header.doctype')
<body class="min-h-screen flex flex-col bg-cover bg-center bg-no-repeat" style="background-image: url('/images/vision-street-member-login-1.jpg');">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-30 z-0"></div>

  <!-- Main Content (flex-1 ensures footer stays at bottom) -->
  <div class="flex-1 flex items-center justify-center relative z-10 px-4">
    <div class="w-full max-w-md bg-white/10 backdrop-blur-lg border border-white/30 rounded-xl shadow-xl px-6 py-10 flex flex-col items-center">
      
      <!-- Logo with white background -->
      <div class="bg-white rounded-md p-3 mb-6 w-full flex justify-center">
        <img src="/images/visionStreetCrop-transparent.png" alt="VisionStreet Logo" class="h-10">
      </div>

      <!-- Title -->
      <h2 class="text-2xl font-bold text-white mb-1">Welcome Back</h2>
      <p class="text-sm text-white/70 mb-6 text-center">Please sign in to continue</p>

      <!-- Form -->
      <form action="/login" method="POST" class="w-full space-y-5">
        <div>
          <label class="block text-white text-sm mb-1" for="email">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 rounded-md bg-white/20 text-white placeholder-white/60 border border-white/30 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="you@example.com">
        </div>
        <div>
          <label class="block text-white text-sm mb-1" for="password">Password</label>
          <input type="password" id="password" name="password" required class="w-full px-4 py-2 rounded-md bg-white/20 text-white placeholder-white/60 border border-white/30 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="••••••••">
        </div>
        <div class="flex justify-between items-center text-sm text-white">
          <label class="flex items-center">
            <input type="checkbox" class="mr-2 accent-blue-500">
            Remember me
          </label>
          <a href="#" class="text-blue-300 hover:underline">Forgot Password?</a>
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md">Sign In</button>
      </form>
    </div>
  </div>

  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
  <script>
    grecaptcha.ready(function () {
        grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'member_login'}).then(function (token) {
            document.getElementById('recaptchaToken').value = token;
        });
    });
  </script>

  <!-- Footer: will now stick to bottom -->
  @include('member.footer.main')

</body>
</html>
