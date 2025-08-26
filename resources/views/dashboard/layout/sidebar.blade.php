    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/dashboard"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu text-light-emphasis">Dashboard</span></a></li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu text-light-emphasis">Applications</span></li>



                    {{-- Permissions --}}
                    {{-- @can('view permission') --}}
                    <li class="sidebar-item {{ request()->is('permissions*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('permissions.index') }}">
                            <i data-feather="key" class="feather-icon"></i>
                            <span class="hide-menu  text-light-emphasis">Permissions</span>
                        </a>
                    </li>
                    {{-- @endcan --}}


                    <li class="sidebar-item {{ request()->is('roles*') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('roles.index') }}">
                            <i data-feather="shield" class="feather-icon"></i>
                            <span class="hide-menu  text-light-emphasis">Roles</span>
                        </a>
                    </li>


                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                class="hide-menu text-light-emphasis">Main Page </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">

                          {{-- Spotlight --}}
<li class="sidebar-item">
    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
        <span class="hide-menu text-light-emphasis">Spotlight </span>
    </a>
    <ul aria-expanded="false" class="collapse second-level base-level-line">
        <li class="sidebar-item"><a href="{{ route('spotlight.index') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Index Page</span></a>
        </li>
        <li class="sidebar-item"><a href="{{ route('spotlight.create') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Create Spotlight</span></a>
        </li>
    </ul>
</li>

{{-- Video Section --}}
<li class="sidebar-item">
   <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
        <span class="hide-menu text-light-emphasis">Video Section </span>
    </a>
    <ul aria-expanded="false" class="collapse second-level base-level-line">
        <li class="sidebar-item"><a href="{{ route('videos.index') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Index Page</span></a>
        </li>
        <li class="sidebar-item"><a href="{{ route('videos.create') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Add Video</span></a>
        </li>
    </ul>
</li>

{{-- Store Front Portfolio --}}
<li class="sidebar-item">
    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
        <span class="hide-menu text-light-emphasis">Store Front Portfolio</span>
    </a>
    <ul aria-expanded="false" class="collapse second-level base-level-line">
        <li class="sidebar-item"><a href="{{ route('frontportfolio.index') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Index Page</span></a>
        </li>
        <li class="sidebar-item"><a href="{{ route('frontportfolio.create') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Create Portfolio</span></a>
        </li>
    </ul>
</li>

{{-- Product Images --}}
<li class="sidebar-item">
    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
        <span class="hide-menu text-light-emphasis">Product Images</span>
    </a>
    <ul aria-expanded="false" class="collapse second-level base-level-line">
        <li class="sidebar-item"><a href="{{ route('productimages.index') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Index Page</span></a>
        </li>
        <li class="sidebar-item"><a href="{{ route('productimages.create') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Add Product Image</span></a>
        </li>
    </ul>
</li>

{{-- Testimonial Images --}}
<li class="sidebar-item">
    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
        <span class="hide-menu text-light-emphasis">Testimonial Images</span>
    </a>
    <ul aria-expanded="false" class="collapse second-level base-level-line">
        <li class="sidebar-item"><a href="{{ route('testinomialimages.index') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Index Page</span></a>
        </li>
        <li class="sidebar-item"><a href="{{ route('testinomialimages.create') }}" class="sidebar-link">
            <span class="hide-menu text-light-emphasis">Add Testimonial Image</span></a>
        </li>
    </ul>
</li>

                            {{-- <li class="sidebar-item"><a href="{{ route('contactus.index') }}" class="sidebar-link"><span
                                        class="hide-menu text-light-emphasis">
                                        Contact Us Requests
                                    </span></a>
                            </li> --}}


                            <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                    aria-expanded="false"><span class="hide-menu text-light-emphasis">Faqs</span></a>
                                <ul aria-expanded="false" class="collapse second-level base-level-line">
                                    <li class="sidebar-item"><a href="{{ route('faqs.index') }}"
                                            class="sidebar-link"><span class="hide-menu text-light-emphasis"> Index
                                                Page</span></a></li>
                                    <li class="sidebar-item"><a href="{{ route('faqs.create') }}"
                                            class="sidebar-link"><span class="hide-menu text-light-emphasis"> Create
                                                Faqs
                                            </span></a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu  text-light-emphasis">Authentication</span></li>


                    <!-- Register -->
                    {{-- @can('create register') --}}
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ request()->is('photography/userregister') ? 'active' : '' }}"
                            href="{{ route('newuser.register') }}" aria-expanded="false">
                            <i data-feather="lock" class="feather-icon"></i>
                            <span class="hide-menu  text-light-emphasis">Register</span>
                        </a>
                    </li>
                    {{-- @endcan --}}

                    <li class="list-divider"></li>



                    <li class="nav-small-cap"><span class="hide-menu text-light-emphasis">Extra</span></li>

                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                            aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                class="hide-menu text-light-emphasis">Logout</span></a></li>
                
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
