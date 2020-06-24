<!-- footer -->
<footer class="footer-container">
    <div class="container">
        <div class="footer">
            <div class="footer-info">
                <p class="footer-agreement"><a target="_blank" href="/pages/terms-and-conditions">{{ __('front.user_agreement') }}</a></p>
                <p class="footer-agreement">
                    <a target="_blank" href="/pages/rules">{{ __('front.rules') }}</a>
                    <a class="law" target="_blank" href="/pages/law">{{ __('front.law') }}</a>
                </p>
                <p class="copyright"><span>&copy</span>{{ date('Y') }} {{ get_setting('site_title') }}</p>
                <p class="footer-phone">
                    <a href="tel:0125057755">
                        <i class="fas fa-phone"></i>
                        {{ get_setting('phone') }}
                    </a>
                </p>
                <p class="footer-email">
                    <a href="mailto:{{ get_setting('email') }}">
                        <i class="far fa-envelope"></i>
                        {{ get_setting('email') }}
                    </a>
                </p>
            </div>
            <div class="footer-text">
                <p class="responsibility">{{ get_setting('footer_message_'.Config::get('app.locale')) }}</p>
                <a target="_blank" href="/pages/advert">{{ __('front.ads') }}</a>
            </div>
        </div>
    </div>
</footer>
