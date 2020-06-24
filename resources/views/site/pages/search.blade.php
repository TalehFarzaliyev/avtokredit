@extends('site.layouts.app')
@section('title', __('front.advanced_search'))
@section('content')
    <div class="main-container" data-lotriver-wrapper="">
        <div class="section-title-container">
            <div class="section-title">
                <p class="section-title_name">{{ __('front.advanced_search') }}</p>
            </div>
        </div>
        <div class="search-product section-main-container">
            <form class="simple_form full-search-form" id="new_q" novalidate="novalidate" action="{{ route('autos') }}" accept-charset="UTF-8" method="get">
                <div class="search-product-i">
                    <div class="left-side">
                        <div class="input multiple_select optional q_make">
                            <label class="multiple_select optional control-label" for="q_make">{{ __('front.car_brand') }}</label>
                            <select title="{{ __('front.all_brands') }}" onchange="getSelect('{{ url('autos/get-car-models') }}','car_model_id', this)" class="select optional" name="car_brand_id" id="q_make">
                                <option value="">{{ __('front.all_brands') }}</option>
                                @foreach($car_brands as $car_brand)
                                    <option {{request('car_brand_id') == $car_brand->id? 'selected': ''}} value="{{ $car_brand->id }}">{{ $car_brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input multiple_select optional q_region">
                            <label class="multiple_select optional control-label" for="q_region">{{ __('front.city') }}</label>
                            <select title="{ __('front.all_cities') }}" class="select optional" name="city_id" id="q_region">
                                <option value="">{{ __('front.all_cities') }}</option>
                                @foreach($cities as $city)
                                    <option {{request('city_id') == $city->id? 'selected': ''}} value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-product-i">
                    <div class="left-side">
                        <div class="input multiple_select optional q_model">
                            <label class="multiple_select optional control-label" for="q_model">{{ __('front.car_model') }}</label>
                            <select title="{{ __('front.all_models') }}" class="select optional" name="car_model_id" id="q_model">
                                <option value="">{{ __('front.all_models') }}</option>
                                @if(old('car_model_id'))
                                    @foreach($car_models as $car_model)
                                        <option {{request('car_model_id') == $car_model->id? 'selected': ''}} value="{{$car_model->id}}">{{$car_model->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input multiple_select optional q_fuel_type">
                            <label class="multiple_select optional control-label" for="q_fuel_type">{{ __('front.fuel_type') }}</label>
                            <select title="{{ __('front.all_types') }}" class="select optional" name="fuel_type_id" id="q_fuel_type">
                                <option value="">{{ __('front.all_types') }}</option>
                                @foreach($fuel_types as $fuel_type)
                                    <option {{request('fuel_type_id') == $fuel_type->id? 'selected': ''}} value="{{ $fuel_type->id }}">{{ $fuel_type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-product-i">
                    <div class="left-side">
                        <div class="input multiple_select optional q_category">
                            <label class="multiple_select optional control-label" for="q_category">{{ __('front.body_type') }}</label>
                            <select title="{{ __('front.all_types') }}" class="select optional" name="body_type_id" id="q_category">
                                <option value="">{{ __('front.all_types') }}</option>
                                @foreach($body_types as $body_type)
                                    <option {{request('body_type_id') == $body_type->id? 'selected': ''}} value="{{ $body_type->id }}">{{ $body_type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input multiple_select optional q_gear">
                            <label class="multiple_select optional control-label" for="q_gear">{{ __('front.gear') }}</label>
                            <select title="{{ __('front.all_types') }}" class="select optional" name="gear" id="q_gear">
                                <option value="">{{ __('front.all_types') }}</option>
                                @foreach($gears as $gear)
                                    <option {{request('gear') == $gear->id? 'selected': ''}} value="{{ $gear->id }}">{{ $gear->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-product-i">
                    <div class="left-side">
                        <div class="input multiple_select optional q_color">
                            <label class="multiple_select optional control-label" for="q_color">{{ __('front.color') }}</label>
                            <select title="{{ __('front.all_colors') }}" class="select optional" name="color" id="q_color">
                                <option value="">{{ __('front.all_colors') }}</option>
                                @foreach($colors as $color)
                                    <option {{request('color') == $color->id? 'selected': ''}} value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input multiple_select optional q_transmission">
                            <label class="multiple_select optional control-label" for="q_transmission">{{ __('front.transmission') }}</label>
                            <select title="{{ __('front.all_types') }}" class="select optional" name="transmission_id" id="q_transmission">
                                <option value="">{{ __('front.all_types') }}</option>
                                @foreach($transmissions as $transmission)
                                    <option {{request('transmission_id') == $transmission->id? 'selected': ''}} value="{{ $transmission->id }}">{{ $transmission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="search-product-i">
                    <div class="left-side">
                        <div class="input string optional q_mileage">
                            <label class="string optional control-label" for="q_mileage">{{ __('front.mileage') }}</label>
                            <div class="range">
                                <label for="q_mileage_from">{{ __('front.min') }}</label>
                                <input class="string optional" type="text" name="min_mileage" id="q_mileage_from" value="{{ request('min_mileage') }}"/>
                                <label for="q_mileage_to">{{ __('front.max') }}</label>
                                <input class="string optional" type="text" name="max_mileage" id="q_mileage_to" value="{{ request('max_mileage') }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input string optional q_reg_year">
                            <label class="string optional control-label" for="q_reg_year">{{ __('front.car_year') }}</label>
                            <div class="range">
                                <label for="q_year_from">{{ __('front.min') }}</label>
                                <input class="string optional" type="text" name="min_year" id="q_year_from" value="{{ request('min_year') }}"/>
                                <label for="q_year_to">{{ __('front.max') }}.</label>
                                <input class="string optional" type="text" name="max_year" id="q_year_to" value="{{ request('max_year') }}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-product-i">
                    <div class="left-side">
                        <div class="input string optional q_price">
                            <label class="string optional control-label" for="q_price">{{ __('front.car_price') }}</label>
                            <div class="range">
                                <label for="q_price_from">{{ __('front.min') }}</label>
                                <input class="string optional" type="text" name="price_min" id="q_price_from" value="{{ request('price_min') }}"/>
                                <label for="q_price_to">{{ __('front.max') }}</label>
                                <input class="string optional" type="text" name="price_max" id="q_price_to" value="{{ request('price_max') }}"/>
                                <select name="currency_id" id="q_currency">
                                    @foreach($currencies as $currency)
                                        <option {{request('currency_id') == $currency->id? 'selected': ''}} value="{{ $currency->id }}">{{ $currency->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input string optional q_engine_volume">
                            <label class="string optional control-label" for="q_engine_volume">{{ __('front.engine_volume') }}<sup>3</sup></label>
                            <div class="range">
                                <label for="q_engine_volume_from">{{ __('front.min') }}</label>
                                <select include_blank="false" class="select optional" name="min_engine_volume" id="q_engine_volume_from">
                                    <option {{ request('min_engine_volume') == 0 ? 'selected' : '' }} value="0">0</option>
                                    <option {{ request('min_engine_volume') == 100 ? 'selected' : '' }} value="100">100</option>
                                    <option {{ request('min_engine_volume') == 200 ? 'selected' : '' }} value="200">200</option>
                                    <option {{ request('min_engine_volume') == 300 ? 'selected' : '' }} value="300">300</option>
                                    <option {{ request('min_engine_volume') == 400 ? 'selected' : '' }} value="400">400</option>
                                    <option {{ request('min_engine_volume') == 500 ? 'selected' : '' }} value="500">500</option>
                                    <option {{ request('min_engine_volume') == 600 ? 'selected' : '' }} value="600">600</option>
                                    <option {{ request('min_engine_volume') == 700 ? 'selected' : '' }} value="700">700</option>
                                    <option {{ request('min_engine_volume') == 800 ? 'selected' : '' }} value="800">800</option>
                                    <option {{ request('min_engine_volume') == 900 ? 'selected' : '' }} value="900">900</option>
                                    <option {{ request('min_engine_volume') == 1000 ? 'selected' : '' }} value="1000">1000</option>
                                    <option {{ request('min_engine_volume') == 1100 ? 'selected' : '' }} value="1100">1100</option>
                                    <option {{ request('min_engine_volume') == 1200 ? 'selected' : '' }} value="1200">1200</option>
                                    <option {{ request('min_engine_volume') == 1300 ? 'selected' : '' }} value="1300">1300</option>
                                    <option {{ request('min_engine_volume') == 1400 ? 'selected' : '' }} value="1400">1400</option>
                                    <option {{ request('min_engine_volume') == 1500 ? 'selected' : '' }} value="1500">1500</option>
                                    <option {{ request('min_engine_volume') == 1600 ? 'selected' : '' }} value="1600">1600</option>
                                    <option {{ request('min_engine_volume') == 1700 ? 'selected' : '' }} value="1700">1700</option>
                                    <option {{ request('min_engine_volume') == 1800 ? 'selected' : '' }} value="1800">1800</option>
                                    <option {{ request('min_engine_volume') == 1900 ? 'selected' : '' }} value="1900">1900</option>
                                    <option {{ request('min_engine_volume') == 2000 ? 'selected' : '' }} value="2000">2000</option>
                                    <option {{ request('min_engine_volume') == 2100 ? 'selected' : '' }} value="2100">2100</option>
                                    <option {{ request('min_engine_volume') == 2200 ? 'selected' : '' }} value="2200">2200</option>
                                    <option {{ request('min_engine_volume') == 2300 ? 'selected' : '' }} value="2300">2300</option>
                                    <option {{ request('min_engine_volume') == 2400 ? 'selected' : '' }} value="2400">2400</option>
                                    <option {{ request('min_engine_volume') == 2500 ? 'selected' : '' }} value="2500">2500</option>
                                    <option {{ request('min_engine_volume') == 2600 ? 'selected' : '' }} value="2600">2600</option>
                                    <option {{ request('min_engine_volume') == 2700 ? 'selected' : '' }} value="2700">2700</option>
                                    <option {{ request('min_engine_volume') == 2800 ? 'selected' : '' }} value="2800">2800</option>
                                    <option {{ request('min_engine_volume') == 2900 ? 'selected' : '' }} value="2900">2900</option>
                                    <option {{ request('min_engine_volume') == 3000 ? 'selected' : '' }} value="3000">3000</option>
                                    <option {{ request('min_engine_volume') == 3100 ? 'selected' : '' }} value="3100">3100</option>
                                    <option {{ request('min_engine_volume') == 3200 ? 'selected' : '' }} value="3200">3200</option>
                                    <option {{ request('min_engine_volume') == 3300 ? 'selected' : '' }} value="3300">3300</option>
                                    <option {{ request('min_engine_volume') == 3400 ? 'selected' : '' }} value="3400">3400</option>
                                    <option {{ request('min_engine_volume') == 3500 ? 'selected' : '' }} value="3500">3500</option>
                                    <option {{ request('min_engine_volume') == 3600 ? 'selected' : '' }} value="3600">3600</option>
                                    <option {{ request('min_engine_volume') == 3700 ? 'selected' : '' }} value="3700">3700</option>
                                    <option {{ request('min_engine_volume') == 3800 ? 'selected' : '' }} value="3800">3800</option>
                                    <option {{ request('min_engine_volume') == 3900 ? 'selected' : '' }} value="3900">3900</option>
                                    <option {{ request('min_engine_volume') == 4000 ? 'selected' : '' }} value="4000">4000</option>
                                    <option {{ request('min_engine_volume') == 4100 ? 'selected' : '' }} value="4100">4100</option>
                                    <option {{ request('min_engine_volume') == 4200 ? 'selected' : '' }} value="4200">4200</option>
                                    <option {{ request('min_engine_volume') == 4300 ? 'selected' : '' }} value="4300">4300</option>
                                    <option {{ request('min_engine_volume') == 4600 ? 'selected' : '' }} value="4600">4600</option>
                                    <option {{ request('min_engine_volume') == 4700 ? 'selected' : '' }} value="4700">4700</option>
                                    <option {{ request('min_engine_volume') == 4800 ? 'selected' : '' }} value="4800">4800</option>
                                    <option {{ request('min_engine_volume') == 4900 ? 'selected' : '' }} value="4900">4900</option>
                                    <option {{ request('min_engine_volume') == 5000 ? 'selected' : '' }} value="5000">5000</option>
                                    <option {{ request('min_engine_volume') == 5100 ? 'selected' : '' }} value="5100">5100</option>
                                    <option {{ request('min_engine_volume') == 5200 ? 'selected' : '' }} value="5200">5200</option>
                                    <option {{ request('min_engine_volume') == 5300 ? 'selected' : '' }} value="5300">5300</option>
                                    <option {{ request('min_engine_volume') == 5400 ? 'selected' : '' }} value="5400">5400</option>
                                    <option {{ request('min_engine_volume') == 5500 ? 'selected' : '' }} value="5500">5500</option>
                                    <option {{ request('min_engine_volume') == 5600 ? 'selected' : '' }} value="5600">5600</option>
                                    <option {{ request('min_engine_volume') == 5700 ? 'selected' : '' }} value="5700">5700</option>
                                    <option {{ request('min_engine_volume') == 5800 ? 'selected' : '' }} value="5800">5800</option>
                                    <option {{ request('min_engine_volume') == 5900 ? 'selected' : '' }} value="5900">5900</option>
                                    <option {{ request('min_engine_volume') == 6000 ? 'selected' : '' }} value="6000">6000</option>
                                    <option {{ request('min_engine_volume') == 6100 ? 'selected' : '' }} value="6100">6100</option>
                                    <option {{ request('min_engine_volume') == 6200 ? 'selected' : '' }} value="6200">6200</option>
                                    <option {{ request('min_engine_volume') == 6300 ? 'selected' : '' }} value="6300">6300</option>
                                    <option {{ request('min_engine_volume') == 6400 ? 'selected' : '' }} value="6400">6400</option>
                                    <option {{ request('min_engine_volume') == 6500 ? 'selected' : '' }} value="6500">6500</option>
                                    <option {{ request('min_engine_volume') == 7000 ? 'selected' : '' }} value="7000">7000</option>
                                    <option {{ request('min_engine_volume') == 7500 ? 'selected' : '' }} value="7500">7500</option>
                                    <option {{ request('min_engine_volume') == 8000 ? 'selected' : '' }} value="8000">8000</option>
                                    <option {{ request('min_engine_volume') == 8500 ? 'selected' : '' }} value="8500">8500</option>
                                    <option {{ request('min_engine_volume') == 9000 ? 'selected' : '' }} value="9000">9000</option>
                                    <option {{ request('min_engine_volume') == 9500 ? 'selected' : '' }} value="9500">9500</option>
                                    <option {{ request('min_engine_volume') == 10000 ? 'selected' : '' }} value="10000">10000</option>
                                    <option {{ request('min_engine_volume') == 11000 ? 'selected' : '' }} value="11000">11000</option>
                                    <option {{ request('min_engine_volume') == 12000 ? 'selected' : '' }} value="12000">12000</option>
                                    <option {{ request('min_engine_volume') == 13000 ? 'selected' : '' }} value="13000">13000</option>
                                    <option {{ request('min_engine_volume') == 14000 ? 'selected' : '' }} value="14000">14000</option>
                                    <option {{ request('min_engine_volume') == 15000 ? 'selected' : '' }} value="15000">15000</option>
                                    <option {{ request('min_engine_volume') == 16000 ? 'selected' : '' }} value="16000">16000</option>
                                </select>
                                <label for="q_engine_volume_to">{{ __('front.max') }}</label>
                                <select include_blank="Bütün" class="select optional" name="max_engine_volume" id="q_engine_volume_to">
                                    <option value="">{{ __('front.all') }}</option>
                                    <option {{ request('max_engine_volume') == 0 ? 'selected' : '' }} value="0">0</option>
                                    <option {{ request('max_engine_volume') == 100 ? 'selected' : '' }} value="100">100</option>
                                    <option {{ request('max_engine_volume') == 200 ? 'selected' : '' }} value="200">200</option>
                                    <option {{ request('max_engine_volume') == 300 ? 'selected' : '' }} value="300">300</option>
                                    <option {{ request('max_engine_volume') == 400 ? 'selected' : '' }} value="400">400</option>
                                    <option {{ request('max_engine_volume') == 500 ? 'selected' : '' }} value="500">500</option>
                                    <option {{ request('max_engine_volume') == 600 ? 'selected' : '' }} value="600">600</option>
                                    <option {{ request('max_engine_volume') == 700 ? 'selected' : '' }} value="700">700</option>
                                    <option {{ request('max_engine_volume') == 800 ? 'selected' : '' }} value="800">800</option>
                                    <option {{ request('max_engine_volume') == 900 ? 'selected' : '' }} value="900">900</option>
                                    <option {{ request('max_engine_volume') == 1000 ? 'selected' : '' }} value="1000">1000</option>
                                    <option {{ request('max_engine_volume') == 1100 ? 'selected' : '' }} value="1100">1100</option>
                                    <option {{ request('max_engine_volume') == 1200 ? 'selected' : '' }} value="1200">1200</option>
                                    <option {{ request('max_engine_volume') == 1300 ? 'selected' : '' }} value="1300">1300</option>
                                    <option {{ request('max_engine_volume') == 1400 ? 'selected' : '' }} value="1400">1400</option>
                                    <option {{ request('max_engine_volume') == 1500 ? 'selected' : '' }} value="1500">1500</option>
                                    <option {{ request('max_engine_volume') == 1600 ? 'selected' : '' }} value="1600">1600</option>
                                    <option {{ request('max_engine_volume') == 1700 ? 'selected' : '' }} value="1700">1700</option>
                                    <option {{ request('max_engine_volume') == 1800 ? 'selected' : '' }} value="1800">1800</option>
                                    <option {{ request('max_engine_volume') == 1900 ? 'selected' : '' }} value="1900">1900</option>
                                    <option {{ request('max_engine_volume') == 2000 ? 'selected' : '' }} value="2000">2000</option>
                                    <option {{ request('max_engine_volume') == 2100 ? 'selected' : '' }} value="2100">2100</option>
                                    <option {{ request('max_engine_volume') == 2200 ? 'selected' : '' }} value="2200">2200</option>
                                    <option {{ request('max_engine_volume') == 2300 ? 'selected' : '' }} value="2300">2300</option>
                                    <option {{ request('max_engine_volume') == 2400 ? 'selected' : '' }} value="2400">2400</option>
                                    <option {{ request('max_engine_volume') == 2500 ? 'selected' : '' }} value="2500">2500</option>
                                    <option {{ request('max_engine_volume') == 2600 ? 'selected' : '' }} value="2600">2600</option>
                                    <option {{ request('max_engine_volume') == 2700 ? 'selected' : '' }} value="2700">2700</option>
                                    <option {{ request('max_engine_volume') == 2800 ? 'selected' : '' }} value="2800">2800</option>
                                    <option {{ request('max_engine_volume') == 2900 ? 'selected' : '' }} value="2900">2900</option>
                                    <option {{ request('max_engine_volume') == 3000 ? 'selected' : '' }} value="3000">3000</option>
                                    <option {{ request('max_engine_volume') == 3100 ? 'selected' : '' }} value="3100">3100</option>
                                    <option {{ request('max_engine_volume') == 3200 ? 'selected' : '' }} value="3200">3200</option>
                                    <option {{ request('max_engine_volume') == 3300 ? 'selected' : '' }} value="3300">3300</option>
                                    <option {{ request('max_engine_volume') == 3400 ? 'selected' : '' }} value="3400">3400</option>
                                    <option {{ request('max_engine_volume') == 3500 ? 'selected' : '' }} value="3500">3500</option>
                                    <option {{ request('max_engine_volume') == 3600 ? 'selected' : '' }} value="3600">3600</option>
                                    <option {{ request('max_engine_volume') == 3700 ? 'selected' : '' }} value="3700">3700</option>
                                    <option {{ request('max_engine_volume') == 3800 ? 'selected' : '' }} value="3800">3800</option>
                                    <option {{ request('max_engine_volume') == 3900 ? 'selected' : '' }} value="3900">3900</option>
                                    <option {{ request('max_engine_volume') == 4000 ? 'selected' : '' }} value="4000">4000</option>
                                    <option {{ request('max_engine_volume') == 4100 ? 'selected' : '' }} value="4100">4100</option>
                                    <option {{ request('max_engine_volume') == 4200 ? 'selected' : '' }} value="4200">4200</option>
                                    <option {{ request('max_engine_volume') == 4300 ? 'selected' : '' }} value="4300">4300</option>
                                    <option {{ request('max_engine_volume') == 4400 ? 'selected' : '' }} value="4400">4400</option>
                                    <option {{ request('max_engine_volume') == 4500 ? 'selected' : '' }} value="4500">4500</option>
                                    <option {{ request('max_engine_volume') == 4600 ? 'selected' : '' }} value="4600">4600</option>
                                    <option {{ request('max_engine_volume') == 4700 ? 'selected' : '' }} value="4700">4700</option>
                                    <option {{ request('max_engine_volume') == 4800 ? 'selected' : '' }} value="4800">4800</option>
                                    <option {{ request('max_engine_volume') == 4900 ? 'selected' : '' }} value="4900">4900</option>
                                    <option {{ request('max_engine_volume') == 5000 ? 'selected' : '' }} value="5000">5000</option>
                                    <option {{ request('max_engine_volume') == 5100 ? 'selected' : '' }} value="5100">5100</option>
                                    <option {{ request('max_engine_volume') == 5200 ? 'selected' : '' }} value="5200">5200</option>
                                    <option {{ request('max_engine_volume') == 5300 ? 'selected' : '' }} value="5300">5300</option>
                                    <option {{ request('max_engine_volume') == 5400 ? 'selected' : '' }} value="5400">5400</option>
                                    <option {{ request('max_engine_volume') == 5500 ? 'selected' : '' }} value="5500">5500</option>
                                    <option {{ request('max_engine_volume') == 5600 ? 'selected' : '' }} value="5600">5600</option>
                                    <option {{ request('max_engine_volume') == 5700 ? 'selected' : '' }} value="5700">5700</option>
                                    <option {{ request('max_engine_volume') == 5800 ? 'selected' : '' }} value="5800">5800</option>
                                    <option {{ request('max_engine_volume') == 5900 ? 'selected' : '' }} value="5900">5900</option>
                                    <option {{ request('max_engine_volume') == 6000 ? 'selected' : '' }} value="6000">6000</option>
                                    <option {{ request('max_engine_volume') == 6100 ? 'selected' : '' }} value="6100">6100</option>
                                    <option {{ request('max_engine_volume') == 6200 ? 'selected' : '' }} value="6200">6200</option>
                                    <option {{ request('max_engine_volume') == 6300 ? 'selected' : '' }} value="6300">6300</option>
                                    <option {{ request('max_engine_volume') == 6400 ? 'selected' : '' }} value="6400">6400</option>
                                    <option {{ request('max_engine_volume') == 6500 ? 'selected' : '' }} value="6500">6500</option>
                                    <option {{ request('max_engine_volume') == 7000 ? 'selected' : '' }} value="7000">7000</option>
                                    <option {{ request('max_engine_volume') == 7500 ? 'selected' : '' }} value="7500">7500</option>
                                    <option {{ request('max_engine_volume') == 8000 ? 'selected' : '' }} value="8000">8000</option>
                                    <option {{ request('max_engine_volume') == 8500 ? 'selected' : '' }} value="8500">8500</option>
                                    <option {{ request('max_engine_volume') == 9000 ? 'selected' : '' }} value="9000">9000</option>
                                    <option {{ request('max_engine_volume') == 9500 ? 'selected' : '' }} value="9500">9500</option>
                                    <option {{ request('max_engine_volume') == 10000 ? 'selected' : '' }} value="10000">10000</option>
                                    <option {{ request('max_engine_volume') == 11000 ? 'selected' : '' }} value="11000">11000</option>
                                    <option {{ request('max_engine_volume') == 12000 ? 'selected' : '' }} value="12000">12000</option>
                                    <option {{ request('max_engine_volume') == 13000 ? 'selected' : '' }} value="13000">13000</option>
                                    <option {{ request('max_engine_volume') == 14000 ? 'selected' : '' }} value="14000">14000</option>
                                    <option {{ request('max_engine_volume') == 15000 ? 'selected' : '' }} value="15000">15000</option>
                                    <option {{ request('max_engine_volume') == 16000 ? 'selected' : '' }} value="16000">16000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="auto_loan boolean optional q_loan">
                    <input class="boolean optional" type="checkbox" value="1" name="credit" id="q_loan" {{ request('credit') ? 'checked': '' }}/>
                    <label class="boolean optional control-label" for="q_loan">{{ __('front.credit2') }}</label>
                </div>
                <div class="auto_barter boolean optional q_barter">
                    <input class="boolean optional" type="checkbox" value="1" name="barter" id="q_barter" {{ request('barter') ? 'checked': '' }}/>
                    <label class="boolean optional control-label" for="q_barter">{{ __('front.barter2') }}</label>
                </div>
                <div class="auto_barter boolean optional q_deposit">
                    <input class="boolean optional" type="checkbox" value="1" name="deposit" id="q_deposit" {{ request('deposit') ? 'checked': '' }}/>
                    <label class="boolean optional control-label" for="q_deposit">{{ __('front.deposit') }}</label>
                </div>
                <div class="search-product--title">{{ __('front.technical_specification') }}</div>
                <div class="auto_extras">
                    @foreach($technical_specifications as $technical_specification)
                        <span><input type="checkbox" {{ request('technical_specification_id') ? 'checked': '' }} value="{{ $technical_specification->id }}" name="technical_specification_id[]" id="q_extras_{{ $technical_specification->id }}" /><label class="collection_check_boxes" for="q_extras_{{ $technical_specification->id }}">{{ $technical_specification->name }}</label></span>
                    @endforeach
                </div>
                <div class="search-product--title">{{ __('front.search_result') }}</div>
                <div class="search-product-i">
                    <div class="left-side">
                        <div class="input select optional q_sort">
                            <label class="select optional control-label" for="q_sort">{{ __('front.sorting') }}</label>
                            <select class="select optional" name="sort" id="q_sort">
                                <option data-path="" {{ request('sort') == 'created_at' ? 'selected': '' }} value="created_at">{{ __('front.sort_by_date') }}</option>
                                <option data-path="" {{ request('sort') == 'price_asc' ? 'selected': '' }} value="price_asc">{{ __('front.first_cheap') }}</option>
                                <option data-path="" {{ request('sort') == 'price_desc' ? 'selected': '' }} value="price_desc">{{ __('front.first_expencive') }}</option>
                                <option data-path="" {{ request('sort') == 'mileage' ? 'selected': '' }} value="mileage">{{ __('front.sort_by_mileage') }}</option>
                                <option data-path="" {{ request('sort') == 'reg_year' ? 'selected': '' }} value="reg_year">{{ __('front.sort_by_year') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="input select optional q_used">
                            <label class="select optional control-label" for="q_used">{{ __('front.show_cars') }}</label>
                            <select class="select optional" name="used" id="q_used">
                                <option value="">{{ __('front.all') }}</option>
                                <option {{ request('used') == 1 ? 'selected': '' }} value="1">{{ __('front.used') }}</option>
                                <option {{ request('used') == '0' ? 'selected': '' }} value="0">{{ __('front.new') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button name="button" type="submit" data-disable-with="{{ __('front.Sending') }}...">{{ __('front.search') }}</button>
            </form>
        </div>
    </div>
@endsection
