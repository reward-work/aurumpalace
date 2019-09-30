@extends('aurum.adminLTE.layouts.app')

@section('content')

<section class="content">
    <div class="col-lg-12">
        @foreach($pages as $page)
        <div class="box">

            <div class="box-body">
                <a href="{{ route('edit-fields', ['location' => $page->location]) }}">{{ $page->name }}</a>
            </div>
        </div>
        @endforeach

    </div>
</section>


@endsection
