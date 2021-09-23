@yield('side-bar')
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->

        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @if (Auth::user()->post == 'admin')
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-dollar"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('categories.create') }}">Add Category</a></li>
                        <li><a href="{{ route('categories.index') }}">View Category</a></li>
                    </ul>
                </li>
            @endif


            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dollar"></i>
                    <span>My Blog</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('blogs.create') }}">Add Post</a></li>
                    <li><a href="{{ route('blogs.index') }}">View Post</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="{{ route('posts') }}">
                    <i class="fa fa-dollar"></i>
                    <span>All Blogs</span>
                </a>
            </li>
            <!--multi level menu end-->
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
