@auth()
    @include('admin.layouts.navbars.navs.auth')
@endauth
    
@guest()
    @include('admin.layouts.navbars.navs.guest')
@endguest