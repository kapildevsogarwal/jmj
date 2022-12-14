{{-- resources/views/adminlte/partials/left-sidebar.blade.php --}}
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            &nbsp;{{--<img src="{{ asset('images/users/') }}/{{Auth::user()->profile_image}}" class="img-circle" alt="User Image">--}}
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
           
                <li  class="active"><a href="{{ url('/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    			<li  class="active"><a href="{{ url('/party') }}"><i class="fa fa-building"></i> <span>Party</span></a></li>
				
				
				<li class="treeview  active menu-open">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Permissions</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                            <li class="active">
                                <a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> Roles</a>
                            </li>
                            <li >
                                <a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i> Permissions</a>
                            </li>
                       
                    </ul>
                </li>
				
           
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out text-aqua"></i> <span>Logout</span>
                </a>
            </li>
			
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>