@if($personal)
<form action="{{route('personal.update')}}" method="post">
    @csrf
    @method('put')
    <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Profile Settings</h4>
        </div>
        <div class="row mt-2">
            <div class="col-md-6"><label class="labels">Name</label><input type="text" required name="fname" class="form-control" placeholder="first name" value="{{$personal->fname}}"></div>
            <div class="col-md-6"><label class="labels">Surname</label><input type="text" required name="lname" class="form-control" value="{{$personal->lname}}" placeholder="surname"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" required name="phone" class="form-control" placeholder="enter phone number" value="{{$personal->phone}}"></div>
            <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" required name="address1" class="form-control" placeholder="enter address line 1" value="{{$personal->address1}}"></div>
            <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" required name="address2" class="form-control" placeholder="enter address line 2" value="{{$personal->address2}}"></div>
            <div class="col-md-12"><label class="labels">Postcode</label><input type="text" required name="postcode" class="form-control" placeholder="enter address line 2" value="{{$personal->postcode}}"></div>
            <div class="col-md-12"><label class="labels">State</label><input type="text" required name="state" class="form-control" placeholder="enter address line 2" value="{{$personal->state}}"></div>
            <div class="col-md-12"><label class="labels">Area</label><input type="text" required name="area" class="form-control" placeholder="enter address line 2" value="{{$personal->area}}"></div>
            <div class="col-md-12"><label class="labels">Email ID</label><input type="text" required name="email" class="form-control" placeholder="enter email id" value="{{$personal->email}}"></div>
            <div class="col-md-12"><label class="labels">Education</label><input type="text" required name="education" class="form-control" placeholder="education" value="{{$personal->education}}"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><label class="labels">Country</label><input type="text" required name="country" class="form-control" placeholder="country" value="{{$personal->country}}"></div>
            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" required name="region" class="form-control" value="{{$personal->region}}" placeholder="state"></div>
        </div>
        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Edit Profile</button></div>
    </div>
</form>

@else

<form action="{{route('personal.store')}}" method="post">
    @csrf
    <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Profile Settings</h4>
        </div>
        <div class="row mt-2">
            <div class="col-md-6"><label class="labels">Name</label><input type="text" required name="fname" class="form-control" placeholder="first name" value=""></div>
            <div class="col-md-6"><label class="labels">Surname</label><input type="text" required name="lname" class="form-control" value="" placeholder="surname"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" required name="phone" class="form-control" placeholder="enter phone number" value=""></div>
            <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" required name="address1" class="form-control" placeholder="enter address line 1" value=""></div>
            <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" required name="address2" class="form-control" placeholder="enter address line 2" value=""></div>
            <div class="col-md-12"><label class="labels">Postcode</label><input type="text" required name="postcode" class="form-control" placeholder="enter address line 2" value=""></div>
            <div class="col-md-12"><label class="labels">State</label><input type="text" required name="state" class="form-control" placeholder="enter address line 2" value=""></div>
            <div class="col-md-12"><label class="labels">Area</label><input type="text" required name="area" class="form-control" placeholder="enter address line 2" value=""></div>
            <div class="col-md-12"><label class="labels">Email ID</label><input type="text" required name="email" class="form-control" placeholder="enter email id" value=""></div>
            <div class="col-md-12"><label class="labels">Education</label><input type="text" required name="education" class="form-control" placeholder="education" value=""></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><label class="labels">Country</label><input type="text" required name="country" class="form-control" placeholder="country" value=""></div>
            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" required name="region" class="form-control" value="" placeholder="state"></div>
        </div>
        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
    </div>
</form>


@endif

