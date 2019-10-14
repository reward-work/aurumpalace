@extends('aurum.adminLTE.layouts.app')

@section('content')

<section class="content">
    <div class="col-lg-12">
        @foreach($pages as $page)
        <div class="box">

            <div class="box-body" >
                <div class="row"  style="display: flex;flex-wrap: wrap; align-items:center;">
                    <div class="col-lg-3">
                        <a href="{{ route('edit-fields', ['location' => $page->location]) }}">{{ $page->name }}</a>
                    </div>

                    <div class="col-lg-9">
                        <div class="row ">
                            @foreach(\App\Repository\Helpers\MainHelpers::getDomainsForProject($page->domain) as $domain)
                                <div class="col-lg-2">

                                    <span class="copy-link" data-clipboard-target="#<?php echo 'id'.$page->id . \Illuminate\Support\Str::slug($domain); ?>">
                                        <i class="fa fa-copy"></i> <span> Copy url</span>
                                    </span>

                                </div>
                                <div class="col-lg-10" style="margin-bottom: 10px;">
                                    <input class="form-control" id="id{{ $page->id. \Illuminate\Support\Str::slug($domain) }}" value="{{ $domain . '/'. $page->slug }}">
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<style>
    .wrapper {
        background-color: #ecf0f5 !important;
    }
</style>

@endsection
