 <!-- .dropdown -->
@auth
    
 <li class="dropdown user-dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <div class="user-toggle">
            <div class="user-avatar sm">
                <em class="icon ni ni-user-alt"></em>
            </div>
            <div class="user-info d-none d-md-block">
                <div class="user-status">Administrator</div>
                <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
            </div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
            <div class="user-card">
                <div class="user-avatar">
                    <span>AB</span>
                </div>
                <div class="user-info">
                    <span class="lead-text">Abu Bin Ishtiyak</span>
                    <span class="sub-text">info@softnio.com</span>
                </div>
            </div>
        </div>
        <div class="dropdown-inner">
            <ul class="link-list">
                <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
            </ul>
        </div>
        <div class="dropdown-inner">
            <ul class="link-list">

                <li>
                    <form method="POST" action="/signout">
                        @csrf
                <button>    <a href="/signout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></button>
                </form>
                </li>
            </ul>
        </div>
    </div>
</li>
@endauth
