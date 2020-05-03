<div class="sidebar-menu">

    <div class="sidebar-menu-inner">
        
        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="">
                    <img src="{{ asset('images/logo/dana_logo.png') }}" style="height: 33px; " alt="DANA" />
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

                            
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            
        </header>
        
        <ul id="main-menu" class="main-menu multiple-expanded">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            
            <li class="">
                <a href="{{route('home')}}">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
                
            </li>
        <li class="has-sub">
                <a href="#">
                    <i class="entypo-user"></i>
                    <span class="title">Users</span>
                </a>
                <ul>
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i>
                            <span class="title">All</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Businessmen</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Employee</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('appointment.index')}}">
                    <i class="entypo-tag"></i>
                    <span class="title">Appointment</span>
                </a>
            </li>

            <li >
                <a href="{{route('event.index')}}">
                    <i class="entypo-archive"></i>
                    <span class="title">Event</span>
                </a>
                
            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="fa fa-hand-peace-o"></i>
                    <span class="title">Visitors</span>
                </a>
                <ul>
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i>
                            <span class="title">All</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="entypo-plus"></i>
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="event">
                    <i class="entypo-window"></i>
                    <span class="title">Invite</span>
                </a>
               
            </li>

            <li class="has-sub">
                <a href="ebooking">
                    <i class="fa fa-hourglass"></i>
                    <span class="title">Settings</span>
                </a>
               
            </li>

           

            <li>
                <a href="guide">
                    <i class="entypo-help"></i>
                    <span class="title">Guide</span>
                </a>
            </li>
        </ul>
    </div>
</div>
