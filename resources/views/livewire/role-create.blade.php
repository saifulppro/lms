<div>
    <form action="" wire:submit.prevent="roleSubmit">
        <div class="mb-4">
            <label class="block cursor-pointer text-gray-500 font-bold mb-4  pr-4" for="name">
                Name
            </label>
            <input class="block bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-200" wire:model.lazy="name" id="name" type="text">
            @error('name')
            <div class="text-red-500 text-sm mb-2">{{$message}}</div>
            @enderror
        </div>
        <h3 class="font-semibold text-gray-700">Permission</h3>

        

        <div class="flex flex-wrap -mx-4">
            @foreach($permissions as $permission)
            <div class="w-1/3 px-4 mb-4">
                <label for="">
                    <input wire:model.lazy="selectedPermissions" type="checkbox" class="form-checkbox" value="{{$permission->id}}">
                    <span class="ml-2">{{$permission->name}}</span>
                </label>
            </div>
            @endforeach

            @error('selectedPermissions')
            <div class="text-red-500 text-sm ml-4 mb-4">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="button">Save Role</button>
    </form>
</div>