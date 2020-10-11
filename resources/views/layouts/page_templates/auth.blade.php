<div class="wrapper ">
  @include('layouts.navbars.sidebar')
  <div class="main-panel">
    
    @include('layouts.navbars.navs.auth')
    <div class="content">
      @include('inc.messages')
        @yield('content')
    </div>
    @include('layouts.footers.auth')
  </div>
</div>