@extends('layouts.back')
@section('title', 'Change Pin')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
            <h2 class="mb-3 me-auto">@yield('title')</h2>
        </div>
        <div class="row">
            <div class="m-auto col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.security.pin.change') }}" method="post"
                            enctype="multipart/form-data" class="row p-5">
                            @csrf

                            <div class="form-group">
                                <label for="pin">New Pin</label>
                                <input type="password" id="pin" name="pin" class="form-control">
                                <x-error key="pin" />
                            </div>

                            <div class="form-group">
                                <label for="pin_confirmation">Confirm New Pin</label>
                                <input type="password" id="pin_confirmation" name="pin_confirmation" class="form-control">
                                <x-error key="pin_confirmation" />
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <x-error key="password" />
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success mt-3">Change Pin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
