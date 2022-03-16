@extends('layouts.app')
@section('content')
    <x-navigation.primary></x-navigation.primary>
    <div class="container-fluid px-5 py-4">
        <form action="{{route('login')}}" method="post" class="col-6 p-4 shadow border border-2 border-secondary rounded-3 mx-auto">
            <header class="mb-4">
                <h2>Login</h2>
            </header>
            <div class="">
                <div class="form-floating mb-4">
                    <input type="email" name="user-email" id="floatingInput" class="form-control fs-4" placeholder="User Email">
                    <label for="floatingInput">User Email</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="user-password" id="floatingInput" class="form-control fs-4" placeholder="User Password">
                    <label for="floatingInput">User Password</label>
                </div>
            </div>
            <div class="actions">
                <button type="submit" class="btn btn-primary fs-4">Submit</button>
                <button type="reset" class="btn btn-danger fs-4">Cancel</button>
            </div>
        </form>
    </div>
@endsection