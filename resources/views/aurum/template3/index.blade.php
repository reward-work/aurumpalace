
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AURUMPALACE</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('template3/images/fav.png') }}"/>
    <link rel="stylesheet" href="{{ asset('template3/css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template3/css/bootstrap-grid.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template3/css/Sans%20Sourse%20Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('template3/css/style.css') }}"/>
</head>
<body>
<div class="main_wrapper">
    <header class="header">
        <div class="view_header d-flex flex-sm-row flex-md-row justify-content-between align-items-center">
            <a class="header_logo">
                <img src="/storage/{{ $fields['logo'] }}" alt="">
            </a>
            <div class="header_nav d-flex flex-lg-row justify-content-between align-items-center">
                <div class="header_btn d-flex flex-row align-items-center">
                    <a class="btn" href="/?aff_lb=1">{{ $fields['signup_button_text'] }}</a>
                </div>
            </div>
        </div>
    </header>
    <div class="main_view">
        <section class="main">
            <div class="view h-full">
                <div class="container-fluid h-full">
                    <div class="row h-full">
                        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-lg-center align-items-end">
                            <div class="main_content">
                                <div class="main_title">
                                    {{ $fields['first_heading'] }}
                                </div>
                                <div class="main_bonus">
                                    {!! $fields['subheading_1_section'] !!}
                                </div>
                                <div class="main_terms"><span>*Bonus</span><a href="#"> Terms &amp; Conditions</a></div>
                                <div class="main_btn">
                                    <a href="{{ $fields['button_href_text_1_section'] }}<?php if($fields['open_register'] === "on") { echo '?aff_lb=1'; } ?>" class="btn">{{ $fields['button_text_1_section'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub_main">
            <div class="view">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="sub_main_title">
                                {{ $fields['heading_secondary_section'] }}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex">
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="{{ asset('template3/img/svg/fill-1.svg') }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">4 Games  at the Same Time</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="{{ asset('template3/img/svg/2.svg') }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">An enormous amount of Slot Games</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="{{ asset('template3/img/svg/3.svg') }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">Customer Support: Live chat 24/7</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="sub_main_text">
                                {!! $fields['text_after_items'] !!}
                            </div>
                            <div class="sub_main_small_text">
                                <p>{!! $fields['small_text'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="view">
            <div class="partners_list_company">
                <div class="partners_company"><img src="{{ asset('template3/img/svg/VISA.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/MASTERCARD.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/skrill.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/webmoney.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/sepa.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/epz.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/ideal.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/cashtocode.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/bancontact.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/zimplet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/sofort.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/ECOPAYZ.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/safety.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/TRUSTLY.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/NETELLER.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/PAYSAFECARD.svg') }}" alt=""></div>
            </div>
            <div class="managed_text">
                {!! $fields['managed_text'] !!}
            </div>
            <div class="partners_list_company">
                <div class="partners_company"><img src="{{ asset('template3/img/svg/microgaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/egt.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/nyx.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/playson.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/omi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/endr.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/globalbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/habanero.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/isoftbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/ezugi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/portomaso.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/betgames.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/progamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/evolution%20gaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/asiagamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/betsoft.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/pokerclas.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template3/img/svg/pragmatic.svg') }}" alt=""></div>
            </div>
            <div class="footer_company_list">
                <div class="footer_company"><img src="{{ asset('template3/img/svg/18.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('template3/img/svg/gc.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('template3/img/svg/rgf.svg') }}"
                                                 alt=""></div>
                <div class="footer_company"><img src="{{ asset('template3/img/svg/malta%20g.svg') }}" alt=""></div>
            </div>
            <div class="footer_social">
                <a class="social_icon page_link" href="https://www.facebook.com/AurumPalace2" target="_blank"><img src="{{ asset('template3/afflandings/af1/img/svg/001-facebook.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://www.instagram.com/aurumpalace/" target="_blank"><img src="{{ asset('template3/afflandings/af1/img/svg/003-instagram.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://twitter.com/AurumPalace" target="_blank"><img src="{{ asset('template3/afflandings/af1/img/svg/002-twitter.svg') }}" alt=""></a>
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
