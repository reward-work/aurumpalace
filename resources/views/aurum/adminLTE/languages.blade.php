@extends('aurum.adminLTE.layouts.app')

@section('content')

    <div class="content">
        @if(Session::get('message_success'))
            <div class="alert alert-success">
                {{ Session::get('message_success') }}
            </div>
        @endif
        @if(Session::get('message_error'))
            <div class="alert alert-danger">
                {{ Session::get('message_error') }}
            </div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <h3>List of languages</h3>
        <form class="box" method="POST" action="{{ route('language_add') }}">
            {{ csrf_field() }}
            <div class="row" style="display: flex;align-items: center;">
                <div class="col-lg-7">
                    <div class="box-body">
                        <input type="text" name="name" class="form-control" placeholder="Language name" required>
                    </div>
                </div>
                <div class="col-lg-3">
                    <input type="text" name="slug" class="form-control" placeholder="language code (slug)" required>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-success w-100" style="width: 100%" type="submit">Add</button>
                </div>
            </div>
        </form>
        @foreach(App\Http\Middleware\LocaleMiddleware::loadLanguages() as $language)
            <div class="box" style="padding-top: 10px; padding-bottom: 5px;">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="box-body">
                            {{ $language->name }}
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <a href="{{ route('languages_destroy', ['slug' => $language->slug]) }}" class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>


@endsection
