<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
		<a class="sidebar-brand brand-logo" href="{{url('/')}}">
			<span class="text-primary">One</span> <span class="text-white">-Health</span>
		
		</a>
	
	</div>
	<ul class="nav text-white">
	
	
	
		<li class="nav-item menu-items">
			<a class="nav-link" href="{{route('speciality')}}">
				<span class="menu-icon">
					<i class="mdi mdi-file-document-box"></i>
				</span>
				<span class="menu-title">All Speciality</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="{{url('add_doctor_view')}}">
				<span class="menu-icon">
					<i class="mdi mdi-file-document-box"></i>
				</span>
				<span class="menu-title">Add Doctor</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="{{url('/alldoctor')}}">
				<span class="menu-icon">
					<i class="mdi mdi-table-large"></i>
				</span>
				<span class="menu-title">All Doctors</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="{{url('showappoinment')}}">
				<span class="menu-icon">
					<i class="mdi mdi-file-document-box"></i>
				</span>
				<span class="menu-title">Appoimnents</span>
			</a>
		</li>
	

		<li class="nav-item menu-items">
			<a class="nav-link" href="{{route('user_list')}}">
				<span class="menu-icon">
					<i class="mdi mdi-table-large"></i>
				</span>
				<span class="menu-title">All User list</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="{{route('patient_list')}}">
				<span class="menu-icon">
					<i class="mdi mdi-table-large"></i>
				</span>
				<span class="menu-title">All Patins list</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="{{route('all-comments')}}">
				<span class="menu-icon">
					<i class="mdi mdi-table-large"></i>
				</span>
				<span class="menu-title">All Comments</span>
			</a>
		</li>
		<li class="nav-item menu-items">
			<a class="nav-link" href="{{route('allreply')}}">
				<span class="menu-icon">
					<i class="mdi mdi-table-large"></i>
				</span>
				<span class="menu-title">All Reply</span>
			</a>
		</li>
	</ul>
</nav>