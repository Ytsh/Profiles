<div style="text-align: center" class = "p-4" >
    <button type="button" wire:click="increment" class="btn btn-outline-primary">+</button>


    @foreach($counts as $key => $value)
    <div class="flex justify-center py-2" wire:key="{{$key}}">
        <input required type="text" name="experience[]" class="py-1 px-2 border rounded" placeholder="{{'Add experince '.($key+1)}}" @if(is_array($value)) value = "{{$value['experience']}}" @endif/>
        <input type="hidden" name="experienceId[]" @if(is_array($value)) value="{{$value['id']}}" @endif/>
        <button type="button" wire:click="remove({{$key}})" class="btn btn-outline-secondary">-</button>

    </div>
    @endforeach
</div>