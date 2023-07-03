<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hchoma</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Tous les incidents</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Derniers incidents traités</a>
            </li>
            @if(session()->get('user') && session()->get('user')->cin)
            <li class="nav-item">
            <a class="nav-link" href="{{route('mes-incident')}}" >mes incident</a>
            </li>
            @endif

        </ul>
  
       
        @if(!(session()->get('user'))  )
       <li><a href="{{route('loginForm')}}" onclick="toggleMenu();">se connecter</a></li>
        @endif

        @if((session()->get('user'))  )
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block">{{session()->get('user') ->name }} </span>
                      <small class="text-muted">{{session()->get('user') -> lastname }} </small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('Profile-Details')}}">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
              @if(!(session()->get('user'))->cin)
                <a class="dropdown-item" href="{{route('register')}}">
                  <i class="fas fa-user-plus me-2"></i>
                  <span class="align-middle">Create an account Admine</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('USERS')}}">
                  <i class="fas fa-list me-2"></i>
                  <span class="align-middle">USERS</span>
                </a>
              </li>
              @endif
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{route('logout')}}">
                  <i class='bx bx-power-off me-2'></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
      @endif
    </div>
  </div>
</nav>
</div>