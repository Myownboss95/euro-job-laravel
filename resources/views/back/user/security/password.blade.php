@extends('layouts.back')
@section('title', 'Change Password')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
            <h2 class="mb-3 me-auto">@yield('title')</h2>
        </div>
        <div class="row">
            <div class="m-auto col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.security.password.change') }}" method="post"
                            enctype="multipart/form-data" class="row p-5">
                            @csrf
                            <div class="form-group">
                                <label for="current_password">Current password</label>
                                <input type="password" id="current_password" name="current_password" class="form-control">
                                <x-error key="current_password" />
                            </div>
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <x-error key="password" />
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm New Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                <x-error key="password_confirmation" />
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success mt-3">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
