<div class="products-i featured vip premium salon barter taxi">
    <a class="products-i-link" target="_blank" href="{{ route('auto.view', $detail->id) }}"></a>
    <div class="products-img">
        <img alt="Mercedes V 250" loading="lazy" src="{{ $detail->main }}" />
        <div class="products-price">
            <div class="product-price">
                <span>{{ $detail->currency['symbol_left'] ?? '' }} </span>{{ $detail->price }}<span> {{ $detail->currency['symbol_right'] ?? '' }}</span>
            </div>
            @if($detail->credit == 1)
                <span class="credit-item"><i class="fas fa-percent"></i></span>
            @endif

            @if($detail->barter == 1)
            <span class="barter-item"><i class="fas fa-percent"></i></span>
            @endif
        </div>
        <div class="products-info">
            @if($detail->company['company_group_id'] == 1)
            <span class="salon-text">{{ __('front.salon') }}</span>
            @endif
            @if($detail->company['company_group_id'] == 3)
                <span class="taxi-text">{{ __('front.taxi2') }}</span>
            @endif
            @if($detail->deposit == 1)
            <span class="deposit-text">{{ __('front.deposit') }}</span>
            @endif
        </div>
    </div>
    <div class="products-description">
        <p class="products-name">{{ $detail->car_brand['name'] }} {{ $detail->car_model['name'] }}</p>
        <div class="products-attributes">
            <p class="products-attributes-i">{{ $detail->year }} {{ __('front.year') }}</p>
            <p class="products-attributes-i">{{ $detail->engine_volume/1000 }} L</p>
            <p class="products-attributes-i">{{ $detail->miliage }} km</p>
        </div>
        <div class="products-bottom">{{ $detail->city['name'] }}, {{ date('d.m.Y H:i', strtotime($detail->updated_at)) }}</div>
        <div class="products-paid">
            @if($detail->type == 2)
            <div class="premium-block">
                <img class="premium-img" src="{{ asset('front/image/premium.png') }}" alt="">
            </div>
            @endif
            @if($detail->type == 1)
            <img class="vip-img" src="{{ asset('front/image/vip.png') }}" alt="">
            @endif
        </div>
    </div>
</div>
