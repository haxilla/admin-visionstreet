<form method="POST" 
data-action="handle"
data-renderto="pageswap"
data-renderfrom="admin.secure"
data-renderas="html"
data-task="safekeys.submit"
class="max-w-lg mx-auto bg-[#0F172A] 
border border-[#1E3A8A] p-8 rounded-sm 
shadow-md space-y-6">
    <!-- Add CSRF token here if using Laravel: @csrf -->
    @csrf
    <h2 class="text-2xl font-semibold text-white 
    mb-6 tracking-wide">
        Create New SafeKey
    </h2>

    <div class="space-y-2">
        <label for="field_name" class="block text-sm 
        font-medium text-blue-200">
            Key Name
        </label>
        <input type="text" name="field_name" id="field_name"
        class="w-full px-3 py-2 bg-[#1E293B] text-white 
        border border-blue-700 rounded-sm focus:ring-2 
        focus:ring-blue-500 focus:outline-none text-sm">
    </div>

    <div class="space-y-2">
        <label for="allowed_value" class="block text-sm font-medium 
        text-blue-200">
            Key Value
        </label>
        <input type="text" name="allowed_value" id="allowed_value"
        class="w-full px-3 py-2 bg-[#1E293B] text-white 
        border border-blue-700 rounded-sm focus:ring-2 
        focus:ring-blue-500 focus:outline-none text-sm">
    </div>

    <div class="space-y-2">
        <label for="value_type" class="block text-sm 
        font-medium text-blue-200">
            Value Type
        </label>
        <select name="value_type" id="value_type"
            class="w-full px-3 py-2 bg-[#1E293B] text-white border border-blue-700 rounded-sm focus:ring-2 focus:ring-blue-500 focus:outline-none text-sm">
            <option value="">-- Select Type --</option>
            <option value="Route">Route</option>
            <option value="Key">Key</option>
            <option value="Action">Task</option>
        </select>
    </div>

    <div class="flex items-center space-x-2">
        <input type="checkbox" name="is_active" 
        id="is_active" value="1"      
        class="h-4 w-4 text-blue-500 bg-[#1E293B] 
        border-blue-700 rounded-sm focus:ring-blue-500">
        <label for="is_active" class="text-blue-200 
        text-sm font-medium">
            Active
        </label>
    </div>

    <div class="pt-6">
        <button type="submit"
            class="group inline-flex items-center justify-center w-full border border-blue-900 bg-white text-blue-900 font-medium py-2 px-4 rounded-sm shadow-sm transition-colors duration-200 text-sm hover:bg-[#0F172A] hover:text-white">
            Save SafeKey
        </button>
    </div>
</form>