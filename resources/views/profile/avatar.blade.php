@if(Auth::user()->avatar)
    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('/storage/images/'.Auth::user()->avatar)}}"><span class="font-weight-bold">Auth::user()->name</span><span class="text-black-50">Auth::user()->mail</span><span> </span></div>
@endif
<form action="{{route('avatar.upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" required name="image"/>
    <input type="submit" value="Upload" />
</form>