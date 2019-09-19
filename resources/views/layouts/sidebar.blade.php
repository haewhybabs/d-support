<!-- Control Sidebar Toggle Button -->
<div>
    <button class="control-sidebar-btn btn btn-dark" data-toggle="control-sidebar"><i
            class="fa fa-cog fa-spin"></i></button>
</div>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image float-left">
                <img src="{{ asset('admin/images/user2-160x160.jpg') }}" class="rounded" alt="User Image">
            </div>
            <div class="info float-left">
                <p>{{ Auth::user()->username }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
        </div>



        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            </li>

            {{-- ADMIN --}}

            <?php $roleID=Auth::user()->role_ID;?>

            @if($roleID==1):

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Patients</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('add_patient') }}"><i class="fa fa-circle-o"></i>Add Patient</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Patient List</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Therapists</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('add_therapist') }}"><i class="fa fa-circle-o"></i>Add Therapist</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Therapist List</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('diagnosis_support') }}">
                        <i class="fa fa-th"></i>
                        <span>Diagnosis Support</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    {{-- <ul class="treeview-menu">
                        <li><a href="pages/widgets/widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
                        <li><a href="pages/widgets/weather.html"><i class="fa fa-circle-o"></i> Weather</a></li>
                    </ul> --}}
                </li>

                <li>
                    <a href="{{ route('dsettings') }}">
                        <i class="fa fa-cog"></i> <span>D-Support Settings</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-red">3</small>
                            <small class="label pull-right bg-blue">17</small>
                        </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Diagnosis Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('diagnosis_question') }}"><i class="fa fa-circle-o"></i>Diagnosis Questions</a></li>
                        <li><a href="{{ route('possible_diagnosis') }}"><i class="fa fa-circle-o"></i>Possible Diagnosis</a></li>
                        <li><a href="{{ route('diagnosis_requirement') }}"><i class="fa fa-circle-o"></i>Diagnosis Requirement</a></li>



                    </ul>
                </li>


                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-yellow">12</small>
                            <small class="label pull-right bg-green">16</small>
                            <small class="label pull-right bg-red">5</small>
                        </span>
                    </a>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Settings</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>Change Password</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>Update Information</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Audit Tray</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>All Users Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>Therapist</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>Patient</a></li>

                    </ul>
                </li>


                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fa fa-edit"></i> <span>Logout</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>



            {{-- Therapist --}}
            @elseif($roleID==2):

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Patient</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>My Patient</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>All Patient</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Diagnosis Result</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>

                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-yellow">12</small>
                            <small class="label pull-right bg-green">16</small>
                            <small class="label pull-right bg-red">5</small>
                        </span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Inconclusive Result</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>User Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>User Info</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Change Password</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fa fa-calendar"></i> <span>Logout</span>
                    </a>
                </li>




            {{-- PATIENT --}}

            @elseif($roleID==3):
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>User Information</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Health Information</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Basic Information</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('patient_test') }}">
                        <i class="fa fa-files-o"></i>
                        <span>Diagnosis</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>

                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-yellow">12</small>
                            <small class="label pull-right bg-green">16</small>
                            <small class="label pull-right bg-red">5</small>
                        </span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Contact Therapist</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>User Settings</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Update Basic Info</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Change Password</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fa fa-calendar"></i> <span>Logout</span>
                    </a>
                </li>
            @endif;







            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map"></i> <span>Map</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/map/map-google.html"><i class="fa fa-circle-o"></i> Google Map</a></li>
                    <li><a href="pages/map/map-vector.html"><i class="fa fa-circle-o"></i> Vector Map</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Sample Pages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/examples/gallery.html"><i class="fa fa-circle-o"></i> Gallery</a></li>
                    <li><a href="pages/examples/faq.html"><i class="fa fa-circle-o"></i> FAQs</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a>
                    </li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
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
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview">
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
            </li> --}}

        </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                class="fa fa-cog fa-spin"></i></a>
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                class="fa fa-envelope"></i></a>
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="fa fa-power-off"></i></a>
    </div>
</aside>

