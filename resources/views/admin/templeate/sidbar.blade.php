 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion " id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
         <div class="sidebar-brand-icon ">
             <p class="fs-5"><span class="text-success">One</span>-Helth</p>
         </div>

     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link " href="{{ url('/') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span class="text-success">Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>
     {{-- admin dashboard --}}

     <li class="nav-item">
         <a class="nav-link" href="{{ route('speciality') }}">
             <i class="fa-solid fa-pen-nib" style="color: #a82497;"></i>
             <span class="text-success">Specialities</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="{{ url('add_doctor_view') }}">
             <i class="fa-solid fa-user-doctor" style="color: #e524a8;"></i>
             <span class="text-success">Add Doctor</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="{{ url('/alldoctor') }}">
             <i class="fa-solid fa-user-doctor" style="color: #e524a8;"></i>
             <span class="text-success"> Doctor List</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="{{ url('showappoinment') }}">
            <i class="fa-regular fa-handshake" style="color: #d4025d;"></i>
             <span class="text-success">Appointments</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="{{ route('user_list') }}">
             <i class="fa-solid fa-list-check" style="color: #db2988;"></i>
             <span class="text-success">User list</span>
         </a>

     </li>

     <li class="nav-item">
         <a class="nav-link  " href="{{ route('patient_list') }}">
            <i class="fa-solid fa-bed" style="color: #dc0984;"></i>
             <span class="text-success">Patient list</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="{{ route('all-comments') }}">
             <i class="fa-solid fa-comment" style="color: #e316ad;"></i>
             <span class="text-success">Comments</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="{{ route('allreply') }}">
            <i class="fa-solid fa-reply" style="color: #d70f55;"></i>
             <span class="text-success">Replies</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="{{ route('event.index') }}">
            <i class="fa-regular fa-newspaper" style="color: #cd184e;"></i>
             <span class="text-success">Events </span>
         </a>

     </li>

     {{-- teacher dashboard --}}






     {{-- student dashboard --}}





     {{-- parent dashboard --}}








     {{-- Admin manue start --}}
     {{-- <li class="nav-item">
		<a class="nav-link collapsed" href="{{route('admin-list')}}" >
						<i class="fas fa-fw fa-cog"></i>
						<span>Admin</span>
		</a>
	
</li> --}}
     {{-- Admin manue start --}}
     <!-- Nav Item - Pages Collapse Menu -->
     {{-- <li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
										aria-expanded="true" aria-controls="collapseTwo">
										<i class="fas fa-fw fa-cog"></i>
										<span>Components</span>
						</a>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
										<div class="bg-white py-2 collapse-inner rounded">
														<h6 class="collapse-header">Custom Components:</h6>
														<a class="collapse-item" href="buttons.html">Buttons</a>
														<a class="collapse-item" href="cards.html">Cards</a>
										</div>
						</div>
		</li> --}}


     <!-- Nav Item - Utilities Collapse Menu -->
     {{-- <li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
										aria-expanded="true" aria-controls="collapseUtilities">
										<i class="fas fa-fw fa-wrench"></i>
										<span>Utilities</span>
						</a>
						<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
										data-parent="#accordionSidebar">
										<div class="bg-white py-2 collapse-inner rounded">
														<h6 class="collapse-header">Custom Utilities:</h6>
														<a class="collapse-item" href="utilities-color.html">Colors</a>
														<a class="collapse-item" href="utilities-border.html">Borders</a>
														<a class="collapse-item" href="utilities-animation.html">Animations</a>
														<a class="collapse-item" href="utilities-other.html">Other</a>
										</div>
						</div>
		</li> --}}

     <!-- Divider -->
     {{-- <hr class="sidebar-divider"> --}}

     <!-- Heading -->
     {{-- <div class="sidebar-heading">
						Addons
		</div> --}}

     <!-- Nav Item - Pages Collapse Menu -->
     {{-- <li class="nav-item">
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
										aria-expanded="true" aria-controls="collapsePages">
										<i class="fas fa-fw fa-folder"></i>
										<span>Pages</span>
						</a>
						<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
										<div class="bg-white py-2 collapse-inner rounded">
														<h6 class="collapse-header">Login Screens:</h6>
														<a class="collapse-item" href="login.html">Login</a>
														<a class="collapse-item" href="register.html">Register</a>
														<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
														<div class="collapse-divider"></div>
														<h6 class="collapse-header">Other Pages:</h6>
														<a class="collapse-item" href="404.html">404 Page</a>
														<a class="collapse-item" href="blank.html">Blank Page</a>
										</div>
						</div>
		</li> --}}

     <!-- Nav Item - Charts -->
     {{-- <li class="nav-item">
						<a class="nav-link" href="charts.html">
										<i class="fas fa-fw fa-chart-area"></i>
										<span>Charts</span></a>
		</li> --}}

     <!-- Nav Item - Tables -->
     {{-- <li class="nav-item">
						<a class="nav-link" href="tables.html">
										<i class="fas fa-fw fa-table"></i>
										<span>Tables</span></a>
		</li> --}}

     <!-- Divider -->
     {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->


 </ul>
 <!-- End of Sidebar -->
