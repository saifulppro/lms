<div>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Permission</th>
                <th class="border px-4 py-2 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td class="border px-4 py-2">{{$role->name}}</td>
                <td class="border px-4 py-2">
                    @foreach($role->permissions as $permission)
                    <span class="px-2 py-1 bg-gray-200 rounded text-sm">{{$permission->name}}</span>
                    @endforeach
                </td>
                <td class="border px-4 py-2 text-center">
                    <div class="flex items-center justify-center">
                        <a class="px-2" href="{{route('role.edit', $role->id)}}">@include('components/icons/editicon')</a>
                        <form onsubmit="return confirm('Are you sure to delete');" wire:submit.prevent="roledDelete({{$role->id}})" class="px-2">
                            <button type="submit">
                                @include('components/icons/trashicon')
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>