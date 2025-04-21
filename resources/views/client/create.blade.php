<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vision Street – Client Intake</title>
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@4/dist/tailwind.min.js"></script>
</head>
<body class="bg-slate-900 text-white min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-xl">
    <!-- Logo/Header -->
    <div class="text-center mb-8">
      <img src="/path/to/vision-street-logo.svg" alt="Vision Street" class="mx-auto h-12">
      <h1 class="mt-4 text-3xl font-bold">Project Intake Form</h1>
      <p class="mt-1 text-slate-300">Tell us about your website & SEO needs</p>
    </div>

    <!-- Form -->
    <form class="bg-slate-800 rounded-lg shadow-lg p-6 space-y-6">
      <!-- Name -->
      <div>
        <label for="full-name" class="block text-sm font-medium text-slate-300">Full Name</label>
        <input type="text" id="full-name" name="full-name" required
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
               placeholder="Jane Doe" />
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-slate-300">Email Address</label>
        <input type="email" id="email" name="email" required
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
               placeholder="jane@example.com" />
      </div>

      <!-- Company -->
      <div>
        <label for="company" class="block text-sm font-medium text-slate-300">Company / Organization</label>
        <input type="text" id="company" name="company"
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
               placeholder="Vision Street Inc." />
      </div>

      <!-- Website URL -->
      <div>
        <label for="website" class="block text-sm font-medium text-slate-300">Current Website URL</label>
        <input type="url" id="website" name="website"
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
               placeholder="https://your-site.com" />
      </div>

      <!-- Services -->
      <fieldset>
        <legend class="text-sm font-medium text-slate-300">Services You’re Interested In</legend>
        <div class="mt-2 space-y-2">
          <label class="flex items-center">
            <input type="checkbox" name="services" value="web-dev"
                   class="h-4 w-4 text-sky-400 bg-slate-700 border-slate-600 rounded focus:ring-sky-400" />
            <span class="ml-2 text-slate-200">Website Development</span>
          </label>
          <label class="flex items-center">
            <input type="checkbox" name="services" value="seo"
                   class="h-4 w-4 text-sky-400 bg-slate-700 border-slate-600 rounded focus:ring-sky-400" />
            <span class="ml-2 text-slate-200">SEO Services</span>
          </label>
          <label class="flex items-center">
            <input type="checkbox" name="services" value="maintenance"
                   class="h-4 w-4 text-sky-400 bg-slate-700 border-slate-600 rounded focus:ring-sky-400" />
            <span class="ml-2 text-slate-200">Ongoing Maintenance</span>
          </label>
        </div>
      </fieldset>

      <!-- Project Details -->
      <div>
        <label for="details" class="block text-sm font-medium text-slate-300">Project Details</label>
        <textarea id="details" name="details" rows="4" required
                  class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                         focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
                  placeholder="Briefly describe your project goals, features, and any must-haves…"></textarea>
      </div>

      <!-- Budget & Timeline -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="budget" class="block text-sm font-medium text-slate-300">Estimated Budget</label>
          <select id="budget" name="budget" required
                  class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                         focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
            <option value="">Choose one…</option>
            <option>$1k – $5k</option>
            <option>$5k – $10k</option>
            <option>$10k+</option>
          </select>
        </div>
        <div>
          <label for="timeline" class="block text-sm font-medium text-slate-300">Desired Timeline</label>
          <input type="text" id="timeline" name="timeline" required
                 class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                        focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
                 placeholder="e.g. Launch by Q3 2025" />
        </div>
      </div>

      <!-- Submit -->
      <button type="submit"
              class="w-full py-3 bg-sky-500 hover:bg-sky-600 transition rounded text-white font-semibold">
        Submit Your Project
      </button>
    </form>
  </div>
</body>
</html>
