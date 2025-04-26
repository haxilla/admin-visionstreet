@if ($data->isEmpty())
    <div class="bg-yellow-100 text-yellow-800 p-4 rounded">
        No safekeys found.
    </div>
@else
    <table class="min-w-full bg-white shadow rounded overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-3">Field Name</th>
                <th class="text-left p-3">Allowed Value</th>
                <th class="text-left p-3">Value Type</th>
                <th class="text-left p-3">Is Active</th>
                <th class="text-left p-3">Created At</th>
                <th class="text-left p-3">First Access</th>
                <th class="text-left p-3">Last Access</th>
                <th class="text-left p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $key->field_name }}</td>
                    <td class="p-3">{{ $key->allowed_value }}</td>
                    <td class="p-3">{{ $key->value_type }}</td>
                    <td class="p-3">{{ $key->is_active ? 'Yes' : 'No' }}</td>
                    <td class="p-3">{{ $key->created_at }}</td>
                    <td class="p-3">{{ $key->first_access ?? '—' }}</td>
                    <td class="p-3">{{ $key->last_access ?? '—' }}</td>
                    <td class="p-3">
                        <form method="POST" action="{{ route('safekeys.approve', $key->sk_id) }}" class="inline-block">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-sm px-3 py-1 rounded">Approve</button>
                        </form>

                        <form method="POST" action="{{ route('safekeys.reject', $key->sk_id) }}" class="inline-block ml-2">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif