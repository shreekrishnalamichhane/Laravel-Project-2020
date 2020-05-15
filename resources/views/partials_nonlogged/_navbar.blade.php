<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container-fluid">
      <div class="navbar-translate">
        <a class="navbar-brand ml-5" href="/">
          Colab Learning</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <div class="d-lg-none">
          <ul class="navbar-nav ml-auto " style="height:90vh; overflow:scroll;">
            <li class="dropdown nav-item">
              <a href="/about" class=" nav-link" >
                About
              </a>
            </li>
            <li class="dropdown nav-item">
            <a href="/store" class=" nav-link" >
                How it works
            </a>
            </li>

            <li class="dropdown nav-item">
            <a href="/contact" class=" nav-link" >
                Contact
            </a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/dashboard" >
                        Dashboard
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
            @endguest
          </ul>
        </div>
        <div class="d-none d-lg-block ml-auto">
          <ul class="navbar-nav ml-auto " >
              <li class="dropdown nav-item">
                <a href="/about" class=" nav-link" >
                    About
                </a>
              </li>
              <li class="dropdown nav-item">
                <a href="/store" class=" nav-link" >
                  How it works
                </a>
              </li>
              <li class="dropdown nav-item">
                <a href="/contact" class=" nav-link" >
                  Contact
                </a>
              </li>
                @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
                @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
                @endif
                @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/dashboard" >
                          Dashboard
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
                @endguest
          </ul>
        </div>
    </div>
  </nav>

