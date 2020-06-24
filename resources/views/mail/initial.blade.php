<table align="center" bgcolor="#f9fafc" border="0" cellpadding="0" cellspacing="0" style="font-family:Helvetica,sans-serif;width:100%;max-width:598px;padding:0 20px">
    <tbody>
    <tr>
        <td style="float:right">
            <p style="margin:41px 0 10px"><a href="{{ get_setting('facebook') }}" style="display:inline" target="_blank">
                    <img alt="" src="https://ci5.googleusercontent.com/proxy/sXca1Hh3mZc8m6Rrn3tTcu275kiOWshQJLE_dTaX_nPj6WCCIMdKEcNJeMgfxHjOLPfAogkcOZMCbmwSRfkqwSuHofQzoAsW-A_xdquG--MLHvFGcsF-Z__zZfRl_Ydk23rgSPQ_c77JrnQB9WDC3OQSPtnnyniJepXrzTEG96-9KC-ZrKlLt5-gVEyR=s0-d-e1-ft#https://turbo.azstatic.com/assets/mails/facebook-icon-33767aea829a213c8d0e6d4d79681889844c76fdf427da77db095cafa0cb52b2.png" style="border:0;width:25px;height:25px;vertical-align:top">
                </a>
                <a href="{{ get_setting('instagram') }}" style="display:inline;margin-left:15px" target="_blank">
                    <img alt="" src="https://ci6.googleusercontent.com/proxy/46f_L17yTaOAOSEaYthpcSgWjDZmm_3QEupc2rWvhe3HKiEutlqAAJrFwCshQly4wrUG-4evoKm6cRWfZdtWNeVWvMZme0lNWca_EpmsH4XGz-DWvxZGCI1YRYBGC5ztjCQOO6i5phNMcnW7O-5OcZwu5OQ6qShw1VSOKsC1AYHt_2DX-1agnI4gNn2Z7Q=s0-d-e1-ft#https://turbo.azstatic.com/assets/mails/instagram-icon-6f2ada0a7c6ee2afa1355e6f1a996b137ee22da11076a53cd53d1ca024f58e3b.png" style="border:0;width:25px;height:25px;vertical-align:middle">
                </a>
            </p>
        </td>
    </tr>
    <tr>
        <td style="padding:0 20px 40px;color:#4a4a4a;background-color:#fff;border:solid 1px #dfebf9;font-size:14px;line-height:1.36">
            <img alt="" src="{{ url('mail_logo.png') }}" style="border:0;display:block;margin:0 auto;margin-bottom:30px;width:98px;height:40px;padding-top:28px">
            <p>Sizin elanınız yoxlamaya göndərildi. Elanınız bütün qaydalara uyğun olarsa,
                bir iş saatı ərzində sayta yerləşdiriləcək.
            </p>
            <p>Elanın nömrəsini və PIN-kodunu itirməyin!</p>
            <p>Elanın nömrəsi: {{ $id }}</p>
            <p>PIN-kod: {{ $pin_code }}</p>
            <hr>
            Öz elanınızı VIP edin və daha tez satın!
            VIP elanlara 10 dəfə çox baxılır.
            <p><a href="{{ route('auto.view', $id) }}#vip_open" style="color:#2484c5;text-decoration:none" target="_blank" >Təcili sat!</a></p>
        </td>
    </tr>
    <tr>
        <td style="padding:10px 0 65px;border-top:1px solid #e2e2e2;font-size:14px;color:#555">
            <table align="right" border="0" cellpadding="0" cellspacing="0" style="font-family:Helvetica,sans-serif;padding:0">
                <tbody>
                <tr>
                    <td>
                        <p style="margin:0;font-size:13px;font-weight:300;color:#4a4a4a;text-align:right">© {{ date('Y') }} <a href="{{ get_setting('site_url') }}" target="_blank" >{{ get_setting('site_title') }}</a></p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
