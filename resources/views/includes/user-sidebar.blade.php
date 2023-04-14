<ul class="metismenu" id="menu">
    <li><a href="/" class="" aria-expanded="false">
            <i class="flaticon-025-dashboard"></i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>

    <li><a href="javascript:void(0);">
            <h4>Personal Menu</h4>
        </a></li>


    <li><a href="{{ route('user.profile.index') }}" aria-expanded="false">
            <i class="flaticon-381-user-1"></i>
            <span class="nav-text">My Profile</span>
        </a>
    </li>

    <li><a href="{{ route('user.statement') }}" aria-expanded="false">
            <i class="flaticon-041-graph"></i>
            <span class="nav-text">My Statement</span>
        </a>
    </li>

    <li><a href="javascript:void(0);">
            <h4>Transfers</h4>
        </a></li>

    <li><a href="{{ route('user.transfer.local') }}" aria-expanded="false">
            <i class="flaticon-381-user-1"></i>
            <span class="nav-text">Domestic Transfer</span>
        </a>
    </li>

    <li><a href="{{ route('user.transfer.inter.bank') }}" aria-expanded="false">
            <i class="flaticon-041-graph"></i>
            <span class="nav-text">InterBank Transfer</span>
        </a>
    </li>


    <li><a href="javascript:void(0);">
            <h4>Security</h4>
        </a></li>

    <li><a href="{{ route('user.security.password.page') }}" aria-expanded="false">
            <i class="flaticon-381-lock-1"></i>
            <span class="nav-text">Change Password</span>
        </a>
    </li>

    <li class="mb-5"><a href="{{ route('user.security.two-factor.page') }}" aria-expanded="false">
            <i class="flaticon-381-lock-2"></i>
            <span class="nav-text">Security Question</span>
        </a>
    </li>

</ul>
