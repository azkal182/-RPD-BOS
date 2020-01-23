<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <div class="c-sidebar-brand">
    <a href="{{ route('home') }}"><img class="c-sidebar-brand-full" src="{{ asset ('assets/brand/brand-logo.png') }}" width="90" height="80" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="{{ asset ('assets/brand/brand-logo.png') }}" width="118" height="46" alt="CoreUI Logo"></a>
    </div>
  {{-- <a class="navbar-brand" href="#">
    <img src="{{ asset ('assets/brand/brand-logo.png') }}" width="30" height="30" alt="">
  </a> --}}
  <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
        </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>

        <li class="c-sidebar-nav-title">Akun</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
            </svg> Profil</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
            </svg> Setting</a></li>


    <li class="c-sidebar-nav-title">Theme</li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('anggaran') }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-clipboard') }}"></use>
        </svg> Anggaran</a></li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="typography.html">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-book') }}"></use>
        </svg> Laporan</a></li>





    <li class="c-sidebar-nav-divider"></li>
    <li class="c-sidebar-nav-title">Extras</li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
        </svg> Logout</a></li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    {{-- <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io" target="_top">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-cloud-download') }}"></use>
        </svg> Download CoreUI</a></li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/" target="_top">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset ('coreui/vendors/@coreui/icons/svg/free.svg#cil-layers') }}"></use>
        </svg> Try CoreUI<strong>PRO</strong></a></li> --}}
  </ul>
  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
