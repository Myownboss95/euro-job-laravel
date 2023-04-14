@extends('layouts.back')

@section('title', 'Deposit')
@section('content')
<div class="container-fluid">
    <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
        <h2 class="mb-3 me-auto">Deposit</h2>
    </div>

    <div class="col-lg-5 col-sm-12 m-auto">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.deposit.deposit')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="amount"><strong>User</strong></label>
                        <select name="user" id="user" class="form-control">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->firstname}}</option>
                            @endforeach
                        </select>
                        <x-error :key="'user'" />
                    </div>

                    <div class="form-group">
                        <label for="amount"><strong>Amount</strong></label>
                        <input class="form-control" type="text" id="amount" name="amount" placeholder="Amount" value="{{old('amount')}}">
                        <x-error :key="'amount'" />
                    </div>

                    <div class="form-group">
                        <label for="status"><strong>status</strong></label>
                        <select name="status" id="status" class="form-select">
                            <option value="success" @if(old('status') == 'success') selected @endif>Success</option>
                            <option value="failed" @if(old('status') == 'failed') selected @endif>Fail</option>
                            <option value="pending" @if(old('status') == 'pending') selected @endif>Pending</option>
                        </select>
                        <x-error key="status" />
                    </div>

                    <div class="form-group">
                        <label for="description"><strong>Description</strong></label>
                        <textarea name="description" id="description" cols="30" rows="20" class="form-control" placeholder="Description" style="height:70px"></textarea>
                        <x-error :key="'description'" />
                    </div>

                    <div class="form-group">
                        <label for="date"><strong>Date</strong></label>
                        <input name="date" id="date" class="form-control" placeholder="Date" type="text" />
                        <x-error key="date" />
                    </div>

                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-outline-primary">Deposit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@push('css')
<link href="/assets/back/vendor/dropzone/dist/dropzone.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{-- <script src="/assets/back/vendor/ckeditor/ckeditor.js"></script> --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="/assets/back/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
@endpush


@push('js')
<script src="/assets/back/vendor/moment/moment.min.js"></script>
<script src="{{asset('assets/back/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script>
    $('#date').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD H:mm:ss',
        maxDate: new Date()
    });
</script>
@endpush
