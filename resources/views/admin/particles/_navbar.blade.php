<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand wmin-0 mr-5">
        <a href="{{ route('dashboard') }}" class="d-inline-block">
            <img src="{{asset('assets/global_assets/images/logo_light.png')}}" alt="{{ config('app.name') }}">
        </a>
    </div>
    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <span class="badge bg-success-400 badge-pill ml-md-3 mr-md-auto">16 orders</span>
        <ul class="navbar-nav">
            @include('admin.particles.navbar._language')
            @include('admin.particles.navbar._user-profile')
        </ul>
    </div>
</div>
