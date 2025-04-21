<div class="w-full max-w-xl mx-auto">
  <h1 class="text-2xl font-bold mb-2">Contact Info</h1>
  <div>
    {{$subhead}}
  </div>

  @if($mode !== 'view')
    <form
      action="/client/submit"
      method="POST"
      class="bg-slate-800 rounded-lg shadow-lg p-6 space-y-6"
    >
      @csrf
      @if($mode === 'edit')
        <input type="hidden" name="id" value="{{ $client->id }}">
      @endif
  @endif

  @php
    $fullName = old('full_name', $client->full_name ?? '');
    $email = old('email', $client->email ?? '');
    $company = old('company', $client->company ?? '');
    $website = old('website', $client->website ?? '');
    $referredBy = old('referred_by', $client->referred_by ?? '');
    $status = old('status', $client->status ?? '');
    $details = old('details', $client->details ?? '');
    $services = old('services', $client->services ?? []);
  @endphp

  <div class="bg-slate-800 rounded-lg shadow-lg p-6 space-y-6 {{ $mode === 'view' ? '' : 'mt-0' }}">

    <!-- Full Name -->
    <div>
      <label for="full-name" class="block text-sm font-medium text-slate-300">Full Name</label>
      @if($mode === 'view')
        <p class="mt-1 text-slate-200">{{ $fullName ?: '-' }}</p>
      @else
        <input type="text" id="full-name" name="full_name" required
               value="{{ $fullName }}"
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      @endif
    </div>

    <!-- Email -->
    <div>
      <label for="email" class="block text-sm font-medium text-slate-300">Email Address</label>
      @if($mode === 'view')
        <p class="mt-1 text-slate-200">{{ $email ?: '-' }}</p>
      @else
        <input type="email" id="email" name="email" required
               value="{{ $email }}"
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      @endif
    </div>

    <!-- Company -->
    <div>
      <label for="company" class="block text-sm font-medium text-slate-300">Company / Organization</label>
      @if($mode === 'view')
        <p class="mt-1 text-slate-200">{{ $company ?: '-' }}</p>
      @else
        <input type="text" id="company" name="company"
               value="{{ $company }}"
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      @endif
    </div>

    <!-- Website -->
    <div>
      <label for="website" class="block text-sm font-medium text-slate-300">Current Website URL</label>
      @if($mode === 'view')
        <p class="mt-1 text-slate-200">{{ $website ?: '-' }}</p>
      @else
        <input type="url" id="website" name="website"
               value="{{ $website }}"
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      @endif
    </div>

    <!-- Referred By -->
    <div>
      <label for="referred_by" class="block text-sm font-medium text-slate-300">Referred By</label>
      @if($mode === 'view')
        <p class="mt-1 text-slate-200">{{ $referredBy ?: '-' }}</p>
      @else
        <input type="text" id="referred_by" name="referred_by"
               value="{{ $referredBy }}"
               class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                      focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400"/>
      @endif
    </div>

    <!-- Status -->
    <div>
      <label for="status" class="block text-sm font-medium text-slate-300">Status</label>
      @if($mode === 'view')
        <p class="mt-1 text-slate-200">{{ ucfirst(str_replace('_', ' ', $status)) ?: '-' }}</p>
      @else
        <select id="status" name="status" required
                class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                       focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400">
          <option value="">Select…</option>
          @foreach(['contact', 'cold_lead', 'warm_lead', 'current_client', 'past_client'] as $option)
            <option value="{{ $option }}" @selected($status === $option)>
              {{ ucwords(str_replace('_', ' ', $option)) }}
            </option>
          @endforeach
        </select>
      @endif
    </div>

    <!-- Services -->
    <fieldset>
      <legend class="text-sm font-medium text-slate-300">Add Service</legend>
      <div class="mt-2 space-y-2">
        @foreach(['web-dev' => 'Website', 'seo' => 'SEO', 'maintenance' => 'Hosting'] as $value => $label)
          <div>
            @if($mode === 'view')
              @if(in_array($value, $services))
                <p class="text-slate-200">✔ {{ $label }}</p>
              @endif
            @else
              <label class="flex items-center">
                <input type="checkbox" name="services[]" value="{{ $value }}"
                       @checked(in_array($value, $services))
                       class="h-4 w-4 text-sky-400 bg-slate-700 border-slate-600 rounded focus:ring-sky-400"/>
                <span class="ml-2 text-slate-200">{{ $label }}</span>
              </label>
            @endif
          </div>
        @endforeach
      </div>
    </fieldset>

    <!-- Project Details -->
    <div>
      <label for="details" class="block text-sm font-medium text-slate-300">Project Details</label>
      @if($mode === 'view')
        <p class="mt-1 text-slate-200 whitespace-pre-wrap">{{ $details ?: '-' }}</p>
      @else
        <textarea id="details" name="details" rows="4" required
                  class="mt-1 block w-full rounded bg-slate-700 text-white px-3 py-2 border border-slate-600
                         focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-sky-400">{{ $details }}</textarea>
      @endif
    </div>

    <!-- Submit -->
    @if($mode !== 'view')
      <button
        type="submit"
        class="w-full py-3 bg-sky-500 hover:bg-sky-600 transition rounded text-white font-semibold">
        {{ $mode === 'edit' ? 'Update Contact' : 'Save Contact' }}
      </button>
    @endif
  </div>

  @if($mode !== 'view')
    </form>
  @endif
</div>