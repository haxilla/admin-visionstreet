<form method="POST" action="" class="space-y-6">
    @csrf

    <div>
        <label for="field_name" class="block text-sm font-medium text-gray-700">Field Name</label>
        <input type="text" name="field_name" id="field_name" value="{{ old('field_name') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
    </div>

    <div>
        <label for="allowed_value" class="block text-sm font-medium text-gray-700">Allowed Value</label>
        <input type="text" name="allowed_value" id="allowed_value" value="{{ old('allowed_value') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
    </div>

    <div>
        <label for="value_type" class="block text-sm font-medium text-gray-700">Value Type</label>
        <input type="text" name="value_type" id="value_type" value="{{ old('value_type') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
    </div>

    <div>
        <label for="ip_address" class="block text-sm font-medium text-gray-700">IP Address</label>
        <input type="text" name="ip_address" id="ip_address" value="{{ old('ip_address', request()->ip()) }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
    </div>

    <div class="flex items-center">
        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}
            class="h-4 w-4 text-blue-600 border-gray-300 rounded">
        <label for="is_active" class="ml-2 block text-sm text-gray-900">Active</label>
    </div>

    <div>
        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-sm">
            Save SafeKey
        </button>
    </div>
</form>
