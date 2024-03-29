@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <main class="main-container">
        <div class="section-title-container">
            <div class="section-title">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs-i"><a href="/avtosalonlar">Avtosalonlar</a></li>
                    <li class="breadcrumbs-i"><a href="/avtosalonlar/avtosalon-auto-line">Avtosalon "Infinity"</a></li>
                    <li class="breadcrumbs-i"><a href="/makes/3-bmw">Infinity</a></li>
                    <li class="breadcrumbs-i"><a href="#">G37S</a></li>
                </ul>
            </div>
        </div>
        <div class="shop-container">
            <div class="shop-page-head">
                <div class="shop-header">
                    <div class="shop-header-left">
                        <div class="shop--logo" style="background-image: url(https://turbo.azstatic.com/uploads/f352x352/2017%2F12%2F05%2F15%2F31%2F20%2F107%2FLogo.png)"></div>
                        <a class="shop--products-count" href="/avtosalonlar/mercedes-benz-absheron">15 elan</a>
                    </div>
                    <div class="shop-header-right">
                        <div class="shop-header-text">
                            <h1 class="shop--title"><a href="/avtosalonlar/mercedes-benz-absheron">Abşeron Mercedes-Benz</a></h1>
                            <div class="shop-header-table">
                                <div class="shop-header-cell shop-header-cell_description">
                                    <h2 class="shop--description">Abşeron Avtomobil Mərkəzi Mercedes-Benz markasının Azərbaycandakı rəsmi dileridir.</h2>
                                    <div class="shop--location-wrap">
                                        <a data-reveal-id="shop-show-map" class="shop--location shop--open-location-modal" href="#">
                                            <i class="fas fa-map-marker-alt"></i>Bakı ş., Sumqayıt şossesi, 6-cı km.
                                        </a>
                                    </div>
                                    <div class="reveal-modal reveal-modal--map" id="shop-show-map">
                                        <div class="reveal-modal-popup">
                                            <div class="reveal-content">
                                                <div data-lat="40.462017" data-lng="49.750759" id="map"></div>
                                                <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBfOfshhTTkvEtsB_CAToazOUWE2zaleKE&amp;libraries=places" async="async" defer="defer"></script>
                                                <div class="close-reveal-modal"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-header-cell shop-header-cell_feedback">
                                    <div class="shop-phones">
                                        <i class="fas fa-phone fa-rotate-90"></i>
                                        <div class="shop-phones-content">
                                            <div class="shop-phones-i"><a class="shop-phones--number" data-register-call="true" href="tel:(050) 289-09-85">(050) 289-09-85</a></div>
                                            <div class="shop-phones-i"><a class="shop-phones--number" data-register-call="true" href="tel:(050) 289-09-80">(050) 289-09-80</a></div>
                                        </div>
                                    </div>
                                    <div class="shop--schedule">
                                        <i class="far fa-clock"></i>
                                        <div class="shop--schedule-i">Bazar ertəsi-Cümə: 09:00-19:00; Şənbə: 10:00-16:00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop--special-offer"><i class="far fa-star"></i>The best or nothing</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content autosalon-anounce-container">
            <div class="product-container">
                <div class="product credit">
                    <div class="product-photos">
                        <a class="product-photos-large" href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F49%2Fd5c23e7b-8e58-4b2c-a013-aecabf450b9a%2F10599_oaJTRr09nPvgV573aByEAQ.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/f330x248/2020%2F04%2F17%2F20%2F42%2F49%2Fd5c23e7b-8e58-4b2c-a013-aecabf450b9a%2F10599_oaJTRr09nPvgV573aByEAQ.jpg" /></a>
                        <div class="product-photos-thumbnails product-photos-thumbnails_l">
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F49%2F4845cf3a-8f41-4389-a49f-9008a742ee55%2F90909_qJYH5P_aMxXr8YlgUm1sPQ.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F49%2F4845cf3a-8f41-4389-a49f-9008a742ee55%2F90909_qJYH5P_aMxXr8YlgUm1sPQ.jpg" /></a>
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F51%2Ff220c0bb-63ea-4f8a-a6e6-6f425729b132%2F10584_uMwP0DZA932AiHJiFjHJXQ.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F51%2Ff220c0bb-63ea-4f8a-a6e6-6f425729b132%2F10584_uMwP0DZA932AiHJiFjHJXQ.jpg" /></a>
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F51%2F1a96bdad-7bd6-47de-8d59-4ea56131d8e7%2F44810_Ykif62_rQTSVT7ywopF4bQ.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F51%2F1a96bdad-7bd6-47de-8d59-4ea56131d8e7%2F44810_Ykif62_rQTSVT7ywopF4bQ.jpg" /></a>
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F51%2F36447f10-79ff-4db3-ac0d-fe0c15040d66%2F60931_vFwAofe3ME8Gu7p5xkSB-w.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F51%2F36447f10-79ff-4db3-ac0d-fe0c15040d66%2F60931_vFwAofe3ME8Gu7p5xkSB-w.jpg" /></a>
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F48%2F80fb993f-cd7b-4c61-a567-e87b46c4c46f%2F90901_kZDSMxz7KLT2Z9qIy3Vu_w.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F48%2F80fb993f-cd7b-4c61-a567-e87b46c4c46f%2F90901_kZDSMxz7KLT2Z9qIy3Vu_w.jpg" /></a>
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F50%2Ff04f5088-29a5-44cb-9ec7-794cd3bfe619%2F56257_xPcIJDWWe1S7I9drVHDCSA.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F50%2Ff04f5088-29a5-44cb-9ec7-794cd3bfe619%2F56257_xPcIJDWWe1S7I9drVHDCSA.jpg" /></a>
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F50%2Fe50316c5-7696-4340-8ca2-970d8ca91282%2F90905_jWEhh5HL74MiHe321EiHRw.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F50%2Fe50316c5-7696-4340-8ca2-970d8ca91282%2F90905_jWEhh5HL74MiHe321EiHRw.jpg" /></a>
                            <a href="https://turbo.azstatic.com/uploads/full/2020%2F04%2F17%2F20%2F42%2F50%2F92b4339a-589c-4117-9940-daa2ccdfb556%2F90909_7cTWO5_dum3BLGV0SqvfLQ.jpg"><img alt="Infiniti G37S" src="https://turbo.azstatic.com/uploads/thumbnail/2020%2F04%2F17%2F20%2F42%2F50%2F92b4339a-589c-4117-9940-daa2ccdfb556%2F90909_7cTWO5_dum3BLGV0SqvfLQ.jpg" /></a>
                        </div>
                    </div>
                    <h1 class="product-name product-name-row">Infiniti G37S, <span class="nobr">3.7 L</span>, <span class="nobr">2012 il</span>, <span class="nobr">81 000 km</span></h1>
                    <div class="product-services">
                        <p class="services-label">DAHA TEZ SAT:</p>
                        <div class="services">
                            <a id="bump_open" class="services-i services-i_bump" data-reveal-id="bump_modal" data-animation="fade" href="#bump_open">Elanı irəli çək<span class="services-i-price"><span class="price-val">3</span><span class="price-cur">AZN</span>-dən</span></a>
                            <div class="reveal-modal reveal-modal_service" id="bump_modal">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        Elanı irəli çək
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="description">
                                            <p>Hazırki funksiyanı istifadə edərək, daha çox insanların görəməsi üçün, siz öz elanınızı "Son əlavə edilmiş elanlar" bölməsində ön səhifəyə keçirə bilərsiniz.</p>
                                            <p>Xidmət ödənildikdən sonra, sizin elan “Son əlavə olunmuşlar”, markanın bütün elanları və modelin elanları siyahlarında birinci yerə yerləşdiriləcək</p>
                                            <p class="price">Xidmətin dəyəri - <b>3 AZN-dən</b>.</p>
                                        </div>
                                        <div class="prompt" data-action="/payments/verify">
                                            <label>Sizin elanınızın nömrəsi</label>
                                            <input type="text" name="item_id" id="item_id" />
                                            <button name="button" type="submit" class="next">Davam etmək</button>
                                        </div>
                                        <div class="verification"><span class="result">Siz <a href=/autos/3977618-infiniti-g37s>Infiniti G37S</a> elan üçün ödəniş keçirirsiz</span><a class="change-id" href="#">(dəyişmək)</a></div>
                                        <input type="hidden" name="payment[service_id]" id="payment_service_id" value="bump" />
                                        <div class="payment-form">
                                            <div class="pay">
                                                <div class="az-payments-form az-payments-form-goldenpay" data-provider="goldenpay">
                                                    <form class="new_payment" id="693063304ced4f354852b081b796df73_new_payment" action="/goldenpay" accept-charset="UTF-8" method="post">
                                                        <input name="utf8" type="hidden" value="&#x2713;" />
                                                        <input type="hidden" name="authenticity_token" value="6+mXj44pRgbzPwWWryEnNLRuCl/qoqcj5UV8P0U2lYSOhangHP6n0Cx7cOggr3LoaTSd6beJFbGFxQyTvjS7eg==" />
                                                        <input value="false" type="hidden" name="payment[mobile]" id="693063304ced4f354852b081b796df73_payment_mobile" />
                                                        <input value="desktop" type="hidden" name="payment[medium]" id="693063304ced4f354852b081b796df73_payment_medium" />
                                                        <input type="hidden" value="Ad" name="payment[target_type]" id="693063304ced4f354852b081b796df73_payment_target_type" />
                                                        <input type="hidden" value="3977618" name="payment[target_id]" id="693063304ced4f354852b081b796df73_payment_target_id" />
                                                        <div class="az-payments-type" data-priority="false">
                                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="693063304ced4f354852b081b796df73_payment_payment_provider_goldenpay" />
                                                                <label for="693063304ced4f354852b081b796df73_payment_payment_provider_goldenpay">Bank kartı</label>
                                                            </div>
                                                            <div class="az-payments-form-i portmanat">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="693063304ced4f354852b081b796df73_payment_payment_provider_portmanat" />
                                                                <label for="693063304ced4f354852b081b796df73_payment_payment_provider_portmanat">Portmanat</label>
                                                            </div>
                                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                                            </div>
                                                        </div>
                                                        <div class="az-service">
                                                            <div class="az-service-i bump">
                                                                <input class="az-payments-service-input" data-price="3" type="radio" value="bump" name="payment[service_id]" id="693063304ced4f354852b081b796df73_payment_service_id_bump" />
                                                                <label for="693063304ced4f354852b081b796df73_payment_service_id_bump"><span class="price">3 AZN /</span> <span class="name">1 dəfə irəli çək</span></label>
                                                            </div>
                                                            <div class="az-service-i bump3">
                                                                <input class="az-payments-service-input" data-price="6" type="radio" value="bump3" checked="checked" name="payment[service_id]" id="693063304ced4f354852b081b796df73_payment_service_id_bump3" />
                                                                <label for="693063304ced4f354852b081b796df73_payment_service_id_bump3"><span class="price">6 AZN /</span> <span class="name">3 dəfə irəli çək (hər 24 saat)</span></label>
                                                            </div>
                                                            <div class="az-service-i bump5">
                                                                <input class="az-payments-service-input" data-price="9" type="radio" value="bump5" name="payment[service_id]" id="693063304ced4f354852b081b796df73_payment_service_id_bump5" />
                                                                <label for="693063304ced4f354852b081b796df73_payment_service_id_bump5"><span class="price">9 AZN /</span> <span class="name">5 dəfə irəli çək (hər 24 saat)</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button name="button" type="submit">Ödəmək</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="az-payments-form az-payments-form-portmanat" data-provider="portmanat">
                                                    <form class="new_payment" id="b9f4b9d6b26a6b79a8dd25a45035d494_new_payment" action="/portmanat" accept-charset="UTF-8" method="post">
                                                        <input name="utf8" type="hidden" value="&#x2713;" />
                                                        <input type="hidden" name="authenticity_token" value="pYLP/1ARUR12tTfzrbivm0m+eD3NEUmZ2vngajDndc6A5Rbk5QkQpafHb8e3sDOoisD0aiUCVHW+qnwXKVA6GQ==" />
                                                        <input value="false" type="hidden" name="payment[mobile]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_mobile" />
                                                        <input value="desktop" type="hidden" name="payment[medium]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_medium" />
                                                        <input type="hidden" value="Ad" name="payment[target_type]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_target_type" />
                                                        <input type="hidden" value="3977618" name="payment[target_id]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_target_id" />
                                                        <div class="az-payments-type" data-priority="false">
                                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_payment_provider_goldenpay" />
                                                                <label for="b9f4b9d6b26a6b79a8dd25a45035d494_payment_payment_provider_goldenpay">Bank kartı</label>
                                                            </div>
                                                            <div class="az-payments-form-i portmanat">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_payment_provider_portmanat" />
                                                                <label for="b9f4b9d6b26a6b79a8dd25a45035d494_payment_payment_provider_portmanat">Portmanat</label>
                                                            </div>
                                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                                            </div>
                                                        </div>
                                                        <div class="az-service">
                                                            <div class="az-service-i bump">
                                                                <input class="az-payments-service-input" data-price="3" type="radio" value="bump" name="payment[service_id]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_service_id_bump" />
                                                                <label for="b9f4b9d6b26a6b79a8dd25a45035d494_payment_service_id_bump"><span class="price">3 AZN /</span> <span class="name">1 dəfə irəli çək</span></label>
                                                            </div>
                                                            <div class="az-service-i bump3">
                                                                <input class="az-payments-service-input" data-price="6" type="radio" value="bump3" checked="checked" name="payment[service_id]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_service_id_bump3" />
                                                                <label for="b9f4b9d6b26a6b79a8dd25a45035d494_payment_service_id_bump3"><span class="price">6 AZN /</span> <span class="name">3 dəfə irəli çək (hər 24 saat)</span></label>
                                                            </div>
                                                            <div class="az-service-i bump5">
                                                                <input class="az-payments-service-input" data-price="9" type="radio" value="bump5" name="payment[service_id]" id="b9f4b9d6b26a6b79a8dd25a45035d494_payment_service_id_bump5" />
                                                                <label for="b9f4b9d6b26a6b79a8dd25a45035d494_payment_service_id_bump5"><span class="price">9 AZN /</span> <span class="name">5 dəfə irəli çək (hər 24 saat)</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button name="button" type="submit">Ödəmək</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thank-you">
                                            <p>Təşəkkür edirik, ödənişiniz qəbul olundu.</p>
                                            <p>Bir neçə dəqiqədən sonra, elan bütün lazımi səhifələrdə ön sıraya keçiriləcək.</p>
                                        </div>
                                        <img class="spinner" src="https://turbo.azstatic.com/assets/loading-f6ecff617ec2ba7f559e6f535cad9b70a3f91120737535dab4d4548a6c83576c.gif" />
                                    </div>
                                </div>
                            </div>
                            <a id="vip_open" class="services-i services-i_vip" data-reveal-id="vip_modal" data-animation="fade" href="#vip_open">Elanı VIP et<span class="services-i-price"><span class="price-val">15</span><span class="price-cur">AZN</span>-dən</span></a>
                            <div class="reveal-modal reveal-modal_service" id="vip_modal">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        Elanı VIP et
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="description">
                                            <p>“VIP” xidməti ilə sizin elanınız saytın ən populyar mövqelərində nümayiş olunacaq və maksimal sayda alıcı cəlb edəcək!</p>
                                            <p>VIP elanlar Turbo.az-ın ana səhifəsində və axtarış nəticələrində xüsusi ”VIP” blokda təsadüfi ardıcıllıqla göstərilir.</p>
                                            <p class="price">Xidmətin dəyəri - <b>15 AZN-dən</b>.</p>
                                        </div>
                                        <div class="prompt" data-action="/payments/verify">
                                            <label>Sizin elanınızın nömrəsi</label>
                                            <input type="text" name="item_id" id="item_id" />
                                            <button name="button" type="submit" class="next">Davam etmək</button>
                                        </div>
                                        <div class="verification"><span class="result">Siz <a href=/autos/3977618-infiniti-g37s>Infiniti G37S</a> elan üçün ödəniş keçirirsiz</span><a class="change-id" href="#">(dəyişmək)</a></div>
                                        <input type="hidden" name="payment[service_id]" id="payment_service_id" value="vip5" />
                                        <div class="payment-form">
                                            <div class="pay">
                                                <div class="az-payments-form az-payments-form-goldenpay" data-provider="goldenpay">
                                                    <form class="new_payment" id="b06b3857de319c5399704abc352536be_new_payment" action="/goldenpay" accept-charset="UTF-8" method="post">
                                                        <input name="utf8" type="hidden" value="&#x2713;" />
                                                        <input type="hidden" name="authenticity_token" value="KxrSEfDrs+NOUttK56ZoH2mhCZDEPI+bs2ldMDVDUO9Odux+YjxSNZEWrjRoKD3DtPueJpkXPQnT6S2czkF+EQ==" />
                                                        <input value="false" type="hidden" name="payment[mobile]" id="b06b3857de319c5399704abc352536be_payment_mobile" />
                                                        <input value="desktop" type="hidden" name="payment[medium]" id="b06b3857de319c5399704abc352536be_payment_medium" />
                                                        <input type="hidden" value="Ad" name="payment[target_type]" id="b06b3857de319c5399704abc352536be_payment_target_type" />
                                                        <input type="hidden" value="3977618" name="payment[target_id]" id="b06b3857de319c5399704abc352536be_payment_target_id" />
                                                        <div class="az-payments-type" data-priority="false">
                                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="b06b3857de319c5399704abc352536be_payment_payment_provider_goldenpay" />
                                                                <label for="b06b3857de319c5399704abc352536be_payment_payment_provider_goldenpay">Bank kartı</label>
                                                            </div>
                                                            <div class="az-payments-form-i portmanat">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="b06b3857de319c5399704abc352536be_payment_payment_provider_portmanat" />
                                                                <label for="b06b3857de319c5399704abc352536be_payment_payment_provider_portmanat">Portmanat</label>
                                                            </div>
                                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                                            </div>
                                                        </div>
                                                        <div class="az-service">
                                                            <div class="az-service-i vip5">
                                                                <input class="az-payments-service-input" data-price="15" type="radio" value="vip5" name="payment[service_id]" id="b06b3857de319c5399704abc352536be_payment_service_id_vip5" />
                                                                <label for="b06b3857de319c5399704abc352536be_payment_service_id_vip5"><span class="price">15 AZN /</span> <span class="name">5 gün</span></label>
                                                            </div>
                                                            <div class="az-service-i vip15">
                                                                <input class="az-payments-service-input" data-price="25" type="radio" value="vip15" checked="checked" name="payment[service_id]" id="b06b3857de319c5399704abc352536be_payment_service_id_vip15" />
                                                                <label for="b06b3857de319c5399704abc352536be_payment_service_id_vip15"><span class="price">25 AZN /</span> <span class="name">15 gün</span></label>
                                                            </div>
                                                            <div class="az-service-i vip30">
                                                                <input class="az-payments-service-input" data-price="40" type="radio" value="vip30" name="payment[service_id]" id="b06b3857de319c5399704abc352536be_payment_service_id_vip30" />
                                                                <label for="b06b3857de319c5399704abc352536be_payment_service_id_vip30"><span class="price">40 AZN /</span> <span class="name">30 gün</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button name="button" type="submit">Ödəmək</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="az-payments-form az-payments-form-portmanat" data-provider="portmanat">
                                                    <form class="new_payment" id="47641160e430fd802e20d5a7b4b7e5be_new_payment" action="/portmanat" accept-charset="UTF-8" method="post">
                                                        <input name="utf8" type="hidden" value="&#x2713;" />
                                                        <input type="hidden" name="authenticity_token" value="YuhU4NCn0+FmipuAHVdxr9RLA6R2Sz2hbb9G/Rilpu9Hj437Zb+SWbf4w7QHX+2cFzWP855YIE0J7NqAARLpOA==" />
                                                        <input value="false" type="hidden" name="payment[mobile]" id="47641160e430fd802e20d5a7b4b7e5be_payment_mobile" />
                                                        <input value="desktop" type="hidden" name="payment[medium]" id="47641160e430fd802e20d5a7b4b7e5be_payment_medium" />
                                                        <input type="hidden" value="Ad" name="payment[target_type]" id="47641160e430fd802e20d5a7b4b7e5be_payment_target_type" />
                                                        <input type="hidden" value="3977618" name="payment[target_id]" id="47641160e430fd802e20d5a7b4b7e5be_payment_target_id" />
                                                        <div class="az-payments-type" data-priority="false">
                                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="47641160e430fd802e20d5a7b4b7e5be_payment_payment_provider_goldenpay" />
                                                                <label for="47641160e430fd802e20d5a7b4b7e5be_payment_payment_provider_goldenpay">Bank kartı</label>
                                                            </div>
                                                            <div class="az-payments-form-i portmanat">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="47641160e430fd802e20d5a7b4b7e5be_payment_payment_provider_portmanat" />
                                                                <label for="47641160e430fd802e20d5a7b4b7e5be_payment_payment_provider_portmanat">Portmanat</label>
                                                            </div>
                                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                                            </div>
                                                        </div>
                                                        <div class="az-service">
                                                            <div class="az-service-i vip5">
                                                                <input class="az-payments-service-input" data-price="15" type="radio" value="vip5" name="payment[service_id]" id="47641160e430fd802e20d5a7b4b7e5be_payment_service_id_vip5" />
                                                                <label for="47641160e430fd802e20d5a7b4b7e5be_payment_service_id_vip5"><span class="price">15 AZN /</span> <span class="name">5 gün</span></label>
                                                            </div>
                                                            <div class="az-service-i vip15">
                                                                <input class="az-payments-service-input" data-price="25" type="radio" value="vip15" checked="checked" name="payment[service_id]" id="47641160e430fd802e20d5a7b4b7e5be_payment_service_id_vip15" />
                                                                <label for="47641160e430fd802e20d5a7b4b7e5be_payment_service_id_vip15"><span class="price">25 AZN /</span> <span class="name">15 gün</span></label>
                                                            </div>
                                                            <div class="az-service-i vip30">
                                                                <input class="az-payments-service-input" data-price="40" type="radio" value="vip30" name="payment[service_id]" id="47641160e430fd802e20d5a7b4b7e5be_payment_service_id_vip30" />
                                                                <label for="47641160e430fd802e20d5a7b4b7e5be_payment_service_id_vip30"><span class="price">40 AZN /</span> <span class="name">30 gün</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button name="button" type="submit">Ödəmək</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thank-you">
                                            <p>Təşəkkür edirik, ödənişiniz qəbul olundu.</p>
                                            <p>Bir neçə dəqiqədən sonra, elanınız &quot;VIP&quot; zonada yerləşdiriləcək.</p>
                                        </div>
                                        <img class="spinner" src="https://turbo.azstatic.com/assets/loading-f6ecff617ec2ba7f559e6f535cad9b70a3f91120737535dab4d4548a6c83576c.gif" />
                                    </div>
                                </div>
                            </div>
                            <a id="featured_open" class="services-i services-i_featured" data-reveal-id="featured_modal" data-animation="fade" href="#featured_open">Elanı premium et<span class="services-i-price"><span class="price-val">5</span><span class="price-cur">AZN</span>-dən</span></a>
                            <div class="reveal-modal reveal-modal_service" id="featured_modal">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        Elanı premium et
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="description">
                                            <p>Elanınızı əsas səhifədə "Premium" bölməsində yerləşdirmək.</p>
                                            <p class="price">Xidmətin dəyəri - <b>5 AZN-dən</b>.</p>
                                        </div>
                                        <div class="prompt" data-action="/payments/verify">
                                            <label>Sizin elanınızın nömrəsi</label>
                                            <input type="text" name="item_id" id="item_id" />
                                            <button name="button" type="submit" class="next">Davam etmək</button>
                                        </div>
                                        <div class="verification"><span class="result">Siz <a href=/autos/3977618-infiniti-g37s>Infiniti G37S</a> elan üçün ödəniş keçirirsiz</span><a class="change-id" href="#">(dəyişmək)</a></div>
                                        <input type="hidden" name="payment[service_id]" id="payment_service_id" value="featured1" />
                                        <div class="payment-form">
                                            <div class="pay">
                                                <div class="az-payments-form az-payments-form-goldenpay" data-provider="goldenpay">
                                                    <form class="new_payment" id="220a83dd4685cbced033f904f3c5465c_new_payment" action="/goldenpay" accept-charset="UTF-8" method="post">
                                                        <input name="utf8" type="hidden" value="&#x2713;" />
                                                        <input type="hidden" name="authenticity_token" value="5pUou7XsCVUBt0njZLo6VSeeVmeJWW1ptTdKzIA2ZruD+RbUJzvog97zPJ3rNG+J+sTB0dRy3/vVtzpgezRIRQ==" />
                                                        <input value="false" type="hidden" name="payment[mobile]" id="220a83dd4685cbced033f904f3c5465c_payment_mobile" />
                                                        <input value="desktop" type="hidden" name="payment[medium]" id="220a83dd4685cbced033f904f3c5465c_payment_medium" />
                                                        <input type="hidden" value="Ad" name="payment[target_type]" id="220a83dd4685cbced033f904f3c5465c_payment_target_type" />
                                                        <input type="hidden" value="3977618" name="payment[target_id]" id="220a83dd4685cbced033f904f3c5465c_payment_target_id" />
                                                        <div class="az-payments-type" data-priority="false">
                                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="220a83dd4685cbced033f904f3c5465c_payment_payment_provider_goldenpay" />
                                                                <label for="220a83dd4685cbced033f904f3c5465c_payment_payment_provider_goldenpay">Bank kartı</label>
                                                            </div>
                                                            <div class="az-payments-form-i portmanat">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="220a83dd4685cbced033f904f3c5465c_payment_payment_provider_portmanat" />
                                                                <label for="220a83dd4685cbced033f904f3c5465c_payment_payment_provider_portmanat">Portmanat</label>
                                                            </div>
                                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                                            </div>
                                                        </div>
                                                        <div class="az-service">
                                                            <div class="az-service-i featured1">
                                                                <input class="az-payments-service-input" data-price="5" type="radio" value="featured1" name="payment[service_id]" id="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured1" />
                                                                <label for="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured1"><span class="price">5 AZN /</span> <span class="name">1 gün</span></label>
                                                            </div>
                                                            <div class="az-service-i featured5">
                                                                <input class="az-payments-service-input" data-price="20" type="radio" value="featured5" name="payment[service_id]" id="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured5" />
                                                                <label for="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured5"><span class="price">20 AZN /</span> <span class="name">5 gün</span></label><span class="before-label before-label--new"></span>
                                                            </div>
                                                            <div class="az-service-i featured15">
                                                                <input class="az-payments-service-input" data-price="45" type="radio" value="featured15" checked="checked" name="payment[service_id]" id="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured15" />
                                                                <label for="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured15"><span class="price">45 AZN /</span> <span class="name">15 gün</span></label><span class="before-label before-label--new"></span>
                                                            </div>
                                                            <div class="az-service-i featured30">
                                                                <input class="az-payments-service-input" data-price="60" type="radio" value="featured30" name="payment[service_id]" id="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured30" />
                                                                <label for="220a83dd4685cbced033f904f3c5465c_payment_service_id_featured30"><span class="price">60 AZN /</span> <span class="name">30 gün</span></label><span class="before-label before-label--discount"></span>
                                                                <p class="featured-price">(Endirimsiz qiymət <span class="featured-line">100 AZN</span>)</p>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button name="button" type="submit">Ödəmək</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="az-payments-form az-payments-form-portmanat" data-provider="portmanat">
                                                    <form class="new_payment" id="92855b96e79f8858a19f92d0ba9558bb_new_payment" action="/portmanat" accept-charset="UTF-8" method="post">
                                                        <input name="utf8" type="hidden" value="&#x2713;" />
                                                        <input type="hidden" name="authenticity_token" value="TM11/cO+fsr8ep0Udw0SP06+Guq4atHvhfmgKj2o3BdpqqzmdqY/ci0IxSBtBY4MjcCWvVB5zAPhqjxXJB+TwA==" />
                                                        <input value="false" type="hidden" name="payment[mobile]" id="92855b96e79f8858a19f92d0ba9558bb_payment_mobile" />
                                                        <input value="desktop" type="hidden" name="payment[medium]" id="92855b96e79f8858a19f92d0ba9558bb_payment_medium" />
                                                        <input type="hidden" value="Ad" name="payment[target_type]" id="92855b96e79f8858a19f92d0ba9558bb_payment_target_type" />
                                                        <input type="hidden" value="3977618" name="payment[target_id]" id="92855b96e79f8858a19f92d0ba9558bb_payment_target_id" />
                                                        <div class="az-payments-type" data-priority="false">
                                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="92855b96e79f8858a19f92d0ba9558bb_payment_payment_provider_goldenpay" />
                                                                <label for="92855b96e79f8858a19f92d0ba9558bb_payment_payment_provider_goldenpay">Bank kartı</label>
                                                            </div>
                                                            <div class="az-payments-form-i portmanat">
                                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="92855b96e79f8858a19f92d0ba9558bb_payment_payment_provider_portmanat" />
                                                                <label for="92855b96e79f8858a19f92d0ba9558bb_payment_payment_provider_portmanat">Portmanat</label>
                                                            </div>
                                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                                            </div>
                                                        </div>
                                                        <div class="az-service">
                                                            <div class="az-service-i featured1">
                                                                <input class="az-payments-service-input" data-price="5" type="radio" value="featured1" name="payment[service_id]" id="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured1" />
                                                                <label for="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured1"><span class="price">5 AZN /</span> <span class="name">1 gün</span></label>
                                                            </div>
                                                            <div class="az-service-i featured5">
                                                                <input class="az-payments-service-input" data-price="20" type="radio" value="featured5" name="payment[service_id]" id="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured5" />
                                                                <label for="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured5"><span class="price">20 AZN /</span> <span class="name">5 gün</span></label><span class="before-label before-label--new"></span>
                                                            </div>
                                                            <div class="az-service-i featured15">
                                                                <input class="az-payments-service-input" data-price="45" type="radio" value="featured15" checked="checked" name="payment[service_id]" id="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured15" />
                                                                <label for="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured15"><span class="price">45 AZN /</span> <span class="name">15 gün</span></label><span class="before-label before-label--new"></span>
                                                            </div>
                                                            <div class="az-service-i featured30">
                                                                <input class="az-payments-service-input" data-price="60" type="radio" value="featured30" name="payment[service_id]" id="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured30" />
                                                                <label for="92855b96e79f8858a19f92d0ba9558bb_payment_service_id_featured30"><span class="price">60 AZN /</span> <span class="name">30 gün</span></label><span class="before-label before-label--discount"></span>
                                                                <p class="featured-price">(Endirimsiz qiymət <span class="featured-line">100 AZN</span>)</p>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button name="button" type="submit">Ödəmək</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thank-you">
                                            <p>Təşəkkür edirik, ödənişiniz qəbul olundu.</p>
                                            <p>Bir neçə dəqiqədən sonra sizin elanınız əsas səhifədə “Premium” bölməsində yerləşdiriləcək.</p>
                                        </div>
                                        <img class="spinner" src="https://turbo.azstatic.com/assets/loading-f6ecff617ec2ba7f559e6f535cad9b70a3f91120737535dab4d4548a6c83576c.gif" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-header">
                        <div class="product-price">16 900 <span>$</span></div>
                        <div class="seller-info">
                            <div class="seller-contacts">
                                <div class="seller-phone">
                                    <i class="fas fa-phone fa-rotate-90 icon-svg icon-svg--phone"></i>
                                    <a class="phone" href="tel:(050) 705-00-07">(050) 705-00-07</a>
                                </div>
                                <div class="seller-name">
                                    <p>Kamran</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-statistics">
                            <p>
                                <label for="ad_hits">Baxışların sayı</label>: 577
                            </p>
                            <p>
                                <label for="ad_updated_at">Yeniləndi</label>: 17 Aprel 2020
                            </p>
                            <p>
                                <label for="ad_id">Elanın nömrəsi</label>: 3977618
                            </p>
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-properties-container">
                            <ul class="product-properties">
                                <li class="product-properties-i">
                                    <label for="ad_region">Şəhər</label>
                                    <div class="product-properties-value">Bakı</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_make_id">Marka</label>
                                    <div class="product-properties-value"><a target="_blank" href="/makes/15-infiniti">Infiniti</a></div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_model">Model</label>
                                    <div class="product-properties-value"><a target="_blank" href="/autos?q%5Bmake%5D%5B%5D=15&amp;q%5Bmodel%5D%5B%5D=864">G37S</a></div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_reg_year">Buraxılış ili</label>
                                    <div class="product-properties-value"><a target="_blank" href="/autos?q%5Bmake%5D%5B%5D=15&amp;q%5Bmodel%5D%5B%5D=864&amp;q%5Byear_from%5D=2012&amp;q%5Byear_to%5D=2012">2012</a></div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_category">Ban növü</label>
                                    <div class="product-properties-value">Sedan</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_color">Rəng</label>
                                    <div class="product-properties-value">Ağ</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_engine_volume">Mühərrikin həcmi</label>
                                    <div class="product-properties-value">3.7 L</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_power">Mühərrikin gücü</label>
                                    <div class="product-properties-value">350 a.g.</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_fuel_type">Yanacaq növü</label>
                                    <div class="product-properties-value">Benzin</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_mileage">Yürüş</label>
                                    <div class="product-properties-value">81 000 km</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_transmission">Sürətlər qutusu</label>
                                    <div class="product-properties-value">Avtomat</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_gear">Ötürücü</label>
                                    <div class="product-properties-value">Arxa</div>
                                </li>
                                <li class="product-properties-i">
                                    <label for="ad_new">Yeni</label>
                                    <div class="product-properties-value">Xeyr</div>
                                </li>
                                <li class="product-properties-i product-properties_price">
                                    <label for="ad_price">Qiymət</label>
                                    <div class="product-properties-value">
                                        <div class="product-price">16 900 <span>$</span></div>
                                    </div>
                                </li>
                                <li class="product-properties-i product-properties-i_barter">
                                    <div class="product-properties-value">Barter mümkündür</div>
                                </li>
                            </ul>
                            <div class="product-credit-info">
                                <p>Kreditdədir</p>
                                <div class="auto-credit-section">
                                    <label for="" class="auto-credit-time">Müddət
                                        <input disabled class="numeric non_null required" value="48 ay" type="text" step="any" name="auto[credit_time]" id="auto_credit_time">
                                    </label>
                                    <label for="" class="auto-credit-firstpay">İlkin ödəniş
                                        <input disabled class="numeric non_null required" value="10000 azn" type="text" step="any" name="auto[credit_firstpay]" id="auto_credit_firstpay">
                                    </label>
                                    <label for="" class="auto-credit-monthpay">Aylıq ödəniş
                                        <input disabled class="numeric non_null required" value="1000 azn" type="text" step="any" name="auto[credit_monthpay]" id="auto_credit_monthpay">
                                    </label>
                                </div>
                            </div>
                            <div class="product-deposit-info">
                                <p>Depozitdədir</p>
                                <div class="auto-deposit-section">
                                    <label for="" class="auto-deposit-time">Müddət
                                        <input disabled class="numeric non_null required" value="1 ay" type="text" step="any" name="auto[deposit_time]" id="auto_deposit_time">
                                    </label>
                                    <label for="" class="auto-deposit-firstpay">Depozit miqdarı
                                        <input disabled class="numeric non_null required" value="2550 azn" type="text" step="any" name="auto[deposit_amount]" id="auto_deposit_amount">
                                    </label>
                                    <label for="" class="auto-deposit-dailypay">Günlük ödəniş
                                        <input disabled class="numeric non_null required" value="75 azn" type="text" step="any" name="auto[deposit_dailypay]" id="auto_deposit_dailypay">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-extras">
                                <p class="product-extras-i">Yüngül lehimli disklər</p>
                                <p class="product-extras-i">ABS</p>
                                <p class="product-extras-i">Lyuk</p>
                                <p class="product-extras-i">Yağış sensoru</p>
                                <p class="product-extras-i">Mərkəzi qapanma</p>
                                <p class="product-extras-i">Park radarı</p>
                                <p class="product-extras-i">Kondisioner</p>
                                <p class="product-extras-i">Oturacaqların isidilməsi</p>
                                <p class="product-extras-i">Dəri salon</p>
                                <p class="product-extras-i">Ksenon lampalar</p>
                                <p class="product-extras-i">Arxa görüntü kamerası</p>
                                <p class="product-extras-i">Yan pərdələr</p>
                                <p class="product-extras-i">Oturacaqların ventilyasiyası</p>
                            </div>
                            <h2 class="product-text">
                                <p>Машина в идеальном состоянии(Amerikanka) , все расходники заменены. Более 3 лет в Баку. Все вопросы по телефону с 09:00 до 00:00</p>
                            </h2>
                            <div class="product-like">
                                <div class="fb-like" data-share="true" data-show-faces="true" data-action="like" data-width="330" data-href="https://turbo.az/autos/3977618-infiniti-g37s"></div>
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
                                            <form class="email-form" action="/autos/3977618-infiniti-g37s/resend_pin" accept-charset="UTF-8" data-remote="true" method="post">
                                                <input name="utf8" type="hidden" value="&#x2713;" />
                                                <input type="text" name="email" id="email" required="required" />
                                                <button name="button" type="submit" class="submit">Göndərmək</button>
                                                <div class="error"></div>
                                            </form>
                                            <a class="return-to-options" href="/autos/3977618-infiniti-g37s">Geri</a>
                                        </div>
                                        <div class="email-sent">
                                            <p>PIN-şifrəniz sizə göndərildi.</p>
                                            <a class="return-to-options" href="/autos/3977618-infiniti-g37s">Geri</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-actions">
                                <a class="product-actions-i product-actions-i--bookmarking added hide js-unbookmark-item-3977618" data-remote="true" rel="nofollow" data-method="delete" href="/autos/3977618-infiniti-g37s/bookmarks"><i class="far fa-heart"></i>Seçilmişlərdədir</a>
                                <a class="product-actions-i product-actions-i--bookmarking js-bookmark-item-3977618" data-remote="true" rel="nofollow" data-method="post" href="/autos/3977618-infiniti-g37s/bookmarks"><i class="far fa-heart"></i>Seçilmişlərə əlavə et</a>
                                <a class="product-actions-i report js-product-report" href="/autos/3977618-infiniti-g37s"><i class="fab fa-font-awesome-flag"></i>Şikayət et</a>
                                <br /><a class="product-actions-i edit js-click-edit-request" href="#"><i class="far fa-edit"></i>Düzəliş et</a>
                                <a class="product-actions-i expire js-click-expire" href="/autos/3977618-infiniti-g37s#expire"><i class="fas fa-trash-alt"></i>Elanı sil</a>
                            </div>
                            <div class="reveal-modal confirm-edit">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        Şəxsiyyətinizi təsdiqləyin
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="action-form-container">
                                            <p>Davam etmək üçün elanınızın PIN-şifrəsini qeyd edin.</p>
                                            <p>PIN-şifrəni, elan saytda dərc edilərkən Turbo.Az-dan Sizə göndərilən məktubdan götürə bilərsiniz.</p>
                                            <form class="confirm" action="/autos/3977618-infiniti-g37s/edit" accept-charset="UTF-8" method="get">
                                                <input name="utf8" type="hidden" value="&#x2713;" />
                                                <label>Elanın PIN-şifrəsi:</label>
                                                <input type="text" name="pincode" id="pincode" required="required" />
                                                <button name="button" type="submit" class="submit">Təsdiq et</button>
                                                <div class="error"></div>
                                            </form>
                                            <a id="pin-recovery" href="/autos/3977618-infiniti-g37s">PIN-şifrəni unutmusuz?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reveal-modal confirm-expire">
                                <div class="reveal-modal-popup">
                                    <div class="title">
                                        Elanı silmək
                                        <div class="close-reveal-modal"></div>
                                    </div>
                                    <div class="reveal-modal--content">
                                        <div class="warning">
                                            <p>Bu elan silinəcək, lakin onun ödənişli bərpası mümkündür.</p>
                                            <p>Elanın bərpası - 12 AZN.</p>
                                        </div>
                                        <div class="action-form-container">
                                            <p>Zəhmət olmasa, elanın silinməsini təsdiqləmək üçün PIN-şifrəni daxil edin.</p>
                                            <p>PIN-şifrəni, elan saytda dərc olunan zaman Turbo.az-dan Sizə göndərilən məktubda tapa bilərsiniz.</p>
                                            <form class="confirm" action="/autos/3977618-infiniti-g37s/expire" accept-charset="UTF-8" data-remote="true" method="post">
                                                <input name="utf8" type="hidden" value="&#x2713;" />
                                                <label>Elanın PIN-şifrəsi:</label>
                                                <input type="text" name="pincode" id="pincode" required="required" />
                                                <button name="button" type="submit" class="submit">Təsdiq et</button>
                                                <div class="error"></div>
                                            </form>
                                            <a id="pin-recovery" href="/autos/3977618-infiniti-g37s">PIN-şifrəni unutmusuz?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="report-container">
                        <form class="simple_form new_report" id="new_report" novalidate="novalidate" action="/autos/3977618-infiniti-g37s/reports" accept-charset="UTF-8" data-remote="true" method="post">
                            <input name="utf8" type="hidden" value="&#x2713;" />
                            <div class="input radio_buttons required report_report_reason">
                                <input type="hidden" name="report[report_reason_id]" value="" /><span class="radio"><input class="radio_buttons required" type="radio" value="1" name="report[report_reason_id]" id="report_report_reason_id_1" /><label class="collection_radio_buttons" for="report_report_reason_id_1">Əlaqə saxlamaq olmur</label></span><span class="radio"><input class="radio_buttons required" type="radio" value="2" name="report[report_reason_id]" id="report_report_reason_id_2" /><label class="collection_radio_buttons" for="report_report_reason_id_2">Elan aktual deyil</label></span><span class="radio"><input class="radio_buttons required" type="radio" value="3" name="report[report_reason_id]" id="report_report_reason_id_3" /><label class="collection_radio_buttons" for="report_report_reason_id_3">Yanlış qiymət</label></span><span class="radio"><input class="radio_buttons required" type="radio" value="4" name="report[report_reason_id]" id="report_report_reason_id_4" /><label class="collection_radio_buttons" for="report_report_reason_id_4">Şəkillər düzgün deyil</label></span><span class="radio"><input class="radio_buttons required" type="radio" value="5" name="report[report_reason_id]" id="report_report_reason_id_5" /><label class="collection_radio_buttons" for="report_report_reason_id_5">Yanlış göstəricilər</label></span><span class="radio"><input class="radio_buttons required" type="radio" value="6" name="report[report_reason_id]" id="report_report_reason_id_6" /><label class="collection_radio_buttons" for="report_report_reason_id_6">Təkrar elan</label></span><span class="radio"><input class="radio_buttons required" type="radio" value="7" name="report[report_reason_id]" id="report_report_reason_id_7" /><label class="collection_radio_buttons" for="report_report_reason_id_7">Yanlış şəhər</label></span><span class="radio"><input class="radio_buttons required" type="radio" value="8" name="report[report_reason_id]" id="report_report_reason_id_8" /><label class="collection_radio_buttons" for="report_report_reason_id_8">Avtomobil salondandır</label></span>
                            </div>
                        </form>
                    </div>
                    <div class="report_response" id="report_response"></div>
                    <div class="product-comments">
                        <div class="fb-comments" data-num-posts="20" data-width="680" data-href="https://turbo.az/autos/3977618-infiniti-g37s"></div>
                    </div>
                </div>
                <div class="banners-right">
                    <div class="banners-right-i" id="js-lotriver-right-banner1">
                        <script type="text/javascript">
                            var normalizeTargetingParameter = function(str) {
                                var mobileDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                                if (mobileDevice) return;

                                var letters = {
                                    'Ə': 'E',
                                    'Ü': 'U',
                                    'Ö': 'O',
                                    'Ğ': 'Gh',
                                    'Ş': 'Sh',
                                    'Ç': 'Ch',
                                    'İ': 'I',
                                    'ə': 'e',
                                    'ü': 'u',
                                    'ö': 'o',
                                    'ğ': 'gh',
                                    'ş': 'sh',
                                    'ç': 'ch',
                                    'ı': 'i'
                                }

                                var categoryNameArr = str.split('');
                                var result = [];

                                for (var i = 0; i < categoryNameArr.length; i += 1) {
                                    var letter = categoryNameArr[i];
                                    if (Object.keys(letters).indexOf(letter) !== -1) {
                                        result.push(letters[letter]);
                                    } else {
                                        result.push(letter);
                                    }
                                }

                                result = result.join('').split(' ').join('-');
                                return result.indexOf('-/-') >= 0 ? result.split('-/-').join('-') : result;
                            };

                            (function(L) {
                                var custom = [];
                                /* custom params */
                                custom[1] = normalizeTargetingParameter("Sedan");
                                custom[2] = 28730;
                                if ("js-lotriver-right-banner1" === 'js-lotriver-top-banner') {
                                    custom[4] = "infiniti"
                                }
                                /* end of custom params */
                                custom.getStd = function() {
                                    for (var i = 0, j, s = []; i < this.length; i++) {
                                        if (this[i]) s.push((!j ? (j = 1, i + '=') : '') + escape(this[i]));
                                        else j = 0
                                    }
                                    return s.length ? '&custom=' + s.join(';') : ''
                                };
                                if (typeof(ar_cn) == "undefined") ar_cn = 1;
                                var S = 'setTimeout(function(e){if(!self.CgiHref){document.close();e=parent.document.getElementById("ar_container_"+ar_bnum);e.parentNode.removeChild(e);}},3000);',
                                    j = ' type="text/javascript"',
                                    t = 0,
                                    D = document,
                                    n = ar_cn;
                                L = '' + ('https:' == document.location.protocol ? 'https:' : 'http:') + '' + L + escape(D.referrer || 'unknown') + '&rnd=' + Math.round(Math.random() * 999999999) + custom.getStd();

                                function _() {
                                    if (t++ < 100) {
                                        var F = D.getElementById('ar_container_' + n);
                                        if (F) {
                                            try {
                                                var d = F.contentDocument || (window.ActiveXObject && window.frames['ar_container_' + n].document);
                                                if (d) {
                                                    d.write('<sc' + 'ript' + j + '>var ar_bnum=' + n + ';' + S + '<\/sc' + 'ript><sc' + 'ript' + j + ' src="' + L + '" onload="parent.adriverExtentionLoad(ar_adid,bid,\'js-lotriver-right-banner1\')"><\/sc' + 'ript>');
                                                    t = 0
                                                } else setTimeout(_, 100);
                                            } catch (e) {
                                                try {
                                                    F.src = "javascript:{document.write('<sc'+'ript" + j + ">var ar_bnum=" + n + "; document.domain=\"" + D.domain + "\";" + S + "<\/sc'+'ript>');document.write('<sc'+'ript" + j + " src=\"" + L + "\" onload=\"parent.adriverExtentionLoad(ar_adid,bid,\'js-lotriver-right-banner1\')\"><\/sc'+'ript>');}";
                                                    return
                                                } catch (E) {}
                                            }
                                        } else setTimeout(_, 100);
                                    }
                                }
                                D.querySelector('#js-lotriver-right-banner1').innerHTML = ('<div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"><iframe id="ar_container_' + ar_cn + '" width=1 height=1 marginwidth=0 marginheight=0 scrolling=no frameborder=0><\/iframe><\/div><div id="ad_ph_' + ar_cn + '" style="display:none;"><\/div>');
                                _();
                                ar_cn++;
                            })("//ad.adriver.ru/cgi-bin/erle.cgi?sid=220552&bn=12&bt=43&pz=0&target=top&tail256=");
                        </script>
                    </div>
                    <div class="banners-right-i" id="js-lotriver-right-banner2">
                        <script type="text/javascript">
                            var normalizeTargetingParameter = function(str) {
                                var mobileDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                                if (mobileDevice) return;

                                var letters = {
                                    'Ə': 'E',
                                    'Ü': 'U',
                                    'Ö': 'O',
                                    'Ğ': 'Gh',
                                    'Ş': 'Sh',
                                    'Ç': 'Ch',
                                    'İ': 'I',
                                    'ə': 'e',
                                    'ü': 'u',
                                    'ö': 'o',
                                    'ğ': 'gh',
                                    'ş': 'sh',
                                    'ç': 'ch',
                                    'ı': 'i'
                                }

                                var categoryNameArr = str.split('');
                                var result = [];

                                for (var i = 0; i < categoryNameArr.length; i += 1) {
                                    var letter = categoryNameArr[i];
                                    if (Object.keys(letters).indexOf(letter) !== -1) {
                                        result.push(letters[letter]);
                                    } else {
                                        result.push(letter);
                                    }
                                }

                                result = result.join('').split(' ').join('-');
                                return result.indexOf('-/-') >= 0 ? result.split('-/-').join('-') : result;
                            };

                            (function(L) {
                                var custom = [];
                                /* custom params */
                                custom[1] = normalizeTargetingParameter("Sedan");
                                custom[2] = 28730;
                                if ("js-lotriver-right-banner2" === 'js-lotriver-top-banner') {
                                    custom[4] = "infiniti"
                                }
                                /* end of custom params */
                                custom.getStd = function() {
                                    for (var i = 0, j, s = []; i < this.length; i++) {
                                        if (this[i]) s.push((!j ? (j = 1, i + '=') : '') + escape(this[i]));
                                        else j = 0
                                    }
                                    return s.length ? '&custom=' + s.join(';') : ''
                                };
                                if (typeof(ar_cn) == "undefined") ar_cn = 1;
                                var S = 'setTimeout(function(e){if(!self.CgiHref){document.close();e=parent.document.getElementById("ar_container_"+ar_bnum);e.parentNode.removeChild(e);}},3000);',
                                    j = ' type="text/javascript"',
                                    t = 0,
                                    D = document,
                                    n = ar_cn;
                                L = '' + ('https:' == document.location.protocol ? 'https:' : 'http:') + '' + L + escape(D.referrer || 'unknown') + '&rnd=' + Math.round(Math.random() * 999999999) + custom.getStd();

                                function _() {
                                    if (t++ < 100) {
                                        var F = D.getElementById('ar_container_' + n);
                                        if (F) {
                                            try {
                                                var d = F.contentDocument || (window.ActiveXObject && window.frames['ar_container_' + n].document);
                                                if (d) {
                                                    d.write('<sc' + 'ript' + j + '>var ar_bnum=' + n + ';' + S + '<\/sc' + 'ript><sc' + 'ript' + j + ' src="' + L + '" onload="parent.adriverExtentionLoad(ar_adid,bid,\'js-lotriver-right-banner2\')"><\/sc' + 'ript>');
                                                    t = 0
                                                } else setTimeout(_, 100);
                                            } catch (e) {
                                                try {
                                                    F.src = "javascript:{document.write('<sc'+'ript" + j + ">var ar_bnum=" + n + "; document.domain=\"" + D.domain + "\";" + S + "<\/sc'+'ript>');document.write('<sc'+'ript" + j + " src=\"" + L + "\" onload=\"parent.adriverExtentionLoad(ar_adid,bid,\'js-lotriver-right-banner2\')\"><\/sc'+'ript>');}";
                                                    return
                                                } catch (E) {}
                                            }
                                        } else setTimeout(_, 100);
                                    }
                                }
                                D.querySelector('#js-lotriver-right-banner2').innerHTML = ('<div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"><iframe id="ar_container_' + ar_cn + '" width=1 height=1 marginwidth=0 marginheight=0 scrolling=no frameborder=0><\/iframe><\/div><div id="ad_ph_' + ar_cn + '" style="display:none;"><\/div>');
                                _();
                                ar_cn++;
                            })("//ad.adriver.ru/cgi-bin/erle.cgi?sid=220552&bn=13&bt=43&pz=0&target=top&tail256=");
                        </script>
                    </div>
                    <div class="banners-right-i" id="js-lotriver-right-banner3">
                        <script type="text/javascript">
                            var normalizeTargetingParameter = function(str) {
                                var mobileDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                                if (mobileDevice) return;

                                var letters = {
                                    'Ə': 'E',
                                    'Ü': 'U',
                                    'Ö': 'O',
                                    'Ğ': 'Gh',
                                    'Ş': 'Sh',
                                    'Ç': 'Ch',
                                    'İ': 'I',
                                    'ə': 'e',
                                    'ü': 'u',
                                    'ö': 'o',
                                    'ğ': 'gh',
                                    'ş': 'sh',
                                    'ç': 'ch',
                                    'ı': 'i'
                                }

                                var categoryNameArr = str.split('');
                                var result = [];

                                for (var i = 0; i < categoryNameArr.length; i += 1) {
                                    var letter = categoryNameArr[i];
                                    if (Object.keys(letters).indexOf(letter) !== -1) {
                                        result.push(letters[letter]);
                                    } else {
                                        result.push(letter);
                                    }
                                }

                                result = result.join('').split(' ').join('-');
                                return result.indexOf('-/-') >= 0 ? result.split('-/-').join('-') : result;
                            };

                            (function(L) {
                                var custom = [];
                                /* custom params */
                                custom[1] = normalizeTargetingParameter("Sedan");
                                custom[2] = 28730;
                                if ("js-lotriver-right-banner3" === 'js-lotriver-top-banner') {
                                    custom[4] = "infiniti"
                                }
                                /* end of custom params */
                                custom.getStd = function() {
                                    for (var i = 0, j, s = []; i < this.length; i++) {
                                        if (this[i]) s.push((!j ? (j = 1, i + '=') : '') + escape(this[i]));
                                        else j = 0
                                    }
                                    return s.length ? '&custom=' + s.join(';') : ''
                                };
                                if (typeof(ar_cn) == "undefined") ar_cn = 1;
                                var S = 'setTimeout(function(e){if(!self.CgiHref){document.close();e=parent.document.getElementById("ar_container_"+ar_bnum);e.parentNode.removeChild(e);}},3000);',
                                    j = ' type="text/javascript"',
                                    t = 0,
                                    D = document,
                                    n = ar_cn;
                                L = '' + ('https:' == document.location.protocol ? 'https:' : 'http:') + '' + L + escape(D.referrer || 'unknown') + '&rnd=' + Math.round(Math.random() * 999999999) + custom.getStd();

                                function _() {
                                    if (t++ < 100) {
                                        var F = D.getElementById('ar_container_' + n);
                                        if (F) {
                                            try {
                                                var d = F.contentDocument || (window.ActiveXObject && window.frames['ar_container_' + n].document);
                                                if (d) {
                                                    d.write('<sc' + 'ript' + j + '>var ar_bnum=' + n + ';' + S + '<\/sc' + 'ript><sc' + 'ript' + j + ' src="' + L + '" onload="parent.adriverExtentionLoad(ar_adid,bid,\'js-lotriver-right-banner3\')"><\/sc' + 'ript>');
                                                    t = 0
                                                } else setTimeout(_, 100);
                                            } catch (e) {
                                                try {
                                                    F.src = "javascript:{document.write('<sc'+'ript" + j + ">var ar_bnum=" + n + "; document.domain=\"" + D.domain + "\";" + S + "<\/sc'+'ript>');document.write('<sc'+'ript" + j + " src=\"" + L + "\" onload=\"parent.adriverExtentionLoad(ar_adid,bid,\'js-lotriver-right-banner3\')\"><\/sc'+'ript>');}";
                                                    return
                                                } catch (E) {}
                                            }
                                        } else setTimeout(_, 100);
                                    }
                                }
                                D.querySelector('#js-lotriver-right-banner3').innerHTML = ('<div style="visibility:hidden;height:0px;left:-1000px;position:absolute;"><iframe id="ar_container_' + ar_cn + '" width=1 height=1 marginwidth=0 marginheight=0 scrolling=no frameborder=0><\/iframe><\/div><div id="ad_ph_' + ar_cn + '" style="display:none;"><\/div>');
                                _();
                                ar_cn++;
                            })("//ad.adriver.ru/cgi-bin/erle.cgi?sid=220552&bn=14&bt=43&pz=0&target=top&tail256=");
                        </script>
                    </div>
                </div>
            </div>
            <div class="w-100">
                <div class="title-container">
                    <hr>
                    <div class="section-title">
                        <p class="section-title_name">Bənzər elanlar</p>
                        <a class="section-title_more" target="_blank" href="/autos/all">Hamısını göstər</a>
                    </div>
                </div>
                <div class="products-container index-products-container">
                    <div class="products-content">
                        <div class="products row grid">
                            <div class="products-i featured vip premium salon barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip taxi barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured premium deposit credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip salon credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-content">
                        <div class="products row grid">
                            <div class="products-i featured vip premium salon barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip taxi barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured premium deposit credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip salon credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-content">
                        <div class="products row grid">
                            <div class="products-i featured vip premium salon barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip taxi barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured premium deposit credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip salon credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-content">
                        <div class="products row grid">
                            <div class="products-i featured vip premium salon barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip taxi barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured premium deposit credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip salon credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-content">
                        <div class="products row grid">
                            <div class="products-i featured vip premium salon barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip taxi barter">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured premium deposit credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="products-i featured vip salon credit">
                                <a class="products-i-link" target="_blank" href="/autos/3829143-mercedes-v-250"></a>
                                <div class="products-img">
                                    <img alt="Mercedes V 250" loading="lazy" src="https://turbo.azstatic.com/uploads/f460x343/2020%2F02%2F09%2F21%2F43%2F39%2Fc4b0aec8-5bbf-4b4d-8a54-6cd63b0dd6fa%2F17782_poDH-hyJ29A1nYiLkWoiFg.jpg">
                                    <div class="products-price">
                                        <div class="product-price">
                                            98 000 <span>$</span>
                                        </div>
                                        <span class="credit-item"><i class="fas fa-percent"></i></span>
                                        <span class="barter-item"><i class="fas fa-percent"></i></span>
                                    </div>
                                    <div class="products-info">
                                        <span class="salon-text">Salon</span>
                                        <span class="taxi-text">Taksi</span>
                                        <span class="deposit-text">Depozit</span>
                                    </div>
                                </div>
                                <div class="products-description">
                                    <p class="products-name">Mercedes V 250</p>
                                    <div class="products-attributes">
                                        <p class="products-attributes-i">2019 il</p>
                                        <p class="products-attributes-i">2.2 L</p>
                                        <p class="products-attributes-i">0 km</p>
                                    </div>
                                    <div class="products-bottom">Bakı, 08.04.2020 17:48</div>
                                    <div class="products-paid">
                                        <div class="premium-block">
                                            <img class="premium-img" src="assets/image/premium.png" alt="">
                                        </div>
                                        <img class="vip-img" src="assets/image/vip.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-content">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="reveal-modal reveal-modal_service" id="pin_recovery_modal">
                <div class="reveal-modal-popup">
                    <div class="title">
                        PIN-şifrənin bərpası
                        <div class="close-reveal-modal"></div>
                    </div>
                    <div class="reveal-modal--content">
                        <div class="description">
                            <p>PIN-şifrəni SMS vasitəsilə əldə etmək.</p>
                            <p>Xidmətin dəyəri - <b>1 AZN</b>.</p>
                        </div>
                        <div class="prompt" data-action="/payments/verify">
                            <label>Sizin elanınızın nömrəsi</label>
                            <input type="text" name="item_id" id="item_id">
                            <button name="button" type="submit" class="next">Davam etmək</button>
                        </div>
                        <div class="verification"><span class="result">Siz <a href="/autos/3977618-infiniti-g37s">Infiniti G37S</a> elan üçün ödəniş keçirirsiz</span><a class="change-id" href="#">(dəyişmək)</a></div>
                        <input type="hidden" name="payment[service_id]" id="payment_service_id" value="pin_recovery">
                        <div class="payment-form">
                            <div class="pay">
                                <div class="az-payments-form az-payments-form-goldenpay" data-provider="goldenpay">
                                    <form class="new_payment" id="7f151e7036291f3047272f4cae7efbe0_new_payment" action="/goldenpay" accept-charset="UTF-8" method="post">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input type="hidden" name="authenticity_token" value="ACqjvDbWCbX1yvuvckjQu0SoFdfchV7O/FN7S7DuYSllRp3TpAHoYyqOjtH9xoVnmfKCYYGu7Fyc0wvnS+xP1w==">
                                        <input value="false" type="hidden" name="payment[mobile]" id="7f151e7036291f3047272f4cae7efbe0_payment_mobile">
                                        <input value="desktop" type="hidden" name="payment[medium]" id="7f151e7036291f3047272f4cae7efbe0_payment_medium">
                                        <input type="hidden" value="Ad" name="payment[target_type]" id="7f151e7036291f3047272f4cae7efbe0_payment_target_type">
                                        <input type="hidden" value="3977618" name="payment[target_id]" id="7f151e7036291f3047272f4cae7efbe0_payment_target_id">
                                        <div class="az-payments-type" data-priority="false">
                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="7f151e7036291f3047272f4cae7efbe0_payment_payment_provider_goldenpay">
                                                <label for="7f151e7036291f3047272f4cae7efbe0_payment_payment_provider_goldenpay">Bank kartı</label>
                                            </div>
                                            <div class="az-payments-form-i portmanat">
                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="7f151e7036291f3047272f4cae7efbe0_payment_payment_provider_portmanat">
                                                <label for="7f151e7036291f3047272f4cae7efbe0_payment_payment_provider_portmanat">Portmanat</label>
                                            </div>
                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                            </div>
                                        </div>
                                        <div class="az-service">
                                            <div class="az-service-i pin_recovery">
                                                <input class="az-payments-service-input" data-price="1" type="radio" value="pin_recovery" checked="checked" name="payment[service_id]" id="7f151e7036291f3047272f4cae7efbe0_payment_service_id_pin_recovery">
                                                <label for="7f151e7036291f3047272f4cae7efbe0_payment_service_id_pin_recovery"><span class="price">1 AZN /</span> <span class="name">PIN-şifrəni SMS vasitəsilə əldə etmək</span></label>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <button name="button" type="submit">Ödəmək</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="az-payments-form az-payments-form-portmanat" data-provider="portmanat">
                                    <form class="new_payment" id="beb66be603cacde4b23a87a4caafbd0e_new_payment" action="/portmanat" accept-charset="UTF-8" method="post">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input type="hidden" name="authenticity_token" value="usYJWmoE2sxujJwYO2Pkdn9MpCUi3Z7r5shgsUc+3SKfodBB3xybdL/+xCwha3hFvDIocsrOgweCm/zMXomS9Q==">
                                        <input value="false" type="hidden" name="payment[mobile]" id="beb66be603cacde4b23a87a4caafbd0e_payment_mobile">
                                        <input value="desktop" type="hidden" name="payment[medium]" id="beb66be603cacde4b23a87a4caafbd0e_payment_medium">
                                        <input type="hidden" value="Ad" name="payment[target_type]" id="beb66be603cacde4b23a87a4caafbd0e_payment_target_type">
                                        <input type="hidden" value="3977618" name="payment[target_id]" id="beb66be603cacde4b23a87a4caafbd0e_payment_target_id">
                                        <div class="az-payments-type" data-priority="false">
                                            <div class="az-payments-form-i az-payments-type-goldenpay">
                                                <input class="az-payments-type-input" data-tab=".az-payments-form-goldenpay" type="radio" value="goldenpay" name="payment[payment_provider]" id="beb66be603cacde4b23a87a4caafbd0e_payment_payment_provider_goldenpay">
                                                <label for="beb66be603cacde4b23a87a4caafbd0e_payment_payment_provider_goldenpay">Bank kartı</label>
                                            </div>
                                            <div class="az-payments-form-i portmanat">
                                                <input class="az-payments-type-input" data-tab=".az-payments-form-portmanat" type="radio" value="portmanat" name="payment[payment_provider]" id="beb66be603cacde4b23a87a4caafbd0e_payment_payment_provider_portmanat">
                                                <label for="beb66be603cacde4b23a87a4caafbd0e_payment_payment_provider_portmanat">Portmanat</label>
                                            </div>
                                            <div class="az-payments-form-i js-payment-in-terminals-btn"><span class="az-payments-form-i__info-icon"></span>
                                                <label class="providers-radio payment-in-terminals">Terminallarda ödəniş</label>
                                            </div>
                                        </div>
                                        <div class="az-service">
                                            <div class="az-service-i pin_recovery">
                                                <input class="az-payments-service-input" data-price="1" type="radio" value="pin_recovery" checked="checked" name="payment[service_id]" id="beb66be603cacde4b23a87a4caafbd0e_payment_service_id_pin_recovery">
                                                <label for="beb66be603cacde4b23a87a4caafbd0e_payment_service_id_pin_recovery"><span class="price">1 AZN /</span> <span class="name">PIN-şifrəni SMS vasitəsilə əldə etmək</span></label>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <button name="button" type="submit">Ödəmək</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="thank-you">
                            <p>Təşəkkür edirik, ödənişiniz qəbul olundu.</p>
                            <p>PIN-şifrə 0507050007 nömrəsinə göndərildi.</p>
                        </div>
                        <img class="spinner" src="https://turbo.azstatic.com/assets/loading-f6ecff617ec2ba7f559e6f535cad9b70a3f91120737535dab4d4548a6c83576c.gif">
                    </div>
                </div>
            </div>
        </div>
        <div class="reveal-modal reveal-modal--terminal-promotion" id="terminal-promotion-modal">
            <div class="reveal-modal-popup">
                <div class="terminal-promotion">
                    <div class="close-reveal-modal"></div>
                    <div class="terminal-promotion__title">Elanı terminal vasitəsilə necə irəlilətmək olar?</div>
                    <p class="terminal-promotion__go-to-terminal">Elanın nömrəsi ilə MilliÖn və ya eManat terminalına yaxınlaşın</p>
                    <div class="terminal-promotion__product-id">3977618</div>
                    <div class="terminal-promotion__product-id-hint">Sizin <a href="/autos/3977618-infiniti-g37s">Infiniti G37S</a> elanınızın nömrəsi</div>
                    <div class="terminal-promotion__steps">
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">1</span><span class="terminal-promotion__steps_rule">Terminalın ekranında “İrəli” düyməsini sıxın</span></span>
                        </p>
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">2</span><span class="terminal-promotion__steps_rule">“Elanlar və kuponlar” bölməsini seçin</span></span>
                        </p>
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">3</span><span class="terminal-promotion__steps_rule">Açılan bölmədə “Turbo.az”-ı seçin</span></span>
                        </p>
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">4</span><span class="terminal-promotion__steps_rule">Elanınızın nömrəsini daxil edin – <span class="terminal-promotion__steps_product-id">3977618</span></span>
                        </span>
                        </p>
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">5</span><span class="terminal-promotion__steps_rule">Elan məlumatlarının düzgünlüyünə əmin olun</span></span>
                        </p>
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">6</span><span class="terminal-promotion__steps_rule">Siyahıdan lazım olan xidməti seçin</span></span>
                        </p>
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">7</span><span class="terminal-promotion__steps_rule">“Nağd pulla ödəniş” üsulunu seçin</span></span>
                        </p>
                        <p class="terminal-promotion__steps_i"><span class="terminal-promotion__steps_row"><span class="terminal-promotion__steps_number">8</span><span class="terminal-promotion__steps_rule">Əsginasları terminala daxil edin, “İrəli” düyməsini sıxın və çeki götürün</span></span>
                        </p>
                    </div>
                    <div class="terminal-promotion__back-btn js-terminal-promotion-back-btn">Geriyə</div>
                </div>
            </div>
        </div>
    </main>
@endsection
