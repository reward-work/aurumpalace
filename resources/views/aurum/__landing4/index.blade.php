
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AURUMPALACE</title>
    <link rel="shortcut icon" href="/img/favicona.png">

    <link rel="stylesheet" href="{{ asset('__landing4/css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ asset('__landing4/css/bootstrap-grid.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('__landing4/fonts/lato.css') }}">
    <link rel="stylesheet" href="{{ asset('__landing4/css/style.css') }}"/>
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
                    <div class="row h-full d-flex justify-content-around">
                        <div class="col-12 offset-lg-6 col-lg-6 d-flex justify-content-center align-items-lg-center align-items-lg-start  align-items-end">
                            <div class="main_content">
                                <div class="main_title">
                                    {!! $fields['first_heading'] !!}
                                </div>
                                <div class="main_slogan">
                                    {!! $fields['subheading_1_section'] !!}
                                </div>
                                <div class="main_date">{!! $fields['date'] !!}</div>
                                <div class="main_btn">
                                    <a href="{{ $fields['button_href_text_1_section'] }}{{ $getParams }}" class="btn">{!! $fields['button_text_1_section'] !!}</a>
                                </div>
                            </div>
                            <div class="main_content_bg d-none d-lg-block">
                                <img src="{{ asset('__landing4/img/got-texture-frame-1@2x.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub_main">
            <div class="view">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="sub_main_title">
                                {!! $fields['heading_secondary_section'] !!}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex justify-content-lg-center flex-lg-row flex-column">
                                <div class="col-12 col-lg-3">
                                    <div class="sub_main_item">
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">{!! $fields['1_items_text'] !!}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="sub_main_item">
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">{!! $fields['2_items_text'] !!}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="sub_main_item">
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_title">{!! $fields['3_items_text'] !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="sub_main_motivation">
                                {!! $fields['motivation_text'] !!}
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
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/VISA.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/MASTERCARD.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/skrill.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/webmoney.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/sepa.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/epz.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/ideal.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/cashtocode.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/bancontact.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/zimplet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/sofort.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/ECOPAYZ.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/safety.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/TRUSTLY.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/NETELLER.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/PAYSAFECARD.svg') }}" alt=""></div>
            </div>
            <div class="managed_text">
                {!! $fields['managed_text'] !!}
            </div>
            <div class="partners_list_company">
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/microgaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/egt.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/nyx.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/playson.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/omi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/endr.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/globalbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/habanero.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/isoftbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/ezugi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/portomaso.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/betgames.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/progamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/evolution_gaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/asiagamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/betsoft.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/pokerclas.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('__landing4/img/svg/pragmatic.svg') }}" alt=""></div>
            </div>
            <div class="footer_company_list">
                <div class="footer_company"><img src="{{ asset('__landing4/img/svg/18.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('__landing4/img/svg/gc.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('__landing4/img/svg/rgf.svg') }}"
                                                 alt=""></div>
                <div class="footer_company"><img src="{{ asset('__landing4/img/svg/malta%20g.svg') }}" alt=""></div>
            </div>
            <div class="footer_social">
                <a class="social_icon page_link" href="https://www.facebook.com/AurumPalace2" target="_blank"><img src="{{ asset('__landing4/img/svg/001-facebook.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://www.instagram.com/aurumpalace/" target="_blank"><img src="{{ asset('__landing4/img/svg/003-instagram.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://twitter.com/AurumPalace" target="_blank"><img src="{{ asset('__landing4/img/svg/002-twitter.svg') }}" alt=""></a>
            </div>
            <div class="footer_responsibly">Gambling can be addictive, please play responsibly</div>
            <div class="footer_copy">&copy; AURUMPALACE ALL RIGHTS RESERVED</div>
        </div>
    </footer>
</div>
@include('aurum.vendors.scripts')
<style>
    @media screen and (orientation: landscape) and (max-width: 768px) {
        .header_logo img {
            max-width: 220px;
        }
        .main_terms {
            margin-bottom: 1rem;
        }
        .main_title {
            margin-bottom: 0rem;
        }
        .main_bonus {
            margin-bottom: 0;
        }
        .main {
            margin-top: 54px;
        }
        .main_btn a {
            font-size: 4rem;
            line-height: 6rem;
            max-width: 230px;
            margin: 0 auto;
            height: 48px;
        }
        .main {
            margin-top: 0;
        }
    }
    @media screen and (max-width: 1024px) {
        .main_title {
            line-height: 6rem;
            margin-bottom: 0;
            font-size: 6rem;
        }
        .main_bonus {
            margin-bottom: 0;
        }
        .main_btn a {
            padding: 6px 0;
        }
        .main_terms {
            margin-bottom: 2rem;
        }
        .main_bonus span {
            line-height: 6rem;
            font-size: 5rem;
        }
        .main_slogan {
            margin-bottom: 0;
        }
        .main_date {
            margin-bottom: 0;
        }
    }
</style>

</body>
</html>
