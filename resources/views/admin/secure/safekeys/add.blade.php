<form method="POST" action="{{ route('safekeys.store') }}"
    class="max-w-2xl mx-auto bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 p-10 rounded-lg shadow-xl space-y-8">
    @csrf

    <h2 class="text-3xl font-bold text-center text-white mb-8 tracking-wider">
        Add New SafeKey
    </h2>

    <div class="space-y-2">
        <label for="field_name" class="block text-sm font-medium text-blue-200">Field Name</label>
        <input type="text" name="field_name" id="field_name" value="{{ old('field_name') }}"
            class="w-full px-4 py-2 bg-blue-900 text-white border border-blue-700 rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
    </div>

    <div class="space-y-2">
        <label for="allowed_value" class="block text-sm font-medium text-blue-200">Allowed Value</label>
        <input type="text" name="allowed_value" id="allowed_value" value="{{ old('allowed_value') }}"
            class="w-full px-4 py-2 bg-blue-900 text-white border border-blue-700 rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
    </div>

    <div class="space-y-2">
        <label for="value_type" class="block text-sm font-medium text-blue-200">Value Type</label>
        <input type="text" name="value_type" id="value_type" value="{{ old('value_type') }}"
            class="w-full px-4 py-2 bg-blue-900 text-white border border-blue-700 rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
    </div>

    <div class="flex items-center space-x-3 pt-2">
        <input type="checkbox" name="is_active" id="is_active" value="1" checked
            class="h-5 w-5 text-blue-500 bg-blue-900 border-blue-700 rounded focus:ring-blue-400">
        <label for="is_active" class="text-blue-200 text-sm font-medium">Mark as Active</label>
    </div>

    <div class="pt-8">
        <button type="submit"
            class="w-full bg-gradient-to-r from-blue-600 to-cyan-400 hover:from-cyan-400 hover:to-blue-600 text-white font-bold text-lg py-3 rounded-md shadow-md transition transform hover:scale-105 focus:outline-none">
            Save SafeKey
        </button>
    </div>
</form>
