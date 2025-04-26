<form method="POST" 
action="" 
class="bg-white p-8 rounded-lg shadow-lg 
max-w-2xl mx-auto space-y-6">
    @csrf

    <h2 class="text-3xl font-bold text-blue-600 mb-6 text-center">Add a New SafeKey</h2>

    <div class="space-y-2">
        <label for="field_name" class="block text-sm font-semibold text-gray-700">Field Name</label>
        <input type="text" name="field_name" id="field_name" value="{{ old('field_name') }}"
            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
    </div>

    <div class="space-y-2">
        <label for="allowed_value" class="block text-sm font-semibold text-gray-700">Allowed Value</label>
        <input type="text" name="allowed_value" id="allowed_value" value="{{ old('allowed_value') }}"
            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
    </div>

    <div class="space-y-2">
        <label for="value_type" class="block text-sm font-semibold text-gray-700">Value Type</label>
        <input type="text" name="value_type" id="value_type" value="{{ old('value_type') }}"
            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
    </div>

    <div class="space-y-2">
        <label for="ip_address" class="block text-sm font-semibold text-gray-700">IP Address</label>
        <input type="text" name="ip_address" id="ip_address" value="{{ old('ip_address', request()->ip()) }}"
            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none transition">
    </div>

    <div class="flex items-center space-x-3 mt-4">
        <input type="checkbox" name="is_active" id="is_active" value="1"
            class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-400" checked>
        <label for="is_active" class="text-gray-800 font-medium">Active</label>
    </div>

    <div>
        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md shadow-md transition transform hover:scale-105">
            🚀 Save SafeKey
        </button>
    </div>
</form>
