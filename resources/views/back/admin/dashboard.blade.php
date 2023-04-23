@extends('layouts.back')
@section('title', 'Admin Dashboard')

@section('content')
    <!-- row -->
    <div class="container-fluid">
        <!-- row -->
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="card-data me-2">
                    <h5>Users</h5>
                    <h2 class="fs-40 font-w600">{{ $users->count() }}</h2>
                </div>
                <div><span class="donut1" data-peity='{ "fill": ["var(--primary)", "rgba(242, 246, 252)"]}'>1</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="card-data me-2">
                    <h5>Transfers</h5>
                    <h2 class="fs-40 font-w600">{{ $transfers->count() }}</h2>
                </div>
                <div><span class="donut1" data-peity='{ "fill": ["rgb(56, 226, 93,1)", "rgba(242, 246, 252)"]}'>1</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div class="card-data me-2">
                    <h5>Deposits</h5>
                    <h2 class="fs-40 font-w600">{{ $deposits->count() }}</h2>
                </div>
                <div><span class="donut1" data-peity='{ "fill": ["rgb(255, 135, 35,1)", "rgba(242, 246, 252)"]}'>1</span>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-xl-9 col-xxl-8">
        <div class="row">
            {{-- Recent Deposits --}}
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0  flex-wrap">
                        <h4 class="fs-20">Deposits</h4>
                    </div>
                    <div class="card-body py-0">
                        <div class="table-responsive">
                            <table class="table stripped">
                                <thead>
                                    <tr>
                                        <th>Reference</th>
                                        <th>Amount</th>
                                        <th>User</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($deposits->take(5) as $deposit )

                                    <tr>
                                        <td>{{$deposit->reference}}</td>
                                        <td>{{format_money($deposit->amount)}}</td>
                                        <td>{{$deposit->user->name}}</td>
                                        <td>{{$deposit->created_at->toDateTimeString()}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No recent deposits!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Recent transfers --}}
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0  flex-wrap">
                        <h4 class="fs-20">Debit Transactions</h4>
                    </div>
                    <div class="card-body py-0">
                        <div class="table-responsive">
                            <table class="table stripped">
                                <thead>
                                    <tr>
                                        <th>Reference</th>
                                        <th>Amount</th>
                                        <th>User</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transfers->take(5) as $withdrawal )

                                    <tr>
                                        <td>{{$withdrawal->reference}}</td>
                                        <td>{{format_money($deposit->amount))}}</td>
                                        <td>{{$withdrawal->user->name}}</td>
                                        <td>{{$withdrawal->created_at->toDateTimeString()}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No recent transfers!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
            {{-- Recent Users --}}
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0  flex-wrap">
                        <h4 class="fs-20">Recent Users</h4>
                    </div>
                    <div class="card-body py-0">
                        <div class="table-responsive">
                            <table class="table stripped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users->take(5) as $user )

                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->status}}</td>
                                        <td>{{$user->created_at->toDateTimeString()}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No recent users!</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


    </div>
@endsection

@push('js')
    <!-- Apex Chart -->
    <script src="/assets/back/vendor/apexchart/apexchart.js"></script>
    <script src="/assets/back/js/dashboard/dashboard-1.js"></script>
    <script src="/assets/back/js/dashboard/dotted-map-init.js"></script>

@endpush

