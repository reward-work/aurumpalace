@extends('aurum.layouts.app')


    @section('content')


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
                                                <img src="{{ asset('img/svg/1.svg') }}" alt="">
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
                                                <img src="{{ asset('img/svg/2.svg') }}" alt="">
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
                                                <img src="{{ asset('img/svg/3.svg') }}" alt="">
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


    @endsection
