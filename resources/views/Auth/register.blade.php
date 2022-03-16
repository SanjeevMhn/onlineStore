@extends('layouts.app')
@section('content')
    <x-navigation.primary></x-navigation.primary>
    <div class="container-fluid px-5 py-4">
        <form action="{{route('register')}}" method="post" class="col-8 p-4 shadow border border-2 border-secondary rounded-3 mx-auto">
            <header class="mb-4">
                <h2>Register</h2>
            </header>
            <div class="row row-cols-2 gx-2">
                <div class="form-floating mb-4">
                    <input type="text" name="user-name" id="floatingInput @error('user-name') floatingInputInvalid @enderror" class="form-control fs-4 @error('user-name') isInvalid @enderror" placeholder="Full Name">
                    <label for="floatingInput">Full Name</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="email" name="user-email" id="floatingInput" class="form-control fs-4" placeholder="User Email">
                    <label for="floatingInput">User Email</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="user-password" id="floatingInput" class="form-control fs-4" placeholder="User Password">
                    <label for="floatingInput">User Password</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="user-address" id="floatingInput" class="form-control fs-4" placeholder="User Address">
                    <label for="floatingInput">User Address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="tel" name="user-contact" id="floatingInput" class="form-control fs-4" placeholder="User Contact">
                    <label for="floatingInput">User Contact</label>
                </div>
            </div>
            <div class="actions">
                <button type="submit" class="btn btn-primary fs-4">Submit</button>
                <button type="reset" class="btn btn-danger fs-4">Cancel</button>
            </div>
        </form>
    </div>
@endsection