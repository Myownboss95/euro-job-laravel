<ul class="metismenu" id="menu">
    <li><a href="/" class="" aria-expanded="false">
            <i class="flaticon-025-dashboard"></i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>

    <li><a href="{{ route('admin.users.index') }}" aria-expanded="false">
            <i class="flaticon-381-user-1"></i>
            <span class="nav-text">Users</span>
        </a>
    </li>

    <li><a href="{{ route('admin.deposit.index') }}" aria-expanded="false">
            <i class="flaticon-041-graph"></i>
            <span class="nav-text">Deposit</span>
        </a>
    </li>
    <li><a href="{{ route('admin.deposit.withdraw.index') }}" aria-expanded="false">
        <i class="flaticon-041-graph"></i>
        <span class="nav-text">Withdraw</span>
    </a>
</li>

    <li><a href="{{route('admin.transactions.index')}}" aria-expanded="false">
            <i class="flaticon-038-gauge"></i>
            <span class="nav-text">Transactions</span>
        </a>
    </li>

    <li><a href="{{route('admin.email.index')}}" aria-expanded="false">
            <i class="flaticon-381-folder"></i>
            <span class="nav-text">Send emails</span>
        </a>
    </li>



    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
            <i class="flaticon-381-settings-1"></i>
            <span class="nav-text">Settings</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{route('admin.settings.security.index')}}">Security</a></li>
            <li><a href="{{route('admin.settings.contact.index')}}">Contact Details</a></li>
        </ul>
    </li>
</ul>
