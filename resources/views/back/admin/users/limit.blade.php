@extends('layouts.back')

@section('title', 'Change Limit')
@section('content')
<div class="container-fluid">
    <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
        <h3 class="mb-3 me-auto">@yield('title')</h3>
    </div>

    <div class="card col-lg-7 m-auto">
        <div class="card-body">
            <form class="p-3" action="{{ route('admin.users.limit.update',$user->id) }}" method="post"
                enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    {{-- <div class="basic-form">
                        <div class="mb-3 mb-0">
                            <label for="" class="d-block"><strong>Status</strong></label>
                            @foreach (config('constants.account_status') as $status)
                            <label class="radio-inline me-3"><input type="radio" name="status" value="{{$status}}">
                                {{ucfirst($status)}}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="basic-form">
                        <div class="mb-3 mb-0">
                            <label for="" class="d-block"><strong>Transfer Limit</strong></label>
                            @foreach (config('constants.limits') as $limit)
                            <label class="radio me-3"><input type="radio" name="limit" value="{{$limit}}">
                                {{ucfirst($limit)}}</label>
                            @endforeach
                        </div>
                    </div> --}}
                    <div class="mb-3 mb-0 fs-18">
                        <label for="" class="d-block"><strong>Transfer Limit</strong></label>
                        @foreach (config('constants.limits') as $k => $limit)
                        <div class="radio">
                            <label><input value="{{$k}}" type="radio" name="limit" @if($k == $user->limit) checked @endif> {{ucfirst($limit)}} </label></label>
                        </div>
                        @endforeach
                    </div>


                    {{-- <div class="form-group col-md-6">
                        <label for="firstname"><strong>Firstname</strong></label>
                        <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}">
                    <x-error key="firstname" />
                </div>

                <div class="form-group col-md-6">
                    <label for="lastname"><strong>Lastname</strong></label>
                    <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}">
                    <x-error key="lastname" />
                </div>
                <div class="form-group col-md-6">
                    <label for="middlename"><strong>Middlename</strong></label>
                    <input type="text" class="form-control" name="middlename" value="{{ $user->middlename }}">
                    <x-error key="middlename" />
                </div>

                <div class="form-group col-md-6">
                    <label for="gender"><strong>Gender</strong></label>
                    <select name="gender" id="" class="form-select form-select-lg">
                        <option value="">Select gender</option>
                        @foreach (config('constants.genders') as $gender)
                        <option value="{{ $gender }}" @if ($user->gender == $gender) selected @endif>
                            {{ ucfirst($gender) }}</option>
                        @endforeach
                    </select>
                    <x-error key="gender" />
                </div>

                <div class="form-group col-md-6">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    <x-error key="email" />
                </div>

                <div class="form-group col-md-6">
                    <label for="phone"><strong>Phone number</strong></label>
                    <input type="phone" class="form-control" name="phone" value="{{ $user->phone }}">
                    <x-error key="password" />
                </div>

                <div class="form-group col-md-6">
                    <label for="phone"><strong>Account type</strong></label>
                    <select name="account_type" id="" class="form-select form-select-lg">
                        <option value="">Select account type</option>
                        @foreach (config('constants.account_types') as $account_type)
                        <option value="{{ $account_type }}" @if ($user->account_type == $account_type) selected
                            @endif>{{ ucfirst($account_type) }}</option>
                        @endforeach
                    </select>
                    <x-error key="account_type" />
                </div>

                <div class="form-group col-md-6">
                    <label for="country"><strong>Country</strong></label>
                    <input type="country" class="form-control" name="country" value="{{ $user->country }}">
                    <x-error key="country" />
                </div>

                <div class="form-group col-md-6">
                    <label for="state"><strong>State / Province</strong></label>
                    <input type="state" class="form-control" name="state" value="{{ $user->state }}">
                    <x-error key="state" />
                </div>

                <div class="form-group col-md-6">
                    <label for="city"><strong>city</strong></label>
                    <input type="city" class="form-control" name="city" value="{{ $user->city }}">
                    <x-error key="city" />
                </div>

                <div class="form-group col-md-8">
                    <label for="address"><strong>Address</strong></label>
                    <input type="address" class="form-control" name="address" value="{{ $user->address }}">
                    <x-error key="address" />
                </div>

                <div class="form-group col-md-4">
                    <label for="zip_code"><strong>Zip code</strong></label>
                    <input type="zip_code" class="form-control" name="zip_code" value="{{ $user->zip_code }}">
                    <x-error key="zip_code" />
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label"><strong>Date of Birth</strong></label>
                    <input name="dob" type="text" class="form-control" placeholder="Pick a date" id="mdate"
                        value="{{ $user->dob }}">
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
                        <img src="{{ profile_picture() }}" class="img-responsive" style="width:100%;height:auto;" />
                    </div>
                </div> --}}

        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-outline-primary"> Update </button>
        </div>
        </form>
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
