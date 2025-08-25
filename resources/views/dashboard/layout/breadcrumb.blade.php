<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                @auth
                @php
                    // Set to Pakistan timezone (UTC+5)
                    $pakistanTime = now()->setTimezone('Asia/Karachi');
                    $hour = $pakistanTime->format('H');
                    
                    if ($hour < 12) {
                        $greeting = 'Good Morning';
                    } elseif ($hour < 17) {
                        $greeting = 'Good Afternoon';
                    } elseif ($hour < 20) {
                        $greeting = 'Good Evening';
                    } else {
                        $greeting = 'Good Night';
                    }
                @endphp
              
              <span class="text-light-emphasis"> {{ $greeting }}, {{ Auth::user()->name }} ! </span>
             
            @else
                Welcome!
            @endauth
            </h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                   <li class="breadcrumb-item">
    <a href="{{ url('/') }}">Dashboard</a>
</li>

@if(request()->routeIs('cfadmin.products.*'))
    <li class="breadcrumb-item active" aria-current="page">Products</li>
@elseif(request()->routeIs('cfadmin.permissions.*'))
    <li class="breadcrumb-item active" aria-current="page">Permissions</li>
@elseif(request()->routeIs('cfadmin.orders.*'))
    <li class="breadcrumb-item active" aria-current="page">Orders</li>
@endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>