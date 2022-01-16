@if($academic)
<form action="{{route('academic.update')}}" method="post">
    @csrf
    @method('put')    
    <div style="text-align: center ">
        <label justify>Enter your academic details</label> 
    </div>
    @livewire('edit-academic',['academic'=>$academic])
    <input name="user_id" type="hidden" value="{{auth()->user()->id}}">

    <div style="text-align: center ">
    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Academic</button></div>

    </div>        
</form>
@else
<form action="{{route('academic.store')}}" method="post">
    @csrf
    
    <div style="text-align: center ">
        <label justify>Enter your academic details</label> 
    </div>
    @livewire('add-academic')
    <input name="user_id" type="hidden" value="{{auth()->user()->id}}">

    <div style="text-align: center ">
    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Academic</button></div>

    </div>        
</form>

@endif