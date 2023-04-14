@extends('layouts.back')

@section('title', 'Transactions')
@section('content')
<div class="container-fluid">
    <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
        <h2 class="mb-3 me-auto">@yield('title')</h2>
    </div>
    <div class="row">
        {{-- <div class="col-md-3 ">
            <select name="user" id="user" class="form-select form-select-lg">
                <option value="" selected>All</option>
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="col-md-3 ">
        <select name="type" id="type" class="form-select form-select-lg">
            <option value="" selected>All</option>
            @foreach (['deposit','transfer'] as $type)
            <option value="{{$type}}">{{ucfirst($type)}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3 ">
        <select name="status" id="status" class="form-select form-select-lg">
            <option value="" selected>All</option>
            @foreach (config('constants.transaction_status') as $status)
            <option value="{{$status}}">{{ucfirst($status)}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" class="form-control form-control-sm" placeholder="Search...">
    </div> --}}
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <label for="newDate" class="btn btn-outline-primary">
                        <i class="fa fa-clock"></i> Change Date
                    </label>
                </div>
                <div id="inject-contents">
                    @include('back.admin.transactions.table')
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<input type="text" name="newDate" id="newDate" style="width:0; border:none;">
@endsection

@push('css')
<link href="/assets/back/vendor/dropzone/dist/dropzone.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{-- <script src="/assets/back/vendor/ckeditor/ckeditor.js"></script> --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="/assets/back/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<link href="/assets/back/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@push('js')
<script src="/assets/back/vendor/moment/moment.min.js"></script>
<script src="/assets/back/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script src="/assets/back/vendor/datatables/js/jquery.dataTables.min.js"></script>

<script>
    $(function(){
        var totalTransactions = $('[name=transactions]');

        $(document).on('change','#check_all',e=>{
            totalTransactions.each((index,element) => {
                $(e.currentTarget).prop('checked') == false ? $(element).prop('checked',false) : $(element).prop('checked',true);
            })
        })

        $(document).on('change','[name=transactions]',e=>{
            var selectedTransactions = $('[name=transactions]:checked');
            totalTransactions.length == selectedTransactions.length?$('#check_all').prop('checked',true):$('#check_all').prop('checked',false);
        });

        $(document).on('click','label[for=newDate]',e=>{
            var selectedTransactions = $('[name=transactions]:checked');
            if(selectedTransactions.length < 1){
                toast("please select at least one transaction to change date",'error');
                return false;
            }
        })

        $('table').DataTable();

        $(document).on('change','#newDate', e => {
            var selectedTransactions = $('[name=transactions]:checked');
            if(selectedTransactions.length < 1){
                toast("please select at least one transaction to change date",'error');
                return false;
            }
            var transactions = [], date = $(e.currentTarget).val();
            selectedTransactions.each((index,element) => {
                transactions.push($(element).data('id'));
            })

            $.ajax({
                method:"POST",
                url: "{{route('admin.transactions.change.date')}}",
                data: {
                    transactions,
                    _token:"{{csrf_token()}}",
                    date
                }
            }).then(res => {
                toast(res.message)
                $('input:checked').each((index,element)=>{
                    $(element).prop('checked',false);
                })

            }, err => {
                toast("An error occured",'error');
                console.error(err)
            })
        })
        $('#newDate').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD H:mm:ss',
            maxDate: new Date()
        });
    })
</script>
@endpush
