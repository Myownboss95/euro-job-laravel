@extends('layouts.back')
@section('title', 'Inter Bank Transfer')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
            <h3 class="mb-3 me-auto">@yield('title')</h3>
        </div>
        <div class="row">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.transfer.process') }}" method="post" enctype="multipart/form-data"
                            class="row p-5">
                            @csrf
                            <h4>Transfer Details</h4>

                            <div class="form-group col-md-6">
                                <input type="text" id="bank" name="bank" class="form-control" placeholder="Bank name"
                                    value="{{ old('bank') }}">
                                <x-error key="bank" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" id="account_number" name="account_number" class="form-control"
                                    placeholder="Account Number" value="{{ old('account_number') }}">
                                <x-error key="account_number" />
                            </div>

                            <div class="form-group col-md-6">
                                <select name="account_type" id="account_type" class="form-select form-select-lg fs-14"
                                    style="font-size:14px">
                                    <option value="">Choose Account type</option>
                                    @foreach (config('constants.account_types') as $account_type)
                                        <option value="{{ $account_type }}" @if (old('account_type') == $account_type) selected @endif>{{ $account_type }}</option>
                                    @endforeach
                                </select>
                                <x-error key="account_type" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" id="recipient_name" name="recipient_name" class="form-control"
                                    placeholder="Recipient Name" value="{{ old('recipient_name') }}">
                                <x-error key="recipient_name" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" id="swift_code" name="swift_code" class="form-control"
                                    placeholder="Swift code" value="{{ old('swift_code') }}">
                                <x-error key="swift_code" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" id="iban" name="iban" class="form-control" placeholder="IBAN number"
                                    value="{{ old('iban') }}">
                                <x-error key="iban" />
                            </div>


                            <div class="form-group col-md-6">
                                <input type="text" id="routing" name="address" class="form-control" placeholder="Routing number"
                                    value="{{ old('routing') }}">
                                <x-error key="routing" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" id="country" name="country" class="form-control" placeholder="Country"
                                    value="{{ old('country') }}">
                                <x-error key="country" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" id="address" name="address" class="form-control" placeholder="Bank address"
                                    value="{{ old('address') }}">
                                <x-error key="address" />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" id="amount" name="amount" class="form-control" placeholder="Amount"
                                    value="{{ old('amount') }}">
                                <x-error key="amount" />
                            </div>

                            <div class="form-group">
                                <textarea name="description" id="description" class="form-control" cols="30" rows="20"
                                    placeholder="Description"
                                    style="min-height:80px">{{ trim(old('description')) }}</textarea>
                                <x-error key="description" />
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
        $('[name=account_number]').on('keyup', e => {
            $('#account_number_error').html('');
            var account_number = $(e.currentTarget).val();
            if (isNaN(account_number)) {
                $('#account_number_error').html('Account number can only be numbers.');
            } else if (account_number.length != 10) {
                $('#account_number_error').html('Account number must be 10 digits.');
            }
        })
    </script>
@endpush
