@extends('layouts.activation')
@section('title', 'Account Setup')

@section('content')
    <form action="{{ route('user.activation.activate') }}" method="POST" enctype="multipart/form-data" class="row">
        @csrf

        <div class="mb-3 form-group col-md-6">
            <input type="text" class="form-control" placeholder="Firstname" name="firstname" value="{{auth('user')->user()->firstname}}" readonly disabled>
        </div>
        <div class="mb-3 form-group col-md-6">
            <input type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{auth('user')->user()->lastname}}" readonly disabled>
        </div>
        <div class="mb-3 form-group col-md-6">
            <input type="text" class="form-control" value="{{ old('middlename') ?? '' }}" placeholder="Middlename (optional)" name="middlename">
        </div>

        <div class="mb-3 form-group col-md-6">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{auth('user')->user()->email}}" readonly disabled>
        </div>

        <div class="mb-3 form-group col-md-6">
            <input type="text" class="form-control" value="{{ old('phone') }}" placeholder="Phone ex. +1234567910" name="phone">
        </div>

        <div class="mb-3 form-group col-md-6">
            <input name="dob" value="{{ old('dob') }}" type="text" class="form-control"
                placeholder="Date of Birth" id="mdate">
        </div>

        <div class="mb-3 form-group col-md-6">
            <select name="account_type" id="" class="form-control-lg form-select">
                <option value="">Select Account type</option>
                @foreach (config('constants.account_types') as $account_type)
                    <option value="{{ $account_type }}">{{ $account_type}}</option>
                @endforeach
            </select>
            <x-error key="account_type" />
        </div>

        <div class="mb-3 form-group col-md-6">
            <input type="country" class="form-control" name="country" value="{{ old('country') }}" placeholder="Country">
            <x-error key="country" />
        </div>

        <div class="mb-3 form-group col-md-6">
            <input type="state" class="form-control" name="state" value="{{ old('state') }}" placeholder="State / Province">
            <x-error key="state" />
        </div>

        <div class="mb-3 form-group col-md-6">
            <input type="city" class="form-control" name="city" value="{{ old('city') }}" placeholder="City">
            <x-error key="city" />
        </div>

        <div class="mb-3 form-group col-md-9">
            <input type="address" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address">
            <x-error key="address" />
        </div>

        <div class="mb-3 form-group col-md-3">
            <input type="zip_code" class="form-control" name="zip_code"
                value="{{ old('zip_code') }}" placeholder="Zip code">
            <x-error key="zip_code" />
        </div>



        <div class="form-group col-md-6 row">
            <div class="col-6">
                <label for="image"><strong>Profile Photo</strong></label>
                <input type="file" name="image" id="image" style="display: none">
                <label for="image" class="d-block">
                    <span class="btn btn-outline-warning">
                        <i class="fa fa-upload"></i>
                        Upload
                    </span>
                </label>
                <x-error key="image" />
            </div>
            <div class="col-6" id="preview">

            </div>
        </div>


            <button type="submit" class="btn btn-primary mt-3">Complete</button>
        </div>
    </form>
@endsection

@push('js')
    <script>
        $('input[type=file]').on('change', (e) => {
            var _this = e.currentTarget
            var file = $(_this).prop('files')[0]
            var passed = false;
            ['png', 'jpeg', 'jpg'].forEach((value, index) => {
                if (file.type == 'image/' + value) {
                    passed = true;
                    return;
                }
            })

            if(!passed){
                alert('Only png, jpg, and jpeg are allowed');
                return;
            }
            var url = URL.createObjectURL(file);
            $(_this).next('label').find('span').hide();
            $(_this).next('label').find('.preview').html(
                `<img src="${url}" class="img-responsive" style="width:80px;height:40px; border-radius:40px;"/>`
            )
        })
    </script>
@endpush
