<div class="table-responsive">
    <table class="table table-striped table-responsive-sm">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id="check_all"></th>
                <th>Reference</th>
                <th>User</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transactions as $tran)
            <tr>
                <td><input type="checkbox" name="transactions" data-id="{{$tran->id}}"></td>
                <td>{{$tran->reference}}</td>
                <td>{{$tran->user->name}}</td>
                <td>${{number_format($tran->amount)}}</td>
                <td>{{$tran->type}}</td>
                <td>{{$tran->status}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="text-center">No transactions found!</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center pt-3">
        {{-- {{ $transactions->links() }} --}}
    </div>
</div>
