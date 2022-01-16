
@if($professional)
<div class="d-flex justify-content-between align-items-center mt-5 mb-1">
    <h4 class="text-right">Experience Settings</h4>
</div>
<div class="p-2 py-5">
    <form action="{{route('professional.update')}}" method="post">
        @csrf
        @method('put')
        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
        <div class="col-md-12"><label class="labels">Experience</label><input type="text" required name ="c_profession" class="form-control" placeholder="experience" value="{{$professional->c_profession}}"></div> <br>
        <div class="col-md-12"><label class="labels">Additional Details</label></div>
        @livewire('edit-professional',['experiences'=>$professional->experiences])
        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Edit Experience</button></div>
    </form>
</div>
@else
<div class="d-flex justify-content-between align-items-center mt-5 mb-1">
    <h4 class="text-right">Experience Settings</h4>
</div>
<div class="p-2 py-5">
    <form action="{{route('professional.store')}}" method="post">
        @csrf
        <div class="d-flex justify-content-between align-items-center experience"><span>Add Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
        <div class="col-md-12"><label class="labels">Experience</label><input type="text" required name ="c_profession" class="form-control" placeholder="experience" value=""></div> <br>
        <div class="col-md-12"><label class="labels">Additional Details</label></div>
        @livewire('add-professional')
        <input name="user_id" type="hidden" value="{{auth()->user()->id}}"/>
        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Experience</button></div>
    </form>
</div>

@endif