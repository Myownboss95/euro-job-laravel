@extends('layouts.back')
@section('title', 'Local Transfer')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
            <h2 class="mb-3 me-auto">@yield('title')</h2>
        </div>
        <div class="row">
            <div class="m-auto col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.transfer.process') }}" method="post" enctype="multipart/form-data"
                            class="row p-5">
                            @csrf
                            <h4>Transfer Details</h4>

                            <div class="form-group">
                                <input type="text" id="account_number" name="account_number" class="form-control"
                                    placeholder="Account Number" value="{{ old('account_number') }}">
                                <x-error key="account_number" />
                            </div>

                            <div class="form-group">
                                <select name="account_type" id="account_type" class="form-select form-select-lg"
                                    style="font-size:12px">
                                    <option value="">Choose Account type</option>
                                    @foreach (config('constants.account_types') as $account_type)
                                        <option value="{{ $account_type }}" @if (old('account_type') == $account_type) selected @endif>{{ $account_type }}</option>
                                    @endforeach
                                </select>
                                <x-error key="account_type" />
                            </div>

                            <div class="form-group">
                                <input type="text" id="account_name" name="account_name" class="form-control"
                                    placeholder="Account Name" value="{{ old('account_name') }}" readonly disabled>
                                <x-error key="account_name" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="amount" name="amount" class="form-control" placeholder="Amount"
                                    value="{{ old('amount') }}">
                                <x-error key="amount" />
                            </div>

                            <div class="form-group">
                                <textarea name="description" id="description" class="form-control" cols="30" rows="20"
                                    placeholder="Description"
                                    style="min-height:80px">{{ trim(old('description')) }}</textarea>
                                <x-error key="amount" />
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success mt-3">Transfer</button>
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
        getAccountDetails();
        $('[name=account_number]').on('keyup', e => {
            $('#account_number_error').html('');
            var account_number = $(e.currentTarget).val();
            if (isNaN(account_number)) {
                $('#account_number_error').html('Account number can only be numbers.');
            } else if (account_number.length != 10) {
                $('#account_number_error').html('Account number must be 10 digits.');
            } else {
                getAccountDetails();
            }
        })

        $('[name=account_type]').on('change', () => getAccountDetails())

        function getAccountDetails() {
            var account_number = $('[name=account_number]').val();
            var account_type = $('[name=account_type]').val();
            if (account_number.length != 10 || isNaN(account_number) || account_type == '') {
                return;
            }
            $('#account_name').val("Loading...")
            var url =
                `{{ route('user.transfer.local.details') }}?account_number=${account_number}&account_type=${account_type}`;
            fetch(url).then(res => {
                if (res.ok) {
                    return res.json()
                } else {
                    toast('Failed to load recipient details', 'error');
                    $('#account_name').val("")
                    throw Error('');
                }
            }).then(response => {
                $('#account_name').val("")
                console.log(response)
                if (response.same == 1) {
                    toast('You can not transfer to yourself.', 'error');
                } else {
                    $('#account_name').val(response.name)
                }
            })
        }
    </script>
@endpush
