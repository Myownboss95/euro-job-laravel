@extends('layouts.back')
@section('title', 'User Dashboard')

@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
        <h2 class="mb-3 me-auto">Dashboard</h2>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-5">
                    <strong>Tip:</strong>
                    <p class="mb-3">Change your transfer pin and account password to keep your account safe</p>

                    <span class=""><strong>Available Balance</strong></span>
                    <h3 class="mb-3">USD {{ number_format(auth('user')->user()->balance, 2) }}</h3>

                    <span class=""><strong>Ledger Balance</strong></span>
                    <h4 class="mb-3">USD {{ number_format(auth('user')->user()->balance + auth('user')->user()->pending_balance, 2) }}</h4>

                    <strong class="">Your Account Number</strong>
                    <h5>{{ auth('user')->user()->account_number ?? 89299392093 }}</h5>

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <strong>Account Holder</strong>
                            <p>{{ auth('user')->user()->name }}</p>
                        </div>
                        <div class="col-md-4">
                            <strong>Account Type</strong>
                            <p>{{ strtoupper(auth('user')->user()->account_type) }}</p>
                        </div>
                        <div class="col-md-4">
                            <strong>Account Status</strong>
                            <p>{{ strtoupper(auth('user')->user()->status) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <p><strong>TOTAL BOOK BALANCE</strong></p>
                            <span class="fs-24">USD</span>
                            <h2>{{ number_format(auth('user')->user()->balance, 2) }}</h2>
                            <p class="text-success">as of {{ now()->format('jS F, Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <p><strong>ACCOUNT LOGGEDIN FROM:</strong></p>
                            @if (\Browser::isMobile())
                            <h3><i class="fa fa-phone"></i></h3>
                            @elseif (\Browser::isTablet())
                            <h3><i class="fa fa-tablet"></i></h3>
                            @elseif (\Browser::isDesktop())
                            <h3><i class="fa fa-desktop"></i></h3>
                            @endif
                            <p><strong>{{ \Browser::browserName() . ' on ' . \Browser::platformName() }}</strong></p>

                            <p class="text-info mt-1 mb-0 pb-0">Current IP Address</p>
                            <h4 class="m-0 p-0">
                                {{ request()->ip() }}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Last Transfer</h4>
                            <div class="table-responsive">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>Reference</th>
                                            <th>Beneficiary</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse (auth('user')->user()->transactions()->where('type','transfer')->latest()->take(1)->get() as $transaction)
                                        <tr>
                                            <td>{{ $transaction->reference }}</td>
                                            <td>{{ optional($transaction->meta)->to }}</td>
                                            <td>{{ number_format($transaction->amount, 2) }}</td>
                                            <td>{{ $transaction->status }}</td>
                                            <td>{{ $transaction->created_at->format('d m Y') }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No recent transfers</td>
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Recent Transfers</h3>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Reference</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (auth('user')->user()->transactions()->latest()->take(10)->get() as $t)
                                <tr>
                                    <td>{{$t->reference}}</td>
                                    <td>${{number_format($t->amount,2)}}</td>
                                    <td>{{$t->description}}</td>
                                    <td>{{$t->type}}</td>
                                    <td>{{$t->status}}</td>
                                    <td>{{$t->created_at->format('d m Y')}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="7">No transactions yet.</td>
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
@endsection

@push('js')
<!-- Apex Chart -->
<script src="/assets/back/vendor/apexchart/apexchart.js"></script>
<script src="/assets/back/js/dashboard/dashboard-1.js"></script>
<script src="/assets/back/js/dashboard/dotted-map-init.js"></script>

@endpush
