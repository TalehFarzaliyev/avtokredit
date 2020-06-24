@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <main class="main-container">
        <div class="container">
            <div class="main-content">
                <div class="section-title">
                    <p class="section-title_name">{{ __('front.distributor') }}</p>
                </div>
                <div class="shops-container">
                    <div class="shops" id="shops-featured">
                        @foreach($distributors as $distributor)
                            <a class="shops-i featured" href="{{ route('autosalon.view', $distributor->id) }}">
                                <div class="shops-i--logo">
                                    <img src="{{ url('uploads/'.$distributor->image) }}" alt="{{ $distributor->name }}">
                                    <div class="spohs-i-logo-after">{{ __('front.official') }}</div>
                                </div>
                                <div class="shops-i--title">{{ $distributor->name }}</div>
                                <div class="shops-i--description">{{ $distributor->description }}</div>
                                <div class="shops-i--down-block">
                                    <div class="shops-i--contact-content">
                                        <i class="fas fa-phone fa-rotate-90"></i>
                                        <p class="shops-i--contact">{{ $distributor->phone }}</p>
                                    </div>
                                    <div class="shops-i--ads-count">{{ $distributor->autos->count() }} {{ __('front.elan') }}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="section-title">
                    <h1 class="section-title_name">{{ __('front.autosalon') }}</h1>
                </div>
                <div class="shops-container">
                    <div class="shops" id="shops-regular">
                        @foreach($autosalons as $autosalon)
                            <a class="shops-i featured" href="{{ route('autosalon.view', $autosalon->id) }}">
                                <div class="shops-i--logo">
                                    <img src="{{ url('uploads/'.$autosalon->image) }}" alt="{{ $autosalon->name }}">
                                </div>
                                <div class="shops-i--title">{{ $autosalon->name }}</div>
                                <div class="shops-i--description">{{ $autosalon->description }}</div>
                                <div class="shops-i--down-block">
                                    <div class="shops-i--contact-content">
                                        <i class="fas fa-phone fa-rotate-90"></i>
                                        <p class="shops-i--contact">{{ $autosalon->phone }}</p>
                                    </div>
                                    <div class="shops-i--ads-count">{{ $autosalon->autos->count() }} {{ __('front.elan') }}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
