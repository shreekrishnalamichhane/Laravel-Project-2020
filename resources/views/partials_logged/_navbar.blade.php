<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

    <!-- SideNav slide-out button -->
    <div class="float-left">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-dn mr-auto">
      <a href="/"><p>Colab Learning</p></a>
    </div>

    <div class="d-flex change-mode">
      <!-- Navbar links -->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
          <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge red">5</span> <i class="fas fa-bell"></i>
            <span class=" d-md-inline-block">Notifications</span>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">
              <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
              <span>Your campaign is about to end</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="/contact" class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <img src="/storage/user_avatar/{{Auth::user()->avatar}}" alt="" style="height:25px; width:25px; top:10px; left:10px; border-radius:50%;">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/profile/{{Auth::user()->id}}" >
                    Profile
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

      </ul>
      <!-- Navbar links -->

    </div>

  </nav>
