@extends('layouts.back')

@section('title', 'My Statement')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h4 class="mb-3 me-auto">@yield('title')</h4>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
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
@endsection
