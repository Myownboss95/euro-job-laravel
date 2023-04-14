@extends('layouts.back')
@section('title', 'Verify Token')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
            <h2 class="mb-3 me-auto">@yield('title')</h2>
        </div>
        <div class="row">
            <div class="m-auto col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.transfer.confirm') }}" method="post" enctype="multipart/form-data"
                            class="row p-4">
                            @csrf

                            <p class="text-center">A token has been sent to your phone number and email address, use the token
                                to authorize the transfer.</p>
                            <div class="form-group">
                                <input type="text" id="token" name="token" class="form-control"
                                    placeholder="Token" value="{{ old('token') }}">
                                <x-error key="token" />
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success mt-3">Validate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('[name=token]').on('keyup', e => {
            $('#token_error').html('');
            var token = $(e.currentTarget).val();
            if (isNaN(token)) {
                $('#token_error').html('Token can only be numbers.');
            } else if (token.length != 6) {
                $('#token_error').html('Token must be 6 digits.');
            } else {

            }
        })
    </script>
@endpush
