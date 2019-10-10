@extends('aurum.adminLTE.layouts.app')

@section('content')

<section class="content">
    <div class="col-lg-12">
        @foreach($pages as $page)
        <div class="box">

            <div class="box-body" >
                <div class="row"  style="display: flex; align-items:center;">
                    <div class="col-lg-3">
                        <a href="{{ route('edit-fields', ['location' => $page->location]) }}">{{ $page->name }}</a>
                    </div>
                    <div class="col-lg-2">

                        <span class="copy-link" data-clipboard-target="#<?php echo 'id'.$page->slug; ?>">
                            <i class="fa fa-copy"></i> <span> Copy url</span>
                        </span>

                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="id{{ $page->slug }}" value="{{ \App\Repository\Helpers\MainHelpers::getLinkOnPage($page->slug) }}">

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


@endsection
