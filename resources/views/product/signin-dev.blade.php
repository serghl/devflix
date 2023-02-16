@extends('layouts.devflix')
@include('layouts.devflix-nolog-bar')
@section('content')

<div class="showcase-reg">
    <div class="showcase-reg-content">
        <div class="formm-reg">
            <form>
                <!-- https://getbootstrap.com/docs/4.0/layout/grid/ -->
                <h1>Create Account</h1>
                <div class="info container">
                    <div class="row">
                        <div class="col-6">
                            <label class="reg-label">Name</label>
                            <input class="email" type="text" placeholder="Name" name="name"> <br>
                        </div>
                        <div class="col-6">
                            <label class="reg-label">Surname</label>
                            <input class="email" type="text" placeholder="Surname" name="surname"> <br>
                        </div>
                    </div>
                    <label class="reg-label">Email</label>
                    <input class="email" type="text" placeholder="Email or phone number"> <br>
                    <div class="row">
                        <div class="col-4">
                            <label class="reg-label">Password</label>
                            <input class="email" type="text" placeholder="Password" name="password">
                            <input class="email" type="text" placeholder="Please re-type your password" name="repassword">
                        </div>
                        <div class="col-8 justify-content-between">
                            <label class="reg-label">Payment Method</label>
                            <input class="email" type="text" placeholder="Card Number" name="password">
                            <div class="row justify-content-end">
                                <div class="col-4">
                                    <input class="email" type="text" placeholder="Exp. Date" name="expDate">
                                </div>
                                <div class="col-2">
                                    <input class="email" type="text" placeholder="CSV" name="csv">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn">
                    <button class="btn-primary" type="submit">Register</button>
                </div>
                <div class="help">
                    <!-- <div>
                        <input value="true" type="checkbox"><label>Remember me</label>
                    </div> -->
                    <a href="https://www.netflix.com/dz-en/LoginHelp">Need Help ?</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection