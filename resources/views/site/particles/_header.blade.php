<!-- header -->
<header class="header" data-lotriver-header="">
    <div class="header-bar-container">
        <div class="header-bar">
            <div class="d-flex justify-content-between">
                <div class="header-bar-i header-bar-i_support-phone">
                    <span class="header-bar-i_support-phone-title">{{ __('front.support_service') }}</span>
                    <span class="header-bar-i_support-phone-list">{{ get_setting('phone') }}</span>
                </div>
                <div class="header-bar-social-media">
                    <ul class="nav-sm-list icons">
                        <li class="nav-sm-item">
                            <a href="{{ get_setting('facebook') }}" class="sm-icon-link"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="nav-sm-item">
                            <a href="{{ get_setting('instagram') }}" class="sm-icon-link"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-sm-item"><a href="{{get_setting('site_url') }}" class="nav-sm-link">{{ get_setting('site_title') }}</a></li>
                    </ul>
                </div>

                <div class="header-bar-right d-flex align-items-center">
                    @foreach($languages as $lang)
                    <a class="header-bar-i d-flex align-items-center" href="{{ url($lang->code) }}">
                        <div class="lang">
                            <img src="{{ asset('front//image') }}/{{ $lang->code }}.png" alt="">
                        </div>
                        <span>{{ strtoupper($lang->code) }}</span>
                    </a>
                    @endforeach

                    <a class="header-bar-i header-bar-i--bookmarks " title="{{ __('front.bookmarks') }}" href="{{ route('bookmarks') }}"><i class="fas fa-heart"></i>{{ __('front.bookmarks') }}</a>
                    @if(Auth::guard('company')->check())
                        <a class="header-bar-i header-bar-i--login" href="{{ route('home') }}">{{ Auth::guard('company')->user()->name }}</a>
                    @else
                        <a class="header-bar-i header-bar-i--login" href="{{ route('signin') }}"><i class="fas fa-user"></i>{{ __('front.signin') }}</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="header-main-bar">
        <div class="d-flex header-main-bar-container">
            <div class="col-8 header-main-bar-left">
                <div class="row">
                    <a href="{{ get_setting('site_url') }}" class="left-content-site-link">{{ __('front.site_title') }}</a>
                    <span class="left-content-site-info">{{ __('front.site_desc') }}</span>
                </div>
            </div>
            <div class="header-main-bar-right col-4">
                <img src="{{ asset('front//image/bmw.png') }}">
            </div>
        </div>
    </div>
    <div class="header-menu-bar">
        <div class="d-flex header-menu-bar-container">
            <div class="header-menu-nav">
                <div class="nav">
                    <a class="nav-i" href="{{ route('home') }}">{{ __('front.home') }}</a>
                    <a class="nav-i" href="{{ route('autosalon') }}">{{ __('front.autosalon') }}</a>
                    <a class="nav-i supplies-shops-link" href="{{ route('taxi') }}">{{ __('front.taxi') }}</a>
                    <a class="nav-i supplies-shops-link" href="{{ route('taxi') }}">{{ __('front.deposit_auto') }}</a>
                    <a class="header-new-btn" href="{{ route('autos/add') }}">
                        <span class="new-btn-add-icon"><span>+</span></span>
                        <span>{{ __('front.post_auto') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
