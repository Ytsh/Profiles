<div style="text-align: center" class = "p-4" >
    <button type="button" wire:click="increment" class="btn btn-outline-primary">+</button>


    @foreach($counts as $key => $count)
    <div class="flex justify-center py-2" wire:key="{{$key}}">
        <input type="text" required name="equivalent[]" class="py-1 px-2 border rounded" placeholder="{{'Add experince '.($key+1)}}" @if(is_array($count)) value = "{{$count['equivalent']}}" @endif/>
        <input type="text" required name="grade[]" class="py-1 px-2 border rounded" placeholder="{{'Add experince '.($key+1)}}" @if(is_array($count)) value = "{{$count['grade']}}" @endif/>
        <input type="text" required name="university[]" class="py-1 px-2 border rounded" placeholder="{{'Add experince '.($key+1)}}" @if(is_array($count)) value = "{{$count['university']}}" @endif/>
        <input type="text" required name="p_year[]" class="py-1 px-2 border rounded" placeholder="{{'Add experince '.($key+1)}}" @if(is_array($count)) value = "{{$count['p_year']}}" @endif/>
        <input type="hidden" name="equivalentId[]" @if(is_array($count)) value="{{$count['id']}}" @endif/>
        <button type="button" wire:click="remove({{$key}})" class="btn btn-outline-secondary">-</button>

    </div>
    @endforeach
</div>