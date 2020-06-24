@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <main class="main-container">
        <div class="main-container-filter">
            <div class="filter-container">
                <form class="simple_form short-search homepage-filter" id="new_q" name="q_form" novalidate="novalidate" action="/" accept-charset="UTF-8" method="GET">
                    <input name="utf8" type="hidden" value="&#x2713;" />
                    <div class="input select optional q_make">
                        <select name="car_brand_id" onchange="getSelect('{{ url('autos/get-car-models') }}','car_model_id', this)" class="select optional" id="q_make">
                            <option value="">{{ __('front.all_brands') }}</option>
                            @foreach($car_brands as $car_brand)
                                <option {{request('car_brand_id') == $car_brand->id? 'selected': ''}} value="{{ $car_brand->id }}">{{ $car_brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input string optional q_model">
                        <select name="car_model_id" id="q_model">
                            <option value="">{{ __('front.all_models') }}</option>
                            @if(old('car_model_id'))
                                @foreach($car_models as $car_model)
                                    <option {{request('car_model_id') == $car_model->id? 'selected': ''}} value="{{$car_model->id}}">{{$car_model->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="input string optional q_price">
                        <label class="string optional control-label" for="q_price">{{ __('front.car_price') }}</label>
                        <select name="currency_id" id="q_currency">
                            @foreach($currencies as $currency)
                                <option {{request('currency_id') == $currency->id? 'selected': ''}} value="{{ $currency->id }}">{{ $currency->code }}</option>
                            @endforeach
                        </select>
                        <input class="string optional" placeholder="min."  type="text" name="price_min" id="q_price_from" value="{{ request('price_min') }}"/>
                        <input class="string optional" placeholder="maks." type="text" name="price_max" id="q_price_to" value="{{ request('price_max') }}"/>
                    </div>
                    <div class="auto_loan boolean optional q_loan">
                        <input name="credit" type="hidden" value="0" />
                        <input class="boolean optional" type="checkbox" value="1" name="credit" id="q_loan" {{ request('credit') ? 'checked': '' }}/>
                        <label class="boolean optional control-label" for="q_loan">{{ __('front.credit2') }}</label>
                    </div>
                    <div class="auto_barter boolean optional q_barter">
                        <input name="barter" type="hidden" value="0" />
                        <input class="boolean optional" type="checkbox" value="1" name="barter" id="q_barter" {{ request('barter') ? 'checked': '' }}/>
                        <label class="boolean optional control-label" for="q_barter">{{ __('front.barter2') }}</label>
                    </div>
                    <div class="auto_depozit boolean optional q_depozit">
                        <input name="deposit" type="hidden" value="0" />
                        <input class="boolean optional" type="checkbox" value="1" name="deposit" id="q_depozit" {{ request('deposit') ? 'checked': '' }}/>
                        <label class="boolean optional control-label" for="q_depozit">{{ __('front.deposit2') }}</label>
                    </div>
                    <button name="commit" type="submit" class="btn-search">{{ __('front.search') }}</button>
                    <div class="input string optional q_reg_year">
                        <label class="string optional control-label" for="q_reg_year">{{ __('front.car_year') }}</label>
                        <input class="string optional" placeholder="min." type="text" name="min_year" id="q_year_from" value="{{ request('min_year') }}"/>
                        <input class="string optional" placeholder="maks." type="text" name="max_year" id="q_year_to" value="{{ request('max_year') }}"/>
                    </div>
                    <input type="hidden" name="q[sort]" id="q_sort" />
                    <div class="input select optional q_region">
                        <select name="city_id" class="select optional" id="q_region">
                            <option value="">{{ __('front.all_cities') }}</option>
                            @foreach($cities as $city)
                                <option {{request('city_id') == $city->id? 'selected': ''}} value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
{{--                    <div class="ad-count">--}}
{{--                        <a class="all-ads-link" href="{{ route('autos') }}"></a>--}}
{{--                        <p class="ad-count--animation">--}}
{{--                            19690--}}
{{--                            <el></el>--}}
{{--                            an--}}
{{--                        </p>--}}
{{--                        <p class="ad-count--animation">{{ __('front.all_cities') }}: 525 {{ __('front.new') }}</p>--}}
{{--                    </div>--}}
                    <div class="ad-count" style="background-color: #797979;text-decoration: none; margin-bottom: 8px;border-radius: 2px;color: #fff !important;     width: 168px;height: 42px;line-height: 42px;margin-bottom: 8px;border-radius: 2px;color: #fff;text-align: center;font-size: 18px;">
                        <a class="all-ads-link" href="{{ route('search') }}" style="color: #fff">{{ __('front.advanced_search') }}</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="page-content">
            <div class="products-container index-products-container">
                <div class="section-title-container">
                    <div class="section-title">
                        <p class="section-title_name">{{ __('front.all_posts') }}</p>
                        <p class="section-subtitle_name">24 {{ __('front.hour') }}:
                            <a class="section-title_more" target="_blank" href="{{ route('autos') }}">{{$autos->count()}} {{ __('front.new_posts') }}</a>
                        </p>
                        <a class="section-title_more" target="_blank" href="{{ route('autos') }}">{{ __('front.show_all') }}</a>
                    </div>
                </div>
                <div class="products-content">
                    <div class="products row grid">
                        @foreach($autos as $data)
                            <x-auto :detail="$data"/>
                        @endforeach
                    </div>
                </div>
                {{ $autos->links() }}
            </div>
        </div>
    </main>
@endsection
