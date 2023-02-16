@extends('layouts.devflix')
@include('layouts.devflix-log-nav')
@section('content')

<div class="container rounded bg-dark mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="{{ Vite::asset('resources/images/profile.png') }}"><span class="font-weight-bold">User</span><span class="text-black-50">amelly12@bbb.com</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email </label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <!-- <div class="col-md-12"><label class="labels">Address(Optional)</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div> -->
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Change Password</span><span class="border px-3 p-1 add-experience"></span></div><br>
                <div class="col-md-12"><label class="labels">New Password</label><input type="text" class="form-control" placeholder="password" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Re-Type Password</label><input type="text" class="form-control" placeholder="re-type Password" value=""></div>
                <div class="mt-5 text-center"><button class="btn btn-info" type="button">Change Payment method</button></div>

            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection