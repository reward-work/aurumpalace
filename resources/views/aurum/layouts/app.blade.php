<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AURUMPALACE</title>
    <link rel="shortcut icon" type="image/png" href=""/>
    <link href="{{  asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/FiraSans.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="main_wrapper">
    <header class="header">
        <div class="view_header d-flex flex-sm-row flex-md-row justify-content-between align-items-center">
            <a class="header_logo">
                <img src="{{  asset('img/svg/Logo.svg') }}" alt="">
            </a>
            <div class="header_nav d-flex flex-lg-row justify-content-between align-items-center">
                <div class="header_btn d-flex flex-row align-items-center">
                    <a class="btn" href="/?aff_lb=1">Sing Up</a>
                </div>
            </div>
        </div>
    </header>


    @yield('content')


    <footer>
        <div class="view">
            <div class="partners_list_company">
                <div class="partners_company"><img src="{{  asset('img/svg/VISA.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/MASTERCARD.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/skrill.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/webmoney.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/sepa.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/epz.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/ideal.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/cashtocode.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/bancontact.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/zimplet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/sofort.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/ECOPAYZ.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/safety.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/TRUSTLY.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/NETELLER.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/PAYSAFECARD.svg') }}" alt=""></div>
            </div>
            <div class="managed_text">
                The website is operated and managed by DGV Entertaiment Group Limited, reg. no. C 90487, a company
                incorporated under the laws of Malta, having its registered address 170, Pater Hous, Level 1 (Suite
                A251),
                Psaila Street, Birkirkara BKR 9077, Malta. Payments are processed by MonyMatrix Ltd, on behalf of
                EveryMatrix Ltd.
                MoneyMatrix Ltd was incorporated under the laws of Malta, bearing company registration number C64593 and
                having its registered address at Level 3, St. Julian’s Business Centre, Triq Elija Zammit, St. Julian’s,
                STJ
                3155, Malta
            </div>
            <div class="partners_list_company">
                <div class="partners_company"><img src="{{  asset('img/svg/microgaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/egt.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/nyx.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/playson.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/omi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/endr.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/globalbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/habanero.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/isoftbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/ezugi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/portomaso.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/betgames.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/progamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/evolution%20gaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/asiagamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/betsoft.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/pokerclas.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{  asset('img/svg/pragmatic.svg') }}" alt=""></div>
            </div>
            <div class="footer_company_list">
                <div class="footer_company"><img src="{{  asset('img/svg/18.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{  asset('img/svg/gc.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{  asset('img/svg/rgf.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{  asset('img/svg/malta%20g.svg') }}" alt=""></div>
            </div>
            <div class="footer_social">
                <a class="social_icon page_link" href="https://www.facebook.com/AurumPalace2" target="_blank"><img src="{{  asset('img/svg/001-facebook.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://www.instagram.com/aurumpalace/" target="_blank"><img src="{{  asset('img/svg/003-instagram.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://twitter.com/AurumPalace" target="_blank"><img src="{{  asset('img/svg/002-twitter.svg') }}" alt=""></a>
            </div>
            <div class="footer_responsibly">Gambling can be addictive, please play responsibly</div>
            <div class="footer_copy">&copy; AURUMPALACE ALL RIGHTS RESERVED</div>
        </div>
    </footer>
</div>
<script>
    var getParamUrl = new URLSearchParams(window.location.search);
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
        $("#popup_acceptcookie").remove();
    }
    if (getParamUrl.get('btag') != null && getParamUrl.get('btag') != '') {
        setCookie('pwr_btag', getParamUrl.get('btag'), 90);
    }
</script>
</body>
</html>
