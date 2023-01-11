<div class="mb-4">
    <label class="label" for="{{$name}}">{{$label}}</label>
    @if($type == 'textarea')
        <textarea class="input" wire:model.lazy="{{$name}}" placeholder="{{$placeholder}}" id="{{$name}}" type="{{$type}}" {{$required}}></textarea>
    @else
        <input class="input" wire:model.lazy="{{$name}}" placeholder="{{$placeholder}}" id="{{$name}}" type="{{$type}}" {{$required}}>
    @endif


    @error($name)
    <div class="error">{{$message}}</div>
    @enderror


</div>