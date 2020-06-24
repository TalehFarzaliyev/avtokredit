@extends('site.layouts.app')
@section('title', $page->title)
@section('content')
    <div class="main-container">
        <div class="section-title section-title_top">
            <p class="section-title_name">{{ $page->title }}</p>
        </div>
        <div class="static-page">
            {{ $page->description }}
        </div>
    </div>
@endsection
