@extends('layouts.back')
@section('title', 'Security')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
            <h2 class="mb-3 me-auto">@yield('title')</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <x-alert />
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.settings.security.update') }}" method="post"
                            class="row p-lg-3 d-flex justify-content-center">
                            @csrf
                            <div class="col-md-7">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ auth('admin')->user()->name }}">
                                    <x-error :key="'name'" />
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ auth('admin')->user()->email }}" placeholder="USDGBP">
                                    <x-error :key="'email'" />
                                </div>

                                <i class="mb-3 mt-3 text-danger">Leave password fields empty, if you are not updating them.</i>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                         placeholder="Password">
                                    <x-error :key="'password'" />
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password_confirmation" id="password_confirmation"
                                        name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                    <x-error :key="'password_confirmation'" />
                                </div>


                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-info mt-3">Update Security</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .form-group {
            margin-bottom: 10px;
        }

    </style>
@endpush
