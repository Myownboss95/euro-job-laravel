@extends('layouts.back')
@section('title', 'Contact Details')
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
                    <form action="{{ route('admin.settings.contact.update') }}" method="post"
                        enctype="multipart/form-data" class="row p-lg-3 d-flex justify-content-center">
                        @csrf
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="notification_email">Notification Email</label>
                                <input type="email" id="notification_email" name="notification_email"
                                    class="form-control" value="{{ $contact->notification_email ?? '' }}">
                                <x-error :key="'notification_email'" />
                            </div>
                            <div class="form-group">
                                <label for="support_email">Support Email</label>
                                <input type="email" id="support_email" name="support_email" class="form-control" value="{{ $contact->support_email ?? '' }}">
                                <x-error :key="'support_email'" />
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" class="form-control" value="{{ $contact->phone ?? '' }}">
                                <x-error :key="'phone'" />
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{ $contact->address ?? '' }}">
                                <x-error :key="'address'" />
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-info mt-3">Update</button>
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

