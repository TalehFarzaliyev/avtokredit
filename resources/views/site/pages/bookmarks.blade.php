@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <div class="main-container" data-lotriver-wrapper="">
        <div class="container">
            <div class="bookmarks-container products-container">
                <div class="section-title">
                    <h1 class="section-title_name">{{ __('front.bookmarks') }}</h1>
                </div>
                @if(!$autos->isEmpty())
                    <div class="products-content">
                        <div class="products row grid">
                            @foreach($autos as $data)
                                <x-auto :detail="$data"/>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="products bookmarks empty">
                        <div class="bookmarks_empty">
                            <p>{{ __('front.bookmarks_empty') }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
