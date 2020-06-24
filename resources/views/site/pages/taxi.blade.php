@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <div class="main-container" data-lotriver-wrapper="">
        <div class="container">
            <div class="main-content">
                <div class="section-title">
                    <p class="section-title_name">{{ __('front.taxi') }}</p>
                </div>
                <div class="shops-container">
                    <div class="shops" id="taxi-company">
                        @foreach($companies as $company)
                            <a class="shops-i featured" href="{{ route('autosalon.view', $company->id) }}">
                                <div class="shops-i--logo">
                                    <img src="{{ url('uploads/'.$company->image) }}" alt="{{ $company->title }}">
                                </div>
                                <div class="shops-i--title">{{ $company->name }}</div>
                                <div class="shops-i--description">{{ $company->description }}</div>
                                <div class="shops-i--down-block">
                                    <div class="shops-i--contact-content">
                                        <i class="fas fa-phone fa-rotate-90"></i>
                                        <p class="shops-i--contact">{{ $company->phone }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
