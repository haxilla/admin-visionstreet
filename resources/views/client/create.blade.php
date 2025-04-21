@include('client.header.doctype')
<body class="bg-slate-900 text-white min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-xl">
    <!-- Logo/Header -->
    <h1>Contact Info</h1>
    <!-- Form -->
    <form
    action=""
    method="POST"
    class="bg-slate-800 rounded-lg shadow-lg p-6 space-y-6">
      @csrf
      <!-- Full Name -->
      <div>
        <label for="full-name" class="block text-sm font-medium text-slate-300">
          Full Name
        </label>
        <input
        type="text"
        id="full-name"
        name="full-name"
        required
        class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
        focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-slate-300">
          Email Address
        </label>
        <input
        type="email"
        id="email"
        name="email"
        required
        class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
        focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      </div>

      <!-- Company -->
      <div>
        <label for="company" class="block text-sm font-medium text-slate-300">
          Company / Organization
        </label>
        <input
          type="text"
          id="company"
          name="company"
          class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
          focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"
        />
      </div>

      <!-- Website URL -->
      <div>
        <label for="website" class="block text-sm font-medium text-slate-300">
          Current Website URL
        </label>
        <input
        type="url"
        id="website"
        name="website"
        class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
        focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      </div>

      <!-- Referred By -->
      <div>
        <label for="referred_by" class="block text-sm font-medium text-slate-300">
          Referred By
        </label>
        <input
        type="text"
        id="referred_by"
        name="referred_by"
        class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
        focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      </div>

      <!-- Status Dropdown -->
      <div>
        <label for="status" class="block text-sm font-medium text-slate-300">
          Status
        </label>
        <select
        id="status"
        name="status"
        required
        class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
        focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
          <option value="">Select…</option>
          <option value="contact">Contact</option>
          <option value="cold_lead">Cold Lead</option>
          <option value="warm_lead">Warm Lead</option>
          <option value="current_client">Current Client</option>
          <option value="past_client">Past Client</option>
        </select>
      </div>

      <!-- Services -->
      <fieldset>
        <legend class="text-sm font-medium text-slate-300">
          Add Service
        </legend>
        <div class="mt-2 space-y-2">
          <label class="flex items-center">
            <input
            type="checkbox"
            name="services[]"
            value="web-dev"
            class="h-4 w-4 text-sky-400 bg-slate-700 border-slate-600 rounded focus:ring-sky-400"/>
            <span class="ml-2 text-slate-200">Website</span>
          </label>
          <label class="flex items-center">
            <input
            type="checkbox"
            name="services[]"
            value="seo"
            class="h-4 w-4 text-sky-400 bg-slate-700 border-slate-600 rounded focus:ring-sky-400"/>
            <span class="ml-2 text-slate-200">SEO</span>
          </label>
          <label class="flex items-center">
            <input
              type="checkbox"
              name="services[]"
              value="maintenance"
              class="h-4 w-4 text-sky-400 bg-slate-700 border-slate-600 rounded focus:ring-sky-400"
            />
            <span class="ml-2 text-slate-200">Hosting</span>
          </label>
        </div>
      </fieldset>

      <!-- Project Details -->
      <div>
        <label for="details" class="block text-sm font-mediumtext-slate-300">
          Project Details
        </label>
        <textarea
        id="details"
        name="details"
        rows="4"
        required
        class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
        focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"></textarea>
      </div>
      <!-- Submit -->
      <button
      type="submit"
      class="w-full py-3 bg-sky-500 hover:bg-sky-600 transition rounded text-white font-semibold">
        SAVE CONTACT
      </button>
    </form>
  </div>
@include('client.footer.main')
</body>
</html>
