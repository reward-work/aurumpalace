@extends('aurum.adminLTE.layouts.app')

@section('content')
<div class="content">
    <div class="alert alert-info">
        Note, this information will only be saved for the language you currently use and for the current template
    </div>

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
    <form method="POST" action="{{ route('field-store') }}" enctype="multipart/form-data">
        <input type="hidden" name="index" value="{{ $location }}">
        <div class="box">
            <div class="box-body">

                <div class="row" style="display: flex; align-items: center;">
                    <div class="col-lg-2">
                        <span><?php echo $_SERVER['HTTP_HOST']; ?>/{{ (App\Http\Middleware\LocaleMiddleware::getLocale() ? App\Http\Middleware\LocaleMiddleware::getLocale() : 'en/') }} </span>
                    </div>
                    <div class="col-lg-5">
                        <input style="margin-left: 20px;" value="{{ $page->slug }}" name="page_slug" type="text" class="form-control" placeholder="url">
                    </div>
                    <div class="col-lg-1">
                        <span>Domain:</span>
                    </div>
                    <div class="col-lg-4">
                        <select name="domain" class="form-control">
                            @foreach($domains as $domain)
                                <option @if($domain->name == $page->domain) selected @endif value="{{ $domain->name }}">{{ $domain->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        {{ csrf_field() }}
        <input type="hidden" name="location" value="{{ $location }}">
        
        @foreach($fields as $field)
        
            @if($field->type == 'input')
                <label for="{{ $field->name }}">{{ $field->placeholder }}</label>
                <input type="text" id="{{ $field->name }}" value="{{ $field->value }}" placeholder="{{ $field->placeholder }}" class="form-control" name="{{ $field->name }}">

            @endif
            @if($field->type == 'textarea')
                <label for="{{ $field->name }}">{{ $field->placeholder }}</label>
                <textarea id="{{ $field->name }}" class="tiny" class="form-control" name="{{ $field->name }}" id="" cols="30" rows="10" placeholder="{{ $field->placeholder }}">{{ $field->value }}</textarea>
            @endif
            @if($field->type == 'image')
                <label for="File_{{ $field->name }}">Select {{ $field->placeholder }}</label>
                <input type="file" class="form-control" name="{{ $field->name }}" id="File_{{ $field->name }}">
                @if($field->value)
                    <img style="margin: 10px; display: block;max-width: 200px;" src="/storage/{{ $field->value }}">
                @endif
            @endif
            @if($field->type == 'checkbox')
                 <label for="{{ $field->name }}">{{ $field->placeholder }}</label>
                    <input id="{{ $field->name }}" type='hidden' value='off' name='{{ $field->name }}'>
                 <input type="checkbox" id="{{ $field->name }}" @if($field->value === 'on') checked @endif name="{{ $field->name }}">

            @endif

            <div class="margin"></div>
        @endforeach
        <button class="btn btn-success" style="margin: 0 auto; display: block;">Save</button>

    </form>
    
</div>
<style>
    .margin {
        height: 5px;
        background-color: transparent;
        width: 100%;
    }
</style>
@endsection
