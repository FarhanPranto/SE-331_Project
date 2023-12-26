 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif " href="{{url('panel/dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->



  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'category') collapsed @endif" href="{{url('panel/category/list')}}">
      <i class="bi bi-card-list"></i>
      <span>Category</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif" href="{{url('panel/user/list')}}">
      <i class="bi bi-person"></i>
      <span>Users</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'mou') collapsed @endif" href="{{url('panel/mou/list')}}">
      <i class="bi bi-card-list"></i>
      <span>MOU</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'help') collapsed @endif" href="{{url('panel/help/list')}}">
      <i class="bi bi-question-circle"></i>
      <span>Help</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2) != 'inbox') collapsed @endif" href="{{url('panel/mou/list')}}">
      <i class="bi bi-envelope"></i>
      <span>Inbox</span>
    </a>
  </li><!-- End Contact Page Nav -->

 

</ul>

</aside><!-- End Sidebar-->