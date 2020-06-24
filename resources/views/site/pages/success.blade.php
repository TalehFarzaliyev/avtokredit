@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <div class="main-container" data-lotriver-wrapper="">
        <div class="section-title-container">
            <div class="section-title">
                <p class="section-title_name">{{ __('front.post_add') }}</p>
            </div>
        </div>
        <div class="section-main-container">
            <div class="new-product"></div>
        </div>
    </div>
@endsection
