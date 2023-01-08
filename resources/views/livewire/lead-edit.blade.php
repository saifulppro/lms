<div>
    <form class="form-auto w-full max-w-xs" wire:submit.prevent="submitForm">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                    Name
                </label>
            </div>
            <div class="w-full">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" wire:model="name" type="text">
                @error('name')
                <div class="text-red-500 text-sm">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
                    Email
                </label>
            </div>
            <div class="w-full">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" wire:model="email" type="text">
                @error('email')
                <div class="text-red-500 text-sm">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-phone">
                    Phone
                </label>
            </div>
            <div class="w-full">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" wire:model="phone" type="tel">
                @error('phone')
                <div class="text-red-500 text-sm">{{$message}}</div>
                @enderror
            </div>
        </div>


        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Update Lead
                </button>
            </div>
        </div>

    </form>
    <h3 class="font-bold mb-2">Notes</h3>

        @foreach($notes as $note)
        <div class="mb-4 w-48 p-2 border-b-2 border-indigo-500">
            <h3>{{$note->id}} - {{$note->description}}</h3>
        </div>
        @endforeach

        <form wire:submit.prevent="addNote">
            <div class="mb-4">
                <textarea wire:model.lazy="note" placeholder="type note"></textarea>
            </div>
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Add New Note</button>
        </form>
        
</div>