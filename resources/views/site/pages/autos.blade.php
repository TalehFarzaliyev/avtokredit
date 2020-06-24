@extends('site.layouts.app')
@section('title', $car->car_brand['name'].' '.$car->car_model['name'])
@section('content')
    <main class="main-container">
        <div class="section-title-container">
            <div class="section-title">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs-i"><a href="{{ route('autos') }}?car_brand_id={{ $car->car_brand_id }}">{{ $car->car_brand['name'] }}</a></li>
                    <li class="breadcrumbs-i"><a href="{{ route('autos') }}?car_brand_id={{ $car->car_brand_id }}&car_model_id={{ $car->car_model_id }}">{{ $car->car_model['name'] }}</a></li>
                    <li class="breadcrumbs-i">{{ __('front.advertisement') }} № {{ $car->id }}</li>
                </ul>
            </div>
        </div>
        <div class="page-content anounce-container">
            <div class="product-container">
                <div class="product credit">
                    <div class="product-photos">
                        <a class="product-photos-large" href="{{ $car->thumbnail_url }}">
                            <img alt="{{ $car->car_brand['name'] }} {{ $car->car_model['name'] }}" src="{{ $car->thumbnail }}" />
                        </a>
                        <div class="product-photos-thumbnails product-photos-thumbnails_l">
                            @if($car->images)
                                @foreach($car->thumbnails as $image)
                                    <a href="{{ $image['full'] }}">
                                        <img alt="{{ $car->car_brand['name'] }} {{ $car->car_model['name'] }}" src="{{ $image['thumb'] }}" />
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <h1 class="product-name product-name-row">{{ $car->car_brand['name'] }} {{ $car->car_model['name'] }} ,
                        <span class="nobr">{{ $car->engine_volume/1000 }} L</span>,
                        <span class="nobr">{{ $car->year }} {{ __('front.year') }}</span>,
                        <span class="nobr">{{ $car->mileage }} km</span>
                    </h1>
                    <div class="product-services">
                        <p class="services-label">{{ __('front.sell mode quickly') }}:</p>
                        <div class="services">
                            <a id="bump_open" class="services-i services-i_bump" data-reveal-id="bump_modal" data-animation="fade" href="#bump_open">{{ __('front.Pull the ad forward') }}
                                <span class="services-i-price">
                                    <span class="price-val">{{ __('front.from') }}</span>
                                    <span class="price-cur">3 AZN</span>
                                </span>
                            </a>
                            <a id="vip_open" class="services-i services-i_vip" data-reveal-id="vip_modal" data-animation="fade" href="#vip_open">{{ __('front.make the ad VIP') }}
                                <span class="services-i-price">
                                <span class="price-val">{{ __('front.from') }}</span>
                                <span class="price-cur">15 AZN</span>
                                </span>
                            </a>
                            <a id="featured_open" class="services-i services-i_featured" data-reveal-id="featured_modal" data-animation="fade" href="#featured_open">{{ __('front.make the ad premium') }}<span class="services-i-price"><span class="price-val">{{ __('front.from') }}</span><span class="price-cur">5 AZN</span></span></a>
                        </div>
                    </div>
                    <div class="product-header">
                        <div class="product-price">{{ $car->price }} <span>{{ $car->currency['symbol_right'] ?? $car->currency['symbol_left'] }}</span></div>
                        <div class="seller-info">
                            <div class="seller-contacts">
                                <div class="seller-phone">
                                    <i class="fas fa-phone fa-rotate-90 icon-svg icon-svg--phone"></i>
                                    <a class="phone" href="tel:{{ $car->phone }}">{{ $car->phone }}</a>
                                </div>
                                <div class="seller-name">
                                    <p>{{ $car->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-statistics">
                            <p>
                                <label for="ad_hits"> {{ __('front.number of views') }} </label>: {{ $car->visit }}
                            </p>
                            <p>
                                <label for="ad_updated_at">{{ __('front.updated') }}</label>: {{ $car->updated_at }}
                            </p>
                            <p>
                                <label for="ad_id">{{ __('front.ad number') }}</label>: {{ $car->id }}
                            </p>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-properties-container">
                            <ul class="product-properties">
                                <li class="product-properties-i">
                                    <label for="ad_region">{{ __('front.city') }}</label>
                                    <div class="product-properties-value">{{ $car->city ? $car->city['name'] : '' }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_make_id">{{ __('front.brand') }}</label>
                                    <div class="product-properties-value"><a target="_blank" href="#">{{ $car->car_brand['name'] }}</a></div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_model">{{ __('front.model') }}</label>
                                    <div class="product-properties-value"><a target="_blank" href="#">{{ $car->car_model['name'] }}</a></div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_reg_year">{{ __('front.year') }}</label>
                                    <div class="product-properties-value"><a target="_blank" href="#">{{ $car->year }}</a></div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_category">{{ __('front.body type') }}</label>
                                    <div class="product-properties-value">{{ $car->body_type['name'] }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_color">{{ __('front.color') }}</label>
                                    <div class="product-properties-value">{{ $car->color['name'] }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_engine_volume">{{ __('front.engine volume') }}</label>
                                    <div class="product-properties-value">{{ $car->engine_volume / 1000 }} L</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_power">{{ __('front.engine power')  }}</label>
                                    <div class="product-properties-value">{{ $car->power }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_fuel_type">{{ __('front.fuel_type') }}</label>
                                    <div class="product-properties-value">{{ $car->fuel_type['name'] }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_mileage">{{ __('front.mileage') }}</label>
                                    <div class="product-properties-value">{{ $car->mileage }} {{ __('front.km') }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_transmission">{{ __('front.transmission') }}</label>
                                    <div class="product-properties-value">{{ $car->transmission['name'] }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_gear">{{ __('front.gear') }}</label>
                                    <div class="product-properties-value">{{ $car->gear['name'] }}</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_new">{{ __('front.new') }}</label>
                                    <div class="product-properties-value">{{ $car->mileage > 0 ? __('front.no') : __('front.yes') }}</div>
                                </li>
                                <li class="product-properties-i product-properties_price">
                                    <label for="ad_price">{{ __('front.price') }}</label>
                                    <div class="product-properties-value">
                                        <div class="product-price">{{ $car->price }} <span>{{ $car->currency['symbol_left'] ?? $car->currency['symbol_right'] }}</span></div>
                                    </div>
                                </li>
                                @if($car->barter)
                                    <li class="product-properties-i product-properties-i_barter">
                                        <div class="product-properties-value">{{ __('front.barter ok') }}</div>
                                    </li>
                                @endif
                            </ul>
                            @if($car->credit)
                                <div class="product-credit-info">
                                    <p>{{ __('front.it is on credit') }}</p>
                                    <div class="auto-credit-section">
                                        <label for="" class="auto-credit-time">{{ __('front.term') }}
                                            <input disabled class="numeric non_null required" value="{{ $car->credit_period }} {{ __('front.month') }}" type="text" step="any" name="auto[credit_time]" id="auto_credit_time">
                                        </label>
                                        <label for="" class="auto-credit-firstpay">{{ __('front.the initial payment') }}
                                            <input disabled class="numeric non_null required" value="{{ $car->credit_initial_amount }} {{ $car->currency['code'] }}" type="text" step="any" name="auto[credit_firstpay]" id="auto_credit_firstpay">
                                        </label>
                                        <label for="" class="auto-credit-monthpay">{{ __('front.monthly payment') }}
                                            <input disabled class="numeric non_null required" value="{{ $car->credit_monthly_amount }} {{ $car->currency['code'] }}" type="text" step="any" name="auto[credit_monthpay]" id="auto_credit_monthpay">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($car->deposit)
                                <div class="product-deposit-info">
                                    <p>{{ __('front.it is on deposit') }}</p>
                                    <div class="auto-deposit-section">
                                        <label for="" class="auto-deposit-time">{{ __('front.term') }}
                                            <input disabled class="numeric non_null required" value="{{ $car->deposit_period }} {{ __('front.month') }}" type="text" step="any" name="auto[deposit_time]" id="auto_deposit_time">
                                        </label>
                                        <label for="" class="auto-deposit-firstpay">{{ __('front.deposit amount') }}
                                            <input disabled class="numeric non_null required" value="{{ $car->deposit_amount }}  {{ $car->currency['code'] }}" type="text" step="any" name="auto[deposit_amount]" id="auto_deposit_amount">
                                        </label>
                                        <label for="" class="auto-deposit-dailypay">{{ __('front.daily payment') }}
                                            <input disabled class="numeric non_null required" value="{{ $car->deposit_daily_pay }} {{ $car->currency['code'] }}" type="text" step="any" name="auto[deposit_dailypay]" id="auto_deposit_dailypay">
                                        </label>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="product-description">
                            <div class="product-extras">
                                @foreach($car->technical_specification() as $technical_specification)
                                    <p class="product-extras-i">{{ $technical_specification['name'] }}</p>
                                @endforeach
                            </div>
                            <h2 class="product-text">{!! $car->description !!}</h2>
                            <div class="product-like">
                                <div class="fb-like" data-share="true" data-show-faces="true" data-action="like" data-width="330" data-href="{{ route('auto.view', $car->id)  }}"></div>
                            </div>
                            <div class="reveal-modal pin-recovery">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        PIN-şifrənin bərpası
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="pin-recovery-options">
                                            <div class="via_sms">
                                                <input type="radio" name="pin_recovery" id="pin_recovery_via_sms" value="via_sms" />
                                                <label for="pin_recovery_via_sms">SMS vasitəsilə</label>
                                            </div>
                                            <div class="via_email">
                                                <input type="radio" name="pin_recovery" id="pin_recovery_via_email" value="via_email" />
                                                <label for="pin_recovery_via_email">Elektron ünvanı vasitəsilə</label>
                                            </div>
                                        </div>
                                        <div class="email-form-container">
                                            Zəhmət olmasa, elektron ünvanınızı qeyd edin.
                                            <form class="email-form" action="{{ route('auto.view', $car->id) }}" accept-charset="UTF-8" data-remote="true" method="post">
                                                <input name="utf8" type="hidden" value="&#x2713;" />
                                                <input type="text" name="email" id="email" required="required" />
                                                <button name="button" type="submit" class="submit">Göndərmək</button>
                                                <div class="error"></div>
                                            </form>
                                            <a class="return-to-options" href="{{ route('auto.view', $car->id) }}">Geri</a>
                                        </div>
                                        <div class="email-sent">
                                            <p>PIN-şifrəniz sizə göndərildi.</p>
                                            <a class="return-to-options" href="{{ route('auto.view', $car->id) }}">Geri</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class="product-actions-i product-actions-i--bookmarking added @if(! in_array( $car->id,$bookmarks)) hide @endif js-unbookmark-item-{{ $car->id }}" data-remote="true" rel="nofollow" data-method="get" href="{{ route('auto.deleteBookmark',$car->id) }}"><i class="far fa-heart"></i>{{ __('front.It is in the favorites') }}</a>
                                <a class="product-actions-i product-actions-i--bookmarking @if(in_array($car->id,$bookmarks)) hide @endif js-bookmark-item-{{ $car->id }}" data-remote="true" rel="nofollow" data-method="get" href="{{ route('auto.addBookmark',$car->id) }}"><i class="far fa-heart"></i>{{ __('front.Add to favorites') }}</a>
                                <br /><a class="product-actions-i edit js-click-edit-request" href="#"><i class="far fa-edit"></i>{{ __('front.edit') }}</a>
                                <a class="product-actions-i expire js-click-expire" href="{{ route('auto.view', $car->id) }}#expire"><i class="fas fa-trash-alt"></i>{{ __('front.Delete the ad') }}</a>
                            </div>
                            <div class="reveal-modal confirm-edit">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        {{ __('front.edit_ad') }}
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="action-form-container">
                                            <p>{{ __('front.expire_text1') }}</p>
                                            <p>{{ __('front.expire_text2') }}</p>
                                            <form class="confirm" action="{{ route('auto.edit', $car->id) }}" accept-charset="UTF-8" method="GET">
                                                <label>{{ __('front.ad_pincode') }}</label>
                                                <input type="text" name="pincode" id="pincode" required="required" />
                                                <button name="button" type="submit" class="submit">{{ __('front.confirm') }}</button>
                                                <div class="error"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reveal-modal confirm-expire">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        {{ __('front.expire_ad') }}
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="action-form-container">
                                            <p>{{ __('front.expire_text1') }}</p>
                                            <p>{{ __('front.expire_text2') }}</p>
                                            <form class="confirm" action="{{ route('auto.expire', $car->id) }}" accept-charset="UTF-8" data-remote="true" method="post">
                                                <label>{{ __('front.ad_pincode') }}</label>
                                                <input type="text" name="pincode" id="pincode" required="required" />
                                                <button name="button" type="submit" class="submit">{{ __('front.confirm') }}</button>
                                                <div class="error"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-comments">
                        <div class="fb-comments" data-num-posts="20" data-width="680" data-href="{{ route('auto.view', $car->id) }}"></div>
                    </div>
                </div>
                <div class="banners-right">

                </div>
            </div>
            <div class="w-100">
                <div class="section-title-container products">
                    <hr>
                    <div class="section-title">
                        <p class="section-title_name">{{ __('front.similar ads') }}</p>
                        <a class="section-title_more" target="_blank" href="{{ route('autos') }}?car_brand_id={{ $car->car_brand_id }}&car_model_id={{ $car->car_model_id }}">{{ __('front.show them all') }}</a>
                    </div>
                </div>
                <div class="products-container index-products-container">
                    <div class="products-content">
                        <div class="products row grid">
                            @foreach($cars as $data)
                                <x-auto :detail="$data"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
