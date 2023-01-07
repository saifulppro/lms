<div>
    <form wire:submit.prevent="search">
        <label for="search" class="block mb-4">Search</label>
        <input type="text" wire:model.lazy="search" class="block mb-4 w-full" id="search" placeholder="Search">
        <button type="submit" class="button py-6 px-6">Search</button>
    </form>
    <h2>found {{count($leads)}}</h2>
</div>
