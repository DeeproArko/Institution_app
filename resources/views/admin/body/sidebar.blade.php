<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="{{ asset('backend/assets/img/logo.png') }}" class="header-logo" /> <span
          class="logo-name">CZ-It</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown active">
        <a href="{{ route('AdminDashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Slider</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('AllSlider') }}">All Slider</a></li>
          {{-- <li><a class="nav-link" href="{{ route('AddSlider') }}">Add Slider</a></li> --}}
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>About Us</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('AllAbout') }}">All About</a></li>
          {{-- <li><a class="nav-link" href="{{ route('AddAbout') }}">Add About</a></li> --}}
         
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="shopping-bag"></i><span>Course Section</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('AllCategory') }}">Course Category</a></li>
          <li><a class="nav-link" href="{{ route('AllCourse') }}">Add Course</a></li>
          <li><a class="nav-link" href="{{ route('AllModule') }}"> Course Module</a></li>
          <li><a class="nav-link" href="{{ route('AllVideo') }}"> Course Video</a></li>
          
        </ul>
      </li>


      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="shopping-bag"></i><span>Accounts</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('earning') }}">Student Enrollment Earning</a></li>
          <li><a class="nav-link" href="{{ route('AllExpence') }}">Expences</a></li>
          <li><a class="nav-link" href="{{ route('AllModule') }}"> Course Module</a></li>
          <li><a class="nav-link" href="{{ route('AllVideo') }}"> Course Video</a></li>
          
        </ul>
      </li>
      


      
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Instructor</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('instrutor') }}">Instructor List</a></li>
          <li><a class="nav-link" href="{{ route('EmployeeRegister') }}">Add Instructor</a></li>
          {{-- <li><a class="nav-link" href="{{ route('assign') }}">Course Assign </a></li> --}}
          <li><a class="nav-link" href="{{ route('AllAssign') }}">All Course Assign </a></li>
         
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Students</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('offlineRegister') }}">Registered Student List</a></li>
          <li><a class="nav-link" href="{{ route('student') }}">Enroll Student List</a></li>
        </ul>
      </li>

      
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Success Story</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('AllSuccess') }}">All Success</a></li>
          <li><a class="nav-link" href="{{ route('AddSuccess') }}">Add Success</a></li>
          
        </ul>
      </li>
      
      
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Site Setting </span></a>
        <ul class="dropdown-menu">
         
          <li><a class="nav-link" href="{{ route('AllContact') }}">All Contact</a></li>
          <li><a class="nav-link" href="{{ route('AllPrivacy') }}">Privacy Policy</a></li>
          <li><a class="nav-link" href="{{ route('AllRefund') }}">Refund Policy</a></li>
          
        </ul>
      </li>
      
     
    </ul>
  </aside>
</div>