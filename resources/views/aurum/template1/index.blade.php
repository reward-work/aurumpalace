
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AURUMPALACE</title>
    <link rel="shortcut icon" type="image/png" href="{% static 'images/fav.png') }}"/>
    <link href="{{ asset('template1/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/css/FiraSans.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="main_wrapper">
    <header class="header">
        <div class="view_header d-flex flex-sm-row flex-md-row justify-content-between align-items-center">
            <a class="header_logo">
                <img src="{{ asset('template1/img/svg/Logo.svg') }}" alt="">
            </a>
            <div class="header_nav d-flex flex-lg-row justify-content-between align-items-center">
                <div class="header_btn d-flex flex-row align-items-center">
                    <a class="btn" href="/?aff_lb=1">Sing Up</a>
                </div>
            </div>
        </div>
    </header>
    <div class="main_view">
        <section class="main">
            <div class="view h-full">
                <div class="container-fluid h-full">
                    <div class="row h-full">
                        <div class="col-12 offset-lg-6 col-lg-6 d-flex justify-content-center align-items-lg-center align-items-end">
                            <div class="main_content">
                                <div class="main_title">
                                    Welcome Package!
                                </div>
                                <div class="main_bonus">
                                    <span>300%</span> bonus
                                    up&nbsp;to <span> &euro;1000 </span>
                                    <span>+200</span>&nbsp;free spins*
                                </div>
                                <div class="main_terms"><span>*Bonus</span><a href="#"> Terms &amp; Conditions</a></div>
                                <div class="main_btn">
                                    <a href="/?aff_lb=1" class="btn">Register Now</a>
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
                                Just 3 steps to sit on the AurumPalace Throne
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="{{ asset('template1/img/svg/1.svg') }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_num">1.</div>
                                            <div class="sub_main_item_title">Register your Account</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="{{ asset('template1/img/svg/2.svg') }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_num">2.</div>
                                            <div class="sub_main_item_title">Make a Deposit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="sub_main_item">
                                        <div class="sub_main_icon">
                                            <img src="{{ asset('template1/img/svg/3.svg') }}" alt="">
                                        </div>
                                        <div class="sub_main_item_text">
                                            <div class="sub_main_item_num">3.</div>
                                            <div class="sub_main_item_title">Spin the Wheel of Fortune</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="sub_main_text">
                                <p>* For claiming the Bonus, head to the cashier and select the Bonus from the dropdown
                                    box. Free Spin Games: Starburst, Game of Thrones.
                                </p>
                                <p>Play a great variety of exciting games in fascinating places and enjoy a premium
                                    online gambling in our casino!</p>
                            </div>
                            <div class="sub_main_small_text">
                                <p>Copyright 2019 All Rights Reserved. aurumpalace.com is a brand owned by DGV
                                    Entertainment Group Limited, reg. no. C 90487 (hereafter the &ldquo;Customer&rdquo;), a company
                                    incorporated under the laws of Malta, having its registered address 170, Pater
                                    House, Level 1 (Suite A251), Psaila Street, Birkirkara BKR 9077, Malta.
                                </p>
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
                <div class="partners_company"><img src="{{ asset('template1/img/svg/VISA.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/MASTERCARD.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/skrill.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/webmoney.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/sepa.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/epz.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/ideal.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/cashtocode.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/bancontact.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/zimplet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/sofort.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/ECOPAYZ.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/safety.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/TRUSTLY.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/NETELLER.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/PAYSAFECARD.svg') }}" alt=""></div>
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
                <div class="partners_company"><img src="{{ asset('template1/img/svg/microgaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/egt.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/nyx.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/playson.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/omi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/endr.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/globalbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/habanero.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/isoftbet.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/ezugi.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/portomaso.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/betgames.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/progamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/evolution%20gaming.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/asiagamin.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/betsoft.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/pokerclas.svg') }}" alt=""></div>
                <div class="partners_company"><img src="{{ asset('template1/img/svg/pragmatic.svg') }}" alt=""></div>
            </div>
            <div class="footer_company_list">
                <div class="footer_company"><img src="{{ asset('template1/img/svg/18.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('template1/img/svg/gc.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('template1/img/svg/rgf.svg') }}" alt=""></div>
                <div class="footer_company"><img src="{{ asset('template1/img/svg/malta%20g.svg') }}" alt=""></div>
            </div>
            <div class="footer_social">
                <a class="social_icon page_link" href="https://www.facebook.com/AurumPalace2" target="_blank"><img src="{{ asset('template1/img/svg/001-facebook.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://www.instagram.com/aurumpalace/" target="_blank"><img src="{{ asset('template1/img/svg/003-instagram.svg') }}" alt=""></a>
                <a class="social_icon page_link" href="https://twitter.com/AurumPalace" target="_blank"><img src="{{ asset('template1}/img/svg/002-twitter.svg') }}" alt=""></a>
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