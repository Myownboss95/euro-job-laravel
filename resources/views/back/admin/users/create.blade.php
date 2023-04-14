@extends('layouts.back')

@section('title', 'Users')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto">@yield('title')</h2>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="col-lg-9 pt-3 pb-3 m-auto" action="{{ route('admin.users.store') }}" method="post"
                        enctype="multipart/form-data">
                        <div class="row">


                            @csrf

                            <div class="form-group col-md-6">
                                <label for="firstname"><strong>Firstname</strong></label>
                                <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                                <x-error key="firstname" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="lastname"><strong>Lastname</strong></label>
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                <x-error key="lastname" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="middlename"><strong>Middlename</strong></label>
                                <input type="text" class="form-control" name="middlename" value="{{ old('middlename') }}">
                                <x-error key="middlename" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone"><strong>Gender</strong></label>
                                <select name="gender" id="" class="form-select form-select-lg">
                                    <option value="">Select gender</option>
                                    @foreach (config('constants.genders') as $gender)
                                        <option value="{{ $gender }}">{{ ucfirst($gender) }}</option>
                                    @endforeach
                                </select>
                                <x-error key="gender" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email"><strong>Email</strong></label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                <x-error key="email" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone"><strong>Phone number</strong></label>
                                <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}">
                                <x-error key="password" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone"><strong>Account type</strong></label>
                                <select name="account_type" id="" class="form-select form-select-lg">
                                    <option value="">Select account type</option>
                                    @foreach (config('constants.account_types') as $account_type)
                                        <option value="{{ $account_type }}">{{ ucfirst($account_type) }}</option>
                                    @endforeach
                                </select>
                                <x-error key="account_type" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="country"><strong>Country</strong></label>
                                <input type="country" class="form-control" name="country" value="{{ old('country') }}">
                                <x-error key="country" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="state"><strong>State / Province</strong></label>
                                <input type="state" class="form-control" name="state" value="{{ old('state') }}">
                                <x-error key="state" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="city"><strong>city</strong></label>
                                <input type="city" class="form-control" name="city" value="{{ old('city') }}">
                                <x-error key="city" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="address"><strong>Address</strong></label>
                                <input type="address" class="form-control" name="address" value="{{ old('address') }}">
                                <x-error key="address" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="zip_code"><strong>Zip code</strong></label>
                                <input type="zip_code" class="form-control" name="zip_code"
                                    value="{{ old('zip_code') }}">
                                <x-error key="zip_code" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label"><strong>Date of Birth</strong></label>
                                <input name="dob" value="{{ old('dob') }}" type="text" class="form-control"
                                    placeholder="2017-06-04" id="mdate">
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

                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary"> Create </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/assets/back/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">
@endpush

@push('js')
    <script src="/assets/back/vendor/moment/moment.min.js"></script>
    <script src="/assets/back/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script>
        $('#mdate').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        $('[name=image]').on('change', e => {
            var _this = e.currentTarget
            var file = $(_this).prop('files')[0]
            var passed = false;
            ['png', 'jpeg', 'jpg'].forEach((value, index) => {
                if (file.type == 'image/' + value) {
                    passed = true;
                    return;
                }
            })

            if (!passed) {
                $('#image_error').html('Only png, jpg, and jpeg are allowed');
                return;
            }
            var url = URL.createObjectURL(file);
            // $(_this).next('label').find('span').hide();
            $('#preview').html(
                `<img src="${url}" class="img-responsive" style="width:100%;height:auto;"/>`
            )
        })
    </script>
@endpush
