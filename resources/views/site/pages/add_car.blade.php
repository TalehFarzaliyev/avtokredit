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
            <div class="new-product">
{{--                <div class="limits-container">--}}
{{--                    <div class="limits limits--info">--}}
{{--                        <div class="limits--title">{{ __('front.new_post') }}</div>--}}
{{--                        <div class="limits--rules">{{ __('front.30_days') }}--}}
{{--                            <br>{{ __('front.12_azn') }}--}}
{{--                        </div>--}}
{{--                        <div class="limits-phone">--}}
{{--                            <div class="limits-phone--title">{{ __('front.enter_number') }}:</div>--}}
{{--                            <input class="limits--phone-number" maxlength="15" name="phone[1][number]" placeholder="(***) ***-**-**" type="tel" value="{{ session('phone') ?? '' }}"/>--}}
{{--                            <div class="limits--phone-error">{{ __('front.incorrect_number') }}</div>--}}
{{--                            <div class="limits--button limits--button-next limits--phone-button-next disabled" data-limits-url="{{ route('check-number') }}">--}}
{{--                                <span>{{ __('front.next') }}</span><span class="progress-loader"></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="limits limits--exceed">--}}
{{--                        <div class="limits--description"></div>--}}
{{--                        <div class="limits--pay">--}}
{{--                            <div class="limits--pay-title-amount">{{ __('front.select_post_package') }}</div>--}}
{{--                            <div class="limits--pay-title-method">{{ __('front.payment_method') }}</div>--}}
{{--                            <div class="limits--pay-form-container"></div>--}}
{{--                        </div>--}}
{{--                        <div class="limits--button-group">--}}
{{--                            <div class="limits--button limits--button-back"><span>{{ __('front.back') }}</span><span class="progress-loader"></span></div>--}}
{{--                            <div class="limits--button limits--button-next"><span>{{ __('front.pay') }}</span><span class="progress-loader"></span></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="limits limits--limit ">--}}
{{--                        <div class="limits--description">--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="limits-container">
                    <div class="limits limits--info">
                        <div class="limits--title">YENİ ELAN</div>
                        <div class="limits--rules">30 gün ərzində Turbo.az saytında yalnız bir pulsuz elan yerləşdirmək olar.<br>Hər bir növbəti elanın qiyməti — 12 AZN.</div>
                        <div class="limits-phone">
                            <div class="limits-phone--title">Əlaqə nömrənizi daxil edin:</div>
                            <div class="limits--phone-error">Telefon nömrəsi yanlış daxil edilib.</div>
                            <input class="limits--phone-number" maxlength="15" name="phone[1][number]" placeholder="(070) 777-88-99" type="tel">
                            <div class="limits--button limits--button-next limits--phone-button-next disabled" data-limits-url="{{ route('check-number') }}"><span>Davam etmək</span><span class="progress-loader"></span></div>
                        </div>
                    </div>
                    <div class="limits limits--exceed">
                        <div class="limits--description"></div>
                        <div class="limits--pay">
                            <div class="limits--pay-title-amount">Elan paketinizi seçin:</div>
                            <div class="limits--pay-title-method">ÖDƏNİŞ ÜSULU</div>
                            <div class="limits--pay-form-container"></div>
                        </div>
                        <div class="limits--button-group">
                            <div class="limits--button limits--button-back"><span>Geri</span><span class="progress-loader"></span></div>
                            <div class="limits--button limits--button-next"><span>Ödəmək</span><span class="progress-loader"></span></div>
                        </div>
                    </div>
                    <div class="limits limits--limit ">
                        <div class="limits--description"></div>
                    </div>
                </div>
                <div class="form-header" style="opacity: 1">
                    <div class="form-title">{{ __('front.post') }}</div>
                    <div class="new-product--notice">
                        <ul>
                            <li>{{ __('front.3_month') }}</li>
                            <li>{{ __('front.3_month_repeat') }}</li>
                            <li>{{ __('front.for_premium') }}</li>
                        </ul>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="simple_form new_auto" id="new_auto" style="opacity: 1" novalidate="novalidate" enctype="multipart/form-data" action="{{ route('autos.store') }}" accept-charset="UTF-8" method="post">
                    @csrf
                    <div class="new-product-i">
                        <div class="left-side">
                            <div class="input string required auto_make_id">
                                <label class="string required control-label @error('car_brand_id') text-danger @enderror" for="auto_make_id">{{ __('front.car_brand') }} <abbr title="required">(*)</abbr></label>
                                <select onchange="getSelect('{{ url('autos/autos/get-car-models') }}','car_model_id', this)" name="car_brand_id" id="auto_make_id">
                                    <option value="">{{ __('front.select') }}</option>
                                    @foreach($car_brands as $car_brand)
                                        <option {{ old('car_brand_id') == $car_brand->id ? 'selected': '' }} value="{{ $car_brand->id }}">{{ $car_brand->name }}</option>
                                    @endforeach
                                </select>
                                <span class="error">göstərilməlidir</span>
                                @error('car_brand_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="input select required auto_fuel_type">
                                <label class="select required control-label  @error('fuel_type_id') text-danger @enderror" for="auto_fuel_type_id">{{ __('front.fuel_type') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="fuel_type_id" id="auto_fuel_type_id">
                                    <option value=""></option>
                                    @foreach($fuel_types as $fuel_type)
                                        <option {{ old('fuel_type_id') == $fuel_type->id ? 'selected': '' }} value="{{ $fuel_type->id }}">{{ $fuel_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('fuel_type_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="new-product-i">
                        <div class="left-side">
                            <div class="input string required auto_model">
                                <label class="string required control-label  @error('car_model_id') text-danger @enderror" for="auto_model">{{ __('front.car_model') }} <abbr title="required">(*)</abbr></label>
                                <select name="car_model_id" id="auto_model_id">
                                    <option value="">{{ __('front.select') }}</option>
                                </select>
                                @error('car_model_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="input select required auto_fuel_consumption">
                                <label class="select required control-label  @error('fuel_usage') text-danger @enderror" for="auto_fuel_consumption_id">{{ __('front.fuel_usage') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="fuel_usage" id="auto_fuel_consumption_id">
                                    <option value=""></option>
                                    <option {{ old('fuel_usage') == '9B' ? 'selected': '' }} value="9B">9B</option>
                                    <option {{ old('fuel_usage') == '10B' ? 'selected': '' }} value="10B">10B</option>
                                    <option {{ old('fuel_usage') == '11B' ? 'selected': '' }} value="11B">11B</option>
                                    <option {{ old('fuel_usage') == '12B' ? 'selected': '' }} value="12B">12B</option>
                                    <option {{ old('fuel_usage') == '12.5B' ? 'selected': '' }} value="12.5B">12.5B</option>
                                    <option {{ old('fuel_usage') == '13B' ? 'selected': '' }} value="13B">13B</option>
                                    <option {{ old('fuel_usage') == '13.5B' ? 'selected': '' }} value="13.5B">13.5B</option>
                                    <option {{ old('fuel_usage') == '14B' ? 'selected': '' }} value="14B">14B</option>
                                    <option {{ old('fuel_usage') == '14.5B' ? 'selected': '' }} value="14.5B">14.5B</option>
                                    <option {{ old('fuel_usage') == '15B' ? 'selected': '' }} value="15B">15B</option>
                                </select>
                                @error('fuel_usage')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="new-product-i">
                        <div class="left-side">
                            <div class="input select required auto_category">
                                <label class="select required control-label @error('body_type_id') text-danger @enderror" for="auto_category_id">{{ __('front.body_type') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="body_type_id" id="auto_category_id">
                                    <option value=""></option>
                                    @foreach($body_types as $body_type)
                                        <option {{ old('body_type_id') == $body_type->id ? 'selected': '' }} value="{{ $body_type->id }}">{{ $body_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('body_type_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="input select required auto_gear">
                                <label class="select required control-label @error('gear_id') text-danger @enderror" for="auto_gear_id">{{ __('front.gear') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="gear_id" id="auto_gear_id">
                                    <option value=""></option>
                                    @foreach($gears as $gear)
                                        <option {{ old('gear_id') == $gear->id ? 'selected': '' }} value="{{ $gear->id }}">{{ $gear->name }}</option>
                                    @endforeach
                                </select>
                                @error('gear_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="new-product-i">
                        <div class="left-side">
                            <div class="input integer required auto_mileage">
                                <label class="integer required control-label @error('mileage') text-danger @enderror" for="auto_mileage">{{ __('front.mileage') }} <abbr title="required">(*)</abbr></label>
                                <input step="10000" max="" class="numeric integer required" min="0" type="number" name="mileage" id="auto_mileage" value="{{ old('mileage') }}" />
                                @error('mileage')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="input select required auto_transmission">
                                <label class="select required control-label @error('transmission_id') text-danger @enderror" for="auto_transmission_id">{{ __('front.transmission') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="transmission_id" id="auto_transmission_id">
                                    <option value=""></option>
                                    @foreach($transmissions as $transmission)
                                        <option {{ old('transmission_id') == $transmission->id ? 'selected': '' }} value="{{ $transmission->id }}">{{ $transmission->name }}</option>
                                    @endforeach
                                </select>
                                @error('transmission_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="new-product-i">
                        <div class="left-side">
                            <div class="input select required auto_color">
                                <label class="select required control-label @error('color_id') text-danger @enderror" for="auto_color_id">{{ __('front.color') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="color_id" id="auto_color_id">
                                    <option value=""></option>
                                    @foreach($colors as $color)
                                        <option {{ old('color_id') == $color->id ? 'selected': '' }} value="{{ $color->id }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                                @error('color_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="input select required auto_reg_year">
                                <label class="select required control-label @error('year') text-danger @enderror" for="auto_reg_year">{{ __('front.car_year') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="year" id="auto_reg_year">
                                    <option value=""></option>
                                    @for($year=date('Y'); $year >= 1960; --$year)
                                        <option {{ old('year') == $year ? 'selected': '' }} value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('year')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="new-product-i">
                        <div class="left-side tooltips-input">
                            <label class="non_null required control-label @error('price') text-danger @enderror" for="auto_price">{{ __('front.car_price') }} <abbr title="required">(*)</abbr></label>
                            <input class="numeric non_null required" min="500" max="2147483647" value="{{ old('price') }}" type="number" step="any" name="price" id="auto_price"/>
                            @error('price')
                            <span class="error">{{ __('front.must_show') }}</span>
                            @enderror
                            {{--
                            <div class="tooltips">
                                --}}
                            {{--
                            <div class="tooltips-body">Qiymət bölməsində maşının tam qiyməti yazılmalıdır. Kreditin ilkin ödəniş məbləği yalnız &quot;Əlavə məlumat&quot; bölməsində qeyd edilməlidir</div>
                            --}}
                            {{--
                        </div>
                        --}}
                            <div class="input radio_buttons optional auto_currency">
                                <input type="hidden" name="currency_id" value="" />
                                @foreach($currencies as $currency)
                                    <span class="radio">
                            <input class="radio_buttons optional" type="radio" {{ old('currency_id') == $currency->id ? 'checked': '' }} value="{{ $currency->id }}" name="currency_id" id="auto_currency_{{ $currency->code }}" />
                            <label class="collection_radio_buttons @error('currency_id') text-danger @enderror" for="auto_currency_{{ $currency->code }}">{{ $currency->code }}</label>
                            @error('currency_id')
                            <span class="error">{{ __('front.must_show') }}</span>
                            @enderror
                            </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="input select required auto_engine_volume mb-20">
                                <label class="select required control-label @error('engine_volume') text-danger @enderror" for="auto_engine_volume">{{ __('front.engine_volume') }}<sup>3</sup> <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="engine_volume" id="auto_engine_volume">
                                    <option value=""></option>
                                    <option {{ old('engine_volume') == 50 ? 'selected': '' }} value="50">50</option>
                                    <option {{ old('engine_volume') == 100 ? 'selected': '' }} value="100">100</option>
                                    <option {{ old('engine_volume') == 150 ? 'selected': '' }} value="150">150</option>
                                    <option {{ old('engine_volume') == 200 ? 'selected': '' }} value="200">200</option>
                                    <option {{ old('engine_volume') == 250 ? 'selected': '' }} value="250">250</option>
                                    <option {{ old('engine_volume') == 300 ? 'selected': '' }} value="300">300</option>
                                    <option {{ old('engine_volume') == 350 ? 'selected': '' }} value="350">350</option>
                                    <option {{ old('engine_volume') == 400 ? 'selected': '' }} value="400">400</option>
                                    <option {{ old('engine_volume') == 450 ? 'selected': '' }} value="450">450</option>
                                    <option {{ old('engine_volume') == 700 ? 'selected': '' }} value="700">700</option>
                                    <option {{ old('engine_volume') == 800 ? 'selected': '' }} value="800">800</option>
                                    <option {{ old('engine_volume') == 900 ? 'selected': '' }} value="900">900</option>
                                    <option {{ old('engine_volume') == 1000 ? 'selected': '' }} value="1000">1000</option>
                                    <option {{ old('engine_volume') == 1100 ? 'selected': '' }} value="1100">1100</option>
                                    <option {{ old('engine_volume') == 1200 ? 'selected': '' }} value="1200">1200</option>
                                    <option {{ old('engine_volume') == 1300 ? 'selected': '' }} value="1300">1300</option>
                                    <option {{ old('engine_volume') == 1400 ? 'selected': '' }} value="1400">1400</option>
                                    <option {{ old('engine_volume') == 1500 ? 'selected': '' }} value="1500">1500</option>
                                    <option {{ old('engine_volume') == 1600 ? 'selected': '' }} value="1600">1600</option>
                                    <option {{ old('engine_volume') == 1700 ? 'selected': '' }} value="1700">1700</option>
                                    <option {{ old('engine_volume') == 1800 ? 'selected': '' }} value="1800">1800</option>
                                    <option {{ old('engine_volume') == 1900 ? 'selected': '' }} value="1900">1900</option>
                                    <option {{ old('engine_volume') == 2000 ? 'selected': '' }} value="2000">2000</option>
                                    <option {{ old('engine_volume') == 2100 ? 'selected': '' }} value="2100">2100</option>
                                    <option {{ old('engine_volume') == 2200 ? 'selected': '' }} value="2200">2200</option>
                                    <option {{ old('engine_volume') == 2300 ? 'selected': '' }} value="2300">2300</option>
                                    <option {{ old('engine_volume') == 2400 ? 'selected': '' }} value="2400">2400</option>
                                    <option {{ old('engine_volume') == 2500 ? 'selected': '' }} value="2500">2500</option>
                                    <option {{ old('engine_volume') == 2600 ? 'selected': '' }} value="2600">2600</option>
                                    <option {{ old('engine_volume') == 2700 ? 'selected': '' }} value="2700">2700</option>
                                    <option {{ old('engine_volume') == 2800 ? 'selected': '' }} value="2800">2800</option>
                                    <option {{ old('engine_volume') == 2900 ? 'selected': '' }} value="2900">2900</option>
                                    <option {{ old('engine_volume') == 3000 ? 'selected': '' }} value="3000">3000</option>
                                    <option {{ old('engine_volume') == 3100 ? 'selected': '' }} value="3100">3100</option>
                                    <option {{ old('engine_volume') == 3200 ? 'selected': '' }} value="3200">3200</option>
                                    <option {{ old('engine_volume') == 3300 ? 'selected': '' }} value="3300">3300</option>
                                    <option {{ old('engine_volume') == 3400 ? 'selected': '' }} value="3400">3400</option>
                                    <option {{ old('engine_volume') == 3500 ? 'selected': '' }} value="3500">3500</option>
                                    <option {{ old('engine_volume') == 3600 ? 'selected': '' }} value="3600">3600</option>
                                    <option {{ old('engine_volume') == 3700 ? 'selected': '' }} value="3700">3700</option>
                                    <option {{ old('engine_volume') == 3800 ? 'selected': '' }} value="3800">3800</option>
                                    <option {{ old('engine_volume') == 3900 ? 'selected': '' }} value="3900">3900</option>
                                    <option {{ old('engine_volume') == 4000 ? 'selected': '' }} value="4000">4000</option>
                                    <option {{ old('engine_volume') == 4100 ? 'selected': '' }} value="4100">4100</option>
                                    <option {{ old('engine_volume') == 4200 ? 'selected': '' }} value="4200">4200</option>
                                    <option {{ old('engine_volume') == 4300 ? 'selected': '' }} value="4300">4300</option>
                                    <option {{ old('engine_volume') == 4400 ? 'selected': '' }} value="4400">4400</option>
                                    <option {{ old('engine_volume') == 4500 ? 'selected': '' }} value="4500">4500</option>
                                    <option {{ old('engine_volume') == 4600 ? 'selected': '' }} value="4600">4600</option>
                                    <option {{ old('engine_volume') == 4700 ? 'selected': '' }} value="4700">4700</option>
                                    <option {{ old('engine_volume') == 4800 ? 'selected': '' }} value="4800">4800</option>
                                    <option {{ old('engine_volume') == 4900 ? 'selected': '' }} value="4900">4900</option>
                                    <option {{ old('engine_volume') == 5000 ? 'selected': '' }} value="5000">5000</option>
                                    <option {{ old('engine_volume') == 5100 ? 'selected': '' }} value="5100">5100</option>
                                    <option {{ old('engine_volume') == 5200 ? 'selected': '' }} value="5200">5200</option>
                                    <option {{ old('engine_volume') == 5300 ? 'selected': '' }} value="5300">5300</option>
                                    <option {{ old('engine_volume') == 5400 ? 'selected': '' }} value="5400">5400</option>
                                    <option {{ old('engine_volume') == 5500 ? 'selected': '' }} value="5500">5500</option>
                                    <option {{ old('engine_volume') == 5600 ? 'selected': '' }} value="5600">5600</option>
                                    <option {{ old('engine_volume') == 5700 ? 'selected': '' }} value="5700">5700</option>
                                    <option {{ old('engine_volume') == 5800 ? 'selected': '' }} value="5800">5800</option>
                                    <option {{ old('engine_volume') == 5900 ? 'selected': '' }} value="5900">5900</option>
                                    <option {{ old('engine_volume') == 6000 ? 'selected': '' }} value="6000">6000</option>
                                    <option {{ old('engine_volume') == 6100 ? 'selected': '' }} value="6100">6100</option>
                                    <option {{ old('engine_volume') == 6200 ? 'selected': '' }} value="6200">6200</option>
                                    <option {{ old('engine_volume') == 6300 ? 'selected': '' }} value="6300">6300</option>
                                    <option {{ old('engine_volume') == 6400 ? 'selected': '' }} value="6400">6400</option>
                                    <option {{ old('engine_volume') == 6500 ? 'selected': '' }} value="6500">6500</option>
                                    <option {{ old('engine_volume') == 7000 ? 'selected': '' }} value="7000">7000</option>
                                    <option {{ old('engine_volume') == 7500 ? 'selected': '' }} value="7500">7500</option>
                                    <option {{ old('engine_volume') == 8000 ? 'selected': '' }} value="8000">8000</option>
                                    <option {{ old('engine_volume') == 8500 ? 'selected': '' }} value="8500">8500</option>
                                    <option {{ old('engine_volume') == 9000 ? 'selected': '' }} value="9000">9000</option>
                                    <option {{ old('engine_volume') == 9500 ? 'selected': '' }} value="9500">9500</option>
                                    <option {{ old('engine_volume') == 10000 ? 'selected': '' }} value="10000">10000</option>
                                    <option {{ old('engine_volume') == 11000 ? 'selected': '' }} value="11000">11000</option>
                                    <option {{ old('engine_volume') == 12000 ? 'selected': '' }} value="12000">12000</option>
                                    <option {{ old('engine_volume') == 13000 ? 'selected': '' }} value="13000">13000</option>
                                    <option {{ old('engine_volume') == 14000 ? 'selected': '' }} value="14000">14000</option>
                                    <option {{ old('engine_volume') == 15000 ? 'selected': '' }} value="15000">15000</option>
                                    <option {{ old('engine_volume') == 16000 ? 'selected': '' }} value="16000">16000</option>
                                </select>
                                @error('engine_volume')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                            <div class="input integer required auto_power">
                                <label class="integer required control-label @error('power') text-danger @enderror" for="auto_power">{{ __('front.power') }}. <abbr title="required">(*)</abbr></label>
                                <input class="numeric integer required" min="1" max="1000" type="number" step="1" name="power" id="auto_power" value="{{ old('power') }}"/>
                                @error('power')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="input boolean optional auto_barter">
                        <input name="barter" type="hidden" value="0" />
                        <input class="boolean optional" type="checkbox" {{ old('barter') ? 'checked' : '' }} value="1" name="barter" id="auto_barter" />
                        <label class="boolean optional control-label" for="auto_barter">{{ __('front.barter') }}</label>
                    </div>
                    <div class="input boolean optional auto_deposit" id="auto_deposit_process">
                        <input name="deposit" type="hidden" value="0" />
                        <input class="boolean optional" type="checkbox" {{ old('deposit') ? 'checked' : '' }} value="1" name="deposit" id="auto_deposit" />
                        <label class="boolean optional control-label" for="auto_deposit">{{ __('front.deposit') }}</label>
                        <div class="auto-deposit-section">
                            <label for="" class="auto-deposit-time">
                                {{ __('front.deposit_period') }}
                                <select name="deposit_period" id="auto-deposit-time">
                                    <option value=""></option>
                                    <option {{ old('deposit_period') == 1 ? 'selected' : '' }} value="1">6 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 2 ? 'selected' : '' }} value="2">12 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 3 ? 'selected' : '' }} value="3">18 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 4 ? 'selected' : '' }} value="4">24 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 5 ? 'selected' : '' }} value="5">36 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 6 ? 'selected' : '' }} value="6">48 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 7 ? 'selected' : '' }} value="7">60 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 8 ? 'selected' : '' }} value="8">72 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 9 ? 'selected' : '' }} value="9">84 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 10 ? 'selected' : '' }} value="10">96 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 11 ? 'selected' : '' }} value="11">108 {{ __('front.month') }}</option>
                                    <option {{ old('deposit_period') == 12 ? 'selected' : '' }} value="12">120 {{ __('front.month') }}</option>
                                </select>
                            </label>
                            <label for="" class="auto-deposit-firstpay">{{ __('front.deposit_amount') }}
                                <input class="numeric non_null required" min="1" max="2000000" value="{{ old('deposit_amount') }}" type="number" step="any" name="deposit_amount" id="auto_deposit_amount">
                            </label>
                            <label for="" class="auto-deposit-dailypay">{{ __('front.deposit_daily_pay') }}
                                <input class="numeric non_null required" min="50" max="20000" value="{{ old('deposit_daily_pay') }}" type="number" step="any" name="deposit_daily_pay" id="auto_deposit_dailypay">
                            </label>
                        </div>
                    </div>
                    <div class="input boolean optional auto_loan" id="auto_credit_process">
                        <input name="credit" type="hidden" value="0" />
                        <input class="boolean optional" type="checkbox" {{ old('credit') ? 'checked': '' }} value="1" name="credit" id="auto_loan" />
                        <label class="boolean optional control-label" for="auto_loan">{{ __('front.credit') }}</label>
                        <div class="auto-credit-section">
                            <label for="" class="auto-credit-time">
                                {{ __('front.credit_period') }}
                                <select name="credit_period" id="auto-credit-time">
                                    <option value=""></option>
                                    <option {{ old('credit_period') == 1 ? 'selected' : '' }} value="1">6 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 2 ? 'selected' : '' }} value="2">12 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 3 ? 'selected' : '' }} value="3">18 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 4 ? 'selected' : '' }} value="4">24 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 5 ? 'selected' : '' }} value="5">36 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 6 ? 'selected' : '' }} value="6">48 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 7 ? 'selected' : '' }} value="7">60 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 8 ? 'selected' : '' }} value="8">72 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 9 ? 'selected' : '' }} value="9">84 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 10 ? 'selected' : '' }} value="10">96 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 11 ? 'selected' : '' }} value="11">108 {{ __('front.month') }}</option>
                                    <option {{ old('credit_period') == 12 ? 'selected' : '' }} value="12">120 {{ __('front.month') }}</option>
                                </select>
                            </label>
                            <label for="" class="auto-credit-firstpay">{{ __('front.credit_initial_amount') }}
                                <input class="numeric non_null required" min="500" max="2000000" value="{{ old('credit_initial_amount') }}" type="number" step="any" name="credit_initial_amount" id="auto_credit_firstpay">
                            </label>
                            <label for="" class="auto-credit-monthpay">{{ __('front.credit_monthly_amount') }}
                                <input class="numeric non_null required" min="500" max="20000" value="{{ old('credit_monthly_amount') }}" type="number" step="any" name="credit_monthly_amount" id="auto_credit_monthpay">
                            </label>
                        </div>
                    </div>
                    <div class="left-side">
                        <div class="input text optional auto_description field_with_hint">
                            <label class="text optional control-label" for="auto_description">{{ __('front.description') }}</label>
                            <textarea class="text optional" name="description" id="auto_description">{{ old('description') }}</textarea>
                            <span class="hint">
                        {{ __('front.no_add_number') }}
                        </span>
                        </div>
                    </div>
                    <div class="input check_boxes optional auto_extras">
                        <label class="check_boxes optional control-label">{{ __('front.technical_specification') }}</label>
                        <input type="hidden" name="technical_specification_id[]" value="" />
                        @if($technical_specifications)
                            @foreach($technical_specifications as $technical_specification)
                                <span class="checkbox">
                    <input class="check_boxes optional" type="checkbox" @if(old('technical_specification_id')) @if(in_array($technical_specification->id, old('technical_specification_id'))) checked @endif @endif value="{{ $technical_specification->id }}" name="technical_specification_id[]" id="auto_extra_ids_{{ $technical_specification->id }}" />
                    <label class="collection_check_boxes" for="auto_extra_ids_{{ $technical_specification->id }}">{{ $technical_specification->name }}</label>
                    </span>
                            @endforeach
                        @endif
                    </div>
                    <div class="input pond pond-grid">
                        <label for="" class="string optional control-label @error('images[]') text-danger @enderror">{{ __('front.images') }}</label>
                        <div class="pond-inner">
                            <input accept="image/*" class="pond-new-img-field" multiple="" name="images[]" type="file">
                            @error('images[]')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                            <div class="pond-message">{{ __('front.more') }} <span class="js-pond-img-count">21</span> {{ __('front.you_can_add') }}</div>
                            <div class="pond-img-list ui-sortable ui-sortable-disabled">
                                <div class="pond-descr">
                                    <ul class="rule_list">
                                        <li class="rule_item">- {{ __('front.min_3_image') }}</li>
                                        <li class="rule_item">- {{ __('front.max_21_image') }}</li>
                                        <li class="rule_item">- {{ __('front.optimal_image_resolution') }}</li>
                                    </ul>
                                </div>
                                <div class="pond-img-card js-pond-img-card pond-img-card--front hoverable">
                                    <span>{{ __('front.front_view') }}</span>
                                </div>
                                <div class="pond-img-card js-pond-img-card pond-img-card--back hoverable">
                                    <span>{{ __('front.back_view') }}</span>
                                </div>
                                <div class="pond-img-card js-pond-img-card pond-img-card--dashboard hoverable">
                                    <span>{{ __('front.front_panel') }}</span>
                                </div>
                                <div class="pond-img-labels" id="js-pond-img-labels" style="display: none;">
                                    <span class="pond-img-labels-i js-pond-img-label">{{ __('front.front_view') }}</span>
                                    <span class="pond-img-labels-i js-pond-img-label">{{ __('front.back_view') }}</span>
                                    <span class="pond-img-labels-i js-pond-img-label">{{ __('front.front_panel') }}</span>
                                </div>
                                <label class="pond-new-img-button pond-new-img hoverable" for="pond_input">
                                    <span class="pond-new-img-icon"><span>+</span></span>
                                    {{ __('front.add_image') }}
                                </label>
                            </div>
                        </div>
                        <script id="pond_img_template" type="text/html">
                            <div class="pond-img">
                                <div class="pond-img-thumb-container"></div>
                                <div class="pond-img-actions">
                                    <a class="pond-img-delete" href="#" title="Silmək"></a>
                                </div>
                            </div>
                        </script>
                    </div>
                    <div class="photo-rules">
                        <ul class="rule_list">
                            <li class="rule_item">{{ __('front.image_must_in_azerbaijan') }}</li>
                            <li class="rule_item">{{ __('front.image_must_good') }}</li>
                        </ul>
                        <ul class="rule_list">
                            <li class="rule_item">{{ __('front.image_not_must_in_car_showroom') }}</li>
                            <li class="rule_item">{{ __('front.image_not_must_take_around_car_showroom') }}</li>
                        </ul>
                    </div>
                    <div class="new-product--title">{{ __('front.contact') }}</div>
                    <div class="new-product-alert">{{ __('front.cant_edit_after_post') }}</div>
                    <div class="new-product-i">
                        <div class="left-side seller-information">
                            <div class="input string required auto_seller_name">
                                <label class="string required control-label @error('name') text-danger @enderror" for="auto_seller_name">{{ __('front.name') }} <abbr title="required">(*)</abbr></label>
                                <input class="string required" type="text" name="name" id="auto_seller_name"  value="{{ old('name') }}"/>
                                @error('name')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                            <div class="input select required auto_region">
                                <label class="select required control-label @error('city_id') text-danger @enderror" for="auto_region_id">{{ __('front.city') }} <abbr title="required">(*)</abbr></label>
                                <select class="select required" name="city_id" id="auto_region_id">
                                    <option value=""></option>
                                    @foreach($cities as $city)
                                        <option {{ old('city_id') == $city->id ? 'selected': '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                            <div class="input email required auto_seller_email field_with_hint">
                                <label class="email required control-label @error('email') text-danger @enderror" for="auto_seller_email">{{ __('front.email') }} <abbr title="required">(*)</abbr></label>
                                <input class="string email required" type="email" name="email" id="auto_seller_email" value="{{ old('email') }}"/><span class="hint">{{ __('front.dont_showing_email') }}</span>
                                @error('email')
                                <span class="error">{{ __('front.must_show') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="right-side"></div>
                    </div>
                    <input name="phone" type="hidden" id="auto_phones" value="{{ old('phone') }}" />
                    <div class="choose-type choose-type--new">
                        <div class="choose-type--title">{{ __('front.select_post_type') }}:</div>
                        <div class="choose-type-container">
                            <div class="choose-type-i choose-type-vip">
                                <div class="choose-type-i--profits"><strong><span>10</span><br><span>{{ __('front.times') }}</span></strong>
                                    <span>{{ __('front.more_info') }}<br>{{ __('front.view_count') }}</span>
                                </div>
                                <div class="choose-type-i--description">
                                    <div class="choose-type-i--description-title">{{ __('front.vip_post') }}</div>
                                    <div class="choose-type-i--description-text">{{ __('front.more_view_with_vip') }}</div>
                                </div>
                                <div class="choose-type-i--button-container">
                                    <button name="listing_type" type="submit" class="choose-type-i--button" value="vip" data-disable-with="Göndərilir...">{{ __('front.15-azn') }}</button>
                                </div>
                            </div>
                            <div class="choose-type-i choose-type-free">
                                <div class="choose-type-i--profits">{{ __('front.free_post') }}</div>
                                <div class="choose-type-i--description">
                                    <div class="choose-type-i--description-title">{{ __('front.simple_post') }}</div>
                                    <div class="choose-type-i--description-text">{{ __('front.can_free_and_vip') }}</div>
                                </div>
                                <div class="choose-type-i--button-container">
                                    <button name="listing_type" type="submit" class="choose-type-i--button" value="free" data-disable-with="Göndərilir...">{{ __('front.post_free') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-product--confirm-rules">{{ __('front.if_you_add_post') }} <a target="_blank" href="/pages/terms-and-conditions">{{ __('front.user_agreement') }}</a> {{ __('front.and') }} <a target="_blank" href="/pages/rules">{{ __('front.user_rules') }}</a> {{ __('front.accepting') }}</div>
                </form>
            </div>
        </div>
    </div>
@endsection
