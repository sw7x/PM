<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::to('public/assets') }}/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Project Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/project"><i class="fa fa-circle-o"></i>Project list</a></li>
                    <li><a href="{{ URL::to('') }}/project/assign-employees"><i class="fa fa-circle-o"></i>Assign employees</a></li>
                    <li><a href="{{ URL::to('') }}/project/thread"><i class="fa fa-circle-o"></i>thread</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Task Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/task"><i class="fa fa-circle-o"></i>--Task list</a></li>
                    <li><a href="{{ URL::to('') }}/task/assign-employees"><i class="fa fa-circle-o"></i>--Assign employees</a></li>
                    <li><a href="{{ URL::to('') }}/task/thread"><i class="fa fa-circle-o"></i>thread</a></li>

                </ul>
            </li>

            <li><a href="{{ URL::to('') }}/client"><i class="fa fa-circle-o text-red"></i> <span>Client Management</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>User Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/users"><i class="fa fa-circle-o"></i>employees</a></li>
                    <li><a href="{{ URL::to('') }}/index2"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Time Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/ "><i class="fa fa-circle-o"></i>employee Project wise timing</a></li>
                    <li><a href="{{ URL::to('') }}/index2"><i class="fa fa-circle-o"></i>Designation wise</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Cost Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/cost/calculate "><i class="fa fa-circle-o"></i>calculate cost</a></li>
                    <li><a href="{{ URL::to('') }}/cost/employee"><i class="fa fa-circle-o"></i>Employee cost</a></li>
                </ul>
            </li>


            <li class="treeview active">
                <a href="{{ URL::to('') }}/mailbox">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>

                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="mailbox">Inbox
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">13</span>
                            </span>
                        </a>
                    </li>
                    <li><a href="compose">Compose</a></li>
                    <li class="active"><a href="{{ URL::to('') }}/read-mail">Read</a></li>
                </ul>
            </li>



            <br><br><br>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="{{ URL::to('') }}/index2"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/top-nav"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="{{ URL::to('') }}/boxed"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="{{ URL::to('') }}/fixed"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="{{ URL::to('') }}/collapsed-sidebar"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('') }}/widgets">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/chartjs"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                    <li><a href="{{ URL::to('') }}/morris"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="{{ URL::to('') }}/flot"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="{{ URL::to('') }}/inline"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    <li><a href="{{ URL::to('') }}/collapsed-sidebar"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/general"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="{{ URL::to('') }}/icons"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="{{ URL::to('') }}/buttons"><i class="fa fa-circle-o"></i> Buttons</a></li>
                    <li><a href="{{ URL::to('') }}/sliders"><i class="fa fa-circle-o"></i> Sliders</a></li>
                    <li><a href="{{ URL::to('') }}/timeline"><i class="fa fa-circle-o"></i> Timeline</a></li>
                    <li><a href="{{ URL::to('') }}/modals"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ URL::to('') }}/form-general"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="{{ URL::to('') }}/advanced"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="{{ URL::to('') }}/editors"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/simple"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="{{ URL::to('') }}/data"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('') }}/calendar">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                        <small class="label pull-right bg-blue">17</small>
                    </span>
                </a>
            </li>
            
            <li class="treeview active">
                <a href="{{ URL::to('') }}/mailbox">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>

                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="mailbox">Inbox
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">13</span>
                            </span>
                        </a>
                    </li>
                    <li><a href="compose">Compose</a></li>
                    <li class="active"><a href="{{ URL::to('') }}/read-mail">Read</a></li>
                </ul>
            </li>
    
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('') }}/invoice"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="{{ URL::to('') }}/profile"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="{{ URL::to('') }}/login"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="{{ URL::to('') }}/register"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="{{ URL::to('') }}/lockscreen"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="{{ URL::to('') }}/404"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="{{ URL::to('') }}/500"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="{{ URL::to('') }}/blank"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="{{ URL::to('') }}/pace"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                    <li><a href="{{ URL::to('') }}/starter"><i class="fa fa-circle-o"></i>Starter Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>