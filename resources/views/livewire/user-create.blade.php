<div>
   <form wire:submit.prevent="userSubmit">
      
      <div class="mb-4">
         <label class="block cursor-pointer text-gray-500 font-bold mb-4  pr-4" for="name">
            Name
         </label>
         <input class="block bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-200" wire:model.lazy="name" id="name" type="text">
         @error('name')
         <div class="text-red-500 text-sm mb-2">{{$message}}</div>
         @enderror
      </div>
      <div class="mb-4">
         <label class="block cursor-pointer text-gray-500 font-bold mb-4  pr-4" for="email">
            Email
         </label>
         <input class="block bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-200" wire:model.lazy="email" id="email" type="email">
         @error('email')
         <div class="text-red-500 text-sm mb-2">{{$message}}</div>
         @enderror
      </div>
      <div class="mb-4">
         <label class="block cursor-pointer text-gray-500 font-bold mb-4  pr-4" for="password">
            Password
         </label>
         <input class="block bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-200" wire:model.lazy="password" id="password" type="password">
         @error('password')
         <div class="text-red-500 text-sm mb-2">{{$message}}</div>
         @enderror
      </div>
      <div class="mb-4">
         <label for="role" class="mr-4 block">Role</label>
         <select name="role" id="role" wire:model.lazy="role" class="w-full border-neutral-200">
            <option value="">Select Role</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
         </select>
         @error('role')
         <div class="text-red-500 text-sm mb-2">{{$message}}</div>
         @enderror
      </div>
      <button type="submit" class="button">Add User</button>

   </form>
</div>