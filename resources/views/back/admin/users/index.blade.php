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
                <div class="text-end">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add User</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Balance</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ !is_null($user->dob) ? $user->dob->toDateString() : ''}}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ '$' . number_format($user->balance) }}</td>
                                <td> <a href="{{ route('admin.users.change.status',$user->id) }}" class="btn btn-outline-{{statusColor($user->status)}} btn-sm">{{ ucfirst($user->status)}}</a> </td>
                                <td>
                                    <div class="dropdown custom-dropdown">
                                        <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-cog fs-18"></i>
                                        </div>
                                        <form action="" method="POST" class="dropdown-menu dropdown-menu-end" style="margin: 0px;">
                                            @csrf
                                            <a href="{{route('admin.users.login',$user->id)}}" target="_blank" rel="noopener" class="dropdown-item"><i class="fa fa-lock"></i> Login
                                                as</a>
                                            <a href="{{ route('admin.users.limit.page',$user->id)}}" class="dropdown-item"><i class="fa fa-lock"></i>
                                                Limit</a>
                                            <a href="{{route('admin.users.edit',$user->id)}}" class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="{{ route('admin.users.password.update',$user->id)}}" class="dropdown-item"><i class="fa fa-key"></i>
                                                Reset Passw.</a>
                                            <a href="{{route('admin.users.delete',$user->id)}}" class="dropdown-item delete"><i class="fa fa-trash"></i> Delete</a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="text-center">No users found!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center pt-3">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
