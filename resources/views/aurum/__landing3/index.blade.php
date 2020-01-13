
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AURUMPALACE</title>
    <link rel="shortcut icon" href="/img/favicona.png">

    <link rel="stylesheet" href="{{ asset('__landing3/css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ asset('__landing3/css/bootstrap-grid.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('__landing3/css/Sans%20Sourse%20Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('__landing3/css/style.css') }}"/>
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
                    <a class="btn" href="{{ $fields['button_href_text_1_section'] }}{{ $getParams }}">{!! $fields['signup_button_text'] !!}</a>
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
                                    {!! $fields['first_heading'] !!}
                                </div>
                                <div class="main_bonus">
                                    {!! $fields['subheading_1_section'] !!}
                                </div>
                                <div class="main_terms">{!! $fields['terms_html'] !!}</div>
                                <div class="main_btn">
                                    <a href="{{ $fields['button_href_text_1_section'] }}{{ $getParams }}" class="btn">{!! $fields['button_text_1_section'] !!}</a>
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
                                {!! $fields['heading_secondary_section'] !!}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex">
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="/storage/{{ $fields['1_items_image'] }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">{!! $fields['1_items_text'] !!}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="/storage/{{ $fields['2_items_image'] }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">{!! $fields['2_items_text'] !!}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="/storage/{{ $fields['3_items_image'] }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">{!! $fields['3_items_text'] !!}</div>
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
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/VISA.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/MASTERCARD.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/skrill.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/webmoney.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/sepa.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/epz.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/ideal.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/cashtocode.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/bancontact.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/zimplet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/sofort.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/ECOPAYZ.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/safety.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/TRUSTLY.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/NETELLER.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('landing3') }}" alt=""></div>
            </div>
            <div class="managed_text">
                {!! $fields['managed_text'] !!}
            </div>
            <div class="partners_list_company">
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/microgaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/VISA.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/nyx.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/playson.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/omi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/endr.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/globalbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/habanero.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/isoftbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/ezugi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/portomaso.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('landing3') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/progamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/evolution_gaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/asiagamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/betsoft.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/pokerclas.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing3/img/svg/pragmatic.svg') }}" alt=""></div>
            </div>
            <div class="footer_company_list">
                <div class="footer_company"><img src="{{ asset('landing3') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('__landing3/img/svg/gc.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('__landing3/img/svg/rgf.svg') }}"
                                                 alt=""></div>
                <div class="footer_company"><img src="{{ asset('__landing3/img/svg/malta%20g.svg') }}" alt=""></div>
            </div>
            <div class="footer_social">
                <a class="social_icon page_link" href="https://www.facebook.com/AurumPalace2" target="_blank"><img src="{{ asset('__landing3/afflandings/af1/img/svg/001-facebook.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://www.instagram.com/aurumpalace/" target="_blank"><img src="{{ asset('__landing3/afflandings/af1/img/svg/003-instagram.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://twitter.com/AurumPalace" target="_blank"><img src="{{ asset('__landing3/afflandings/af1/img/svg/002-twitter.svg') }}" alt=""></a>
            </div>
            <div class="footer_responsibly">Gambling can be addictive, please play responsibly</div>
            <div class="footer_copy">&copy; AURUMPALACE ALL RIGHTS RESERVED</div>
        </div>
    </footer>
</div>
@include('aurum.vendors.scripts')
@if(\App\Http\Middleware\LocaleMiddleware::getLocale() === 'de')
    <style>
        @media screen and (orientation: landscape) and (max-width: 767px) {
            .main_btn a {
                font-size: 3rem;
                line-height: 4rem;
            }
        }
    </style>
@endif
@if(\App\Http\Middleware\LocaleMiddleware::getLocale() === 'fr')
    <style>
        .main_btn a {
            font-size: 21px;
            line-height: 3rem;
        }
        /*@media screen and (m)*/
    </style>
@endif

</body>
</html>
