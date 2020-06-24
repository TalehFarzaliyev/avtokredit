@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <main class="main-container">
        <div class="section-title-container">
            <div class="section-title">
                <ul class="breadcrumbs-shop">
                    <li class="breadcrumbs-i"><a href="{{ route('autosalon') }}">{{ __('front.autosalon') }}</a></li>
                    <li class="breadcrumbs-i">{{ $autosalon->name }}</li>
                </ul>
            </div>
        </div>
        <div class="shop-container">
            <div class="shops-top-content">
                <div class="shops-top-content-img">
                    <span class="salon-content-img"><img src="{{ asset('front/image/car-1.png') }}" alt=""></span>
                    <span class="salon-content-img"><img src="{{ asset('front/image/car-2.png') }}" alt=""></span>
                </div>
                <div class="shops-cover-block">
                    <div class="shops-cover-left">GLE və GLE coupe 5% güzəşt ilə Mercedes-Benz Abşeronda</div>
                    <div class="shops-cover-right">
                        <img src="{{ asset('front/image/mercedes.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="shop-page-head">
                <div class="shop-header">
                    <div class="shop-header-left">
                        <div class="shop--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2017%2F12%2F05%2F15%2F31%2F20%2F107%2FLogo.png)"></div>
                        <a class="shop--products-count" href="{{ route('autosalon', $autosalon->id) }}">{{ $autosalon->autos->count() }} {{ __('front.elan') }}</a>
                    </div>
                    <div class="shop-header-right">
                        <div class="shop-header-text">
                            <h1 class="shop--title"><a href="{{ route('autosalon', $autosalon->id) }}">{{ $autosalon->name }}</a></h1>
                            <div class="shop-header-table">
                                <div class="shop-header-cell shop-header-cell_description">
                                    <div class="shop--views"><i class="far fa-eye"></i>{{ $autosalon->visit }}</div>
                                    <h2 class="shop--description">{{ $autosalon->description }}</h2>
                                    <div class="shop--location-wrap">
                                        <a data-reveal-id="shop-show-map" class="shop--location shop--open-location-modal" href="#">
                                            <i class="fas fa-map-marker-alt"></i> {{ $autosalon->address }}
                                        </a>
                                    </div>
                                    <div class="reveal-modal reveal-modal--map" id="shop-show-map">
                                        <div class="reveal-modal-popup">
                                            <div class="reveal-content">
                                                <div data-lat="{{ json_decode($autosalon->location)->location_lat }}" data-lng="{{ json_decode($autosalon->location)->location_lng }}" id="map"></div>
                                                <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBfOfshhTTkvEtsB_CAToazOUWE2zaleKE&amp;libraries=places" async="async" defer="defer"></script>
                                                <div class="close-reveal-modal"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-header-cell shop-header-cell_feedback">
                                    <div class="shop-phones">
                                        <i class="fas fa-phone fa-rotate-90"></i>
                                        <div class="shop-phones-content">
                                            <div class="shop-phones-i"><a class="shop-phones--number" data-register-call="true" href="tel:(050) 289-09-85">{{ $autosalon->phone }}</a></div>
                                        </div>
                                    </div>
                                    <div class="shop--schedule">
                                        <i class="far fa-clock"></i>
                                        <div class="shop--schedule-i">{{ $autosalon->working_days }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop--special-offer"><i class="far fa-star"></i>{{ $autosalon->slogan }}</div>
                    </div>
                </div>
            </div>
            <div class="page-content autosalon-product">
                <div class="products-container index-products-container">
                    <div class="products-content">
                        <div class="products row grid">
                            @foreach($autos as $auto)
                                <x-auto :detail="$auto"/>
                            @endforeach
                        </div>
                    </div>
                    {{ $autos->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
