<div>
    <form wire:submit.prevent="search">
        <label for="search" class="block mb-4">Search</label>
        <input type="text" wire:model.lazy="search" class="block mb-4 w-full" id="search" placeholder="Search">
        <button type="submit" class="button py-6 px-6">Search</button>
    </form>
    @if(count($leads))
    <form wire:submit.prevent="admit">

    
    <div class="mb-4 mt-4">
        <select wire:model.lazy="lead_id" name="" id="" class="w-full">
            <option value="" class="">Select Lead</option>
            @foreach($leads as $lead)
            <option value="{{$lead->id}}">Name: {{$lead->name}}- Phone:{{$lead->phone}}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if(!empty($lead_id))
    <div class="mb-4 mt-4">
        <select wire:change="courseSelected" wire:model.lazy="course_id" class="w-full">
            <option value="" class="">Select Course</option>
            @foreach($courses as $course)
            <option value="{{$course->id}}">Name: {{$course->name}}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if(!empty($selectedCourse))
    <p class="mb-4">price: ${{number_format($selectedCourse->price, 2)}}</p>
    <input wire:model.lazy="payment" type="number" step=".01" placeholder="payment" max="{{number_format($selectedCourse->price)}}" class="w-full mb-4">
    
    <button type="submit" class="button mb-4">Enroll Course</button>
    @endif

    </form>
    

</div>
