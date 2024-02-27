<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
       <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="" id="modeSwitcher" data-mode="dark">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="{{asset(Auth::user()->avatar)}}" alt="..." class="avatar-img rounded-circle">


              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Профиль</a>
                <a class="dropdown-item" href="#">Настройки</a>


            </div>
        </li>
           <li class="nav-item">
               <a class="nav-link text-muted my-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                       {{ __('Выход') }}&nbsp;<i class="fe fe-log-out fe-14"></i>
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>

           </li>
    </ul>
</nav>
