<form method="POST" action="{{ route('safekeys.store') }}" 
      class="max-w-xl mx-auto bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 p-8 rounded-xl shadow-2xl space-y-8 animate-fade-in">
    @csrf

    <h2 class="text-4xl font-extrabold text-center text-yellow-400 tracking-wider mb-8">
        + Add SafeKey
    </h2>

    <div class="space-y-2">
        <label for="field_name" class="block text-sm font-bold text-white tracking-wide">Field Name</label>
        <input type="text" name="field_name" id="field_name" value="{{ old('field_name') }}"
            class="w-full px-4 py-2 bg-blue-950 border border-blue-600 rounded-md text-white focus:ring-2 focus:ring-yellow-400 focus:outline-none transition duration-300">
    </div>

    <div class="space-y-2">
        <label for="allowed_value" class="block text-sm font-bold text-white tracking-wide">Allowed Value</label>
        <input type="text" name="allowed_value" id="allowed_value" value="{{ old('allowed_value') }}"
            class="w-full px-4 py-2 bg-blue-950 border border-blue-600 rounded-md text-white focus:ring-2 focus:ring-yellow-400 focus:outline-none transition duration-300">
    </div>

    <div class="space-y-2">
        <label for="value_type" class="block text-sm font-bold text-white tracking-wide">Value Type</label>
        <input type="text" name="value_type" id="value_type" value="{{ old('value_type') }}"
            class="w-full px-4 py-2 bg-blue-950 border border-blue-600 rounded-md text-white focus:ring-2 focus:ring-yellow-400 focus:outline-none transition duration-300">
    </div>

    <div class="flex items-center mt-4">
        <input type="checkbox" name="is_active" id="is_active" value="1" checked
            class="h-5 w-5 text-pink-400 bg-blue-950 border-gray-300 rounded focus:ring-pink-400">
        <label for="is_active" class="ml-3 text-white font-semibold">Active</label>
    </div>

    <div class="pt-6">
        <button type="submit"
            class="w-full bg-gradient-to-r from-pink-500 via-red-500 to-orange-400 hover:from-orange-400 hover:to-pink-500 text-white font-bold text-lg py-3 rounded-md shadow-md transition duration-300 transform hover:scale-105">
            🚀 Save SafeKey
        </button>
    </div>
</form>
