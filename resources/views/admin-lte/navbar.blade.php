<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: linear-gradient(to right, #CA3237, #B637FB );">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
         <a class="nav-link" href="{{ route('logout') }}" 
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"style="color: white">
              <i class="fas fa-sign-out-alt" style="color: white"></i> Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </li>
    </ul>
  </nav>