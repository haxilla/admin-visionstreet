@include('admin.header.doctype')
<body class="h-full w-full flex flex-col items-center justify-center px-4">
  <!-- Login Box -->
  <div class="bg-black/70 backdrop-blur-md border border-white/20 p-8 md:p-10 rounded-md w-full max-w-sm shadow-2xl">
    <h1 class="text-center text-white text-sm tracking-widest mb-6 border-b border-white/20 pb-2">
      ADMIN ACCESS
    </h1>

    <form method="POST" action="/admin/login" class="space-y-5">
      <!-- username + password fields here -->
      <!-- button -->
    </form>

    <!-- Optional disclaimer inside box -->
    <p class="mt-6 text-[0.65rem] text-center text-white/40 border-t border-white/10 pt-4">
      🔐 Authorized personnel only.
    </p>
  </div>

    <!-- reCAPTCHA Disclaimer should be OUTSIDE login panel -->
    <p class="mt-4 text-[0.6rem] text-white/40 text-center max-w-xs px-4">
        This site is protected by reCAPTCHA and the Google
    <a href="https://policies.google.com/privacy" class="underline hover:text-white/70">
        Privacy Policy</a> and
    <a href="https://policies.google.com/terms" class="underline hover:text-white/70">
        Terms of Service</a> apply.
    </p>


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