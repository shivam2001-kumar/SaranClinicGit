
<div class="container-fluid page-body-wrapper">
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="{{url('adassets/images/faces/face28.png')}}">
          </div>
          <div class="user-name">
              Super Admin
          </div>
          <div class="user-designation">
             
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/superadmin/supdash')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Supervisor</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/superadmin/addsupervisor')}}"> Add Supervisor </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/superadmin/viewsupervisor')}}"> View Supervisor </a></li>
              </ul>
            </div>
          </li>
<!-- Patient  -->
<li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#patient" aria-expanded="false" aria-controls="auth">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Patient</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="patient">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/superadmin/addpatient')}}"> Add Paatient </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/superadmin/viewpatient')}}"> View Patient </a></li>
              </ul>
            </div>
          </li>
<!-- endpatient-->
<li class="nav-item">
<a class="nav-link"  href="{{url('superadmin/reception')}}">
              <i class="fas fa-user"></i>
              <span class="menu-title px-10">R<sub>x</sub></span>
            </a>
          </li>



<!-- Receptionist -->

<!-- endReceptionist -->
      <!--    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Facalities</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/addfacalities')}}"> Add Facalities </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/viewfacalities')}}"> View Facalities </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Notice</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/addnotice')}}"> Add Notice </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/viewnotice')}}"> View Notice </a></li>
              </ul>
            </div>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/icons/feather-icons.html">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="docs/documentation.html">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->