@extends('layouts.back')
@section('title', 'My Profile')
@section('content')
<div class="container-fluid">
    <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
        <h2 class="mb-3 me-auto">@yield('title')</h2>
    </div>

    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo rounded"></div>
                </div>
                <div class="profile-info">
                    <div class="profile-photo">
                        <img src="{{profile_picture()}}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-details">
                        <div class="profile-name px-3 pt-2">
                            <h4 class="text-primary mb-0">{{ $user->name }}</h4>
                            <p>Full name</p>
                        </div>
                        <div class="profile-email px-2 pt-2">
                            <h4 class="text-muted mb-0">{{ $user->email }}</h4>
                            <p>Email</p>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                    </g>
                                </svg></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4">
            {{-- <div class="row"> --}}
            <div class="card" style="height: auto">
                <div class="card-body">
                    <h4 class="mb-4 card-title">Account Information</h4>
                    <div class="mb-4 table-responsive">
                        <table class="table mb-0 table-nowrap">
                            <tbody>
                                <tr>
                                    <th scope="row">Account number :</th>
                                    <td>{{$user->account_number}}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Account Type :</th>
                                    <td>{{ucfirst($user->account_type)}}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Account Balance :</th>
                                    <td>${{number_format($user->balance,2)}} </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" style="height:auto">
                <div class="card-body">
                    <h4 class="mb-4 card-title">Personal Information</h4>
                    <div class="table-responsive">
                        <table class="table mb-0 table-nowrap">
                            <tbody>

                                <tr>
                                    <th scope="row">Name :</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile :</th>
                                    <td>{{$user->phone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td>bexovic129@game4hr.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender:</th>
                                    <td>{{ucfirst($user->gender)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" style="height: auto;">
                <div class="card-body">
                    <h4 class="mb-4 card-title">Address Information</h4>
                    <div class="table-responsive">
                        <table class="table mb-0 table-nowrap">
                            <tbody>

                                <tr>
                                    <th scope="row">Country :</th>
                                    <td>{{$user->country}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Stat/Region :</th>
                                    <td>{{$user->state}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">City :</th>
                                    <td>{{$user->city}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address :</th>
                                    <td>{{$user->address}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Zip/Postal :</th>
                                    <td>{{$user->zip_code}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8" style="height: auto">
            <div class="card" style="height: auto">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#transactions" data-bs-toggle="tab" class="nav-link show active">Transactions</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="transactions" class="tab-pane fade show active">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>Reference</th>
                                                    <th>Amount</th>
                                                    <th>Type</th>
                                                    <th>Date/Time</th>
                                                    <th>Description</th>
                                                    <th>Bank</th>
                                                    <th>Recipient</th>
                                                    <th>Account No.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($transactions as $transaction)
                                                <tr>
                                                    <td>{{ $transaction->reference }}</td>
                                                    <td>{{ '$' . number_format($transaction->amount) }}</td>
                                                    <td>@if($transaction->type == 'transfer') <span class="badge badge-danger">Debit</span> @else <span class="badge badge-success">Credit</span> @endif</td>
                                                    <td>{{ $transaction->created_at }}</td>
                                                    <td>{{ $transaction->description ?? '--'}}</td>
                                                    <td>{{ $transaction->meta?->bank ?? '__'}}</td>
                                                    <td>{{ $transaction->meta?->recipient_name ?? '__'}}</td>
                                                    <td>{{ $transaction->meta?->account_number ?? '__'}}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="10" class="text-center">No transactions found!</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center pt-3">
                                            {{ $transactions->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
