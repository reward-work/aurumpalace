@extends('aurum.adminLTE.layouts.app')

@section('content')
<div class="content">
    <div class="alert alert-warning">
        Attention, all data will be changed only for the language you are currently in
    </div>
    @if(Session::get('message_success'))
        <div class="alert alert-success">
            {{ Session::get('message_success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('field-store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="location" value="{{ $location }}">
        
        @foreach($fields as $field)
        
            @if($field->type == 'input')
                <label for="{{ $field->name }}">{{ $field->placeholder }}</label>
                <input type="text" id="{{ $field->name }}" value="{{ $field->value }}" placeholder="{{ $field->placeholder }}" class="form-control" name="{{ $field->name }}">

            @endif
            @if($field->type == 'textarea')
                <label for="{{ $field->name }}">{{ $field->placeholder }}</label>
                <textarea id="{{ $field->name }}" class="form-control" name="{{ $field->name }}" id="" cols="30" rows="10" placeholder="{{ $field->placeholder }}">{{ $field->value }}</textarea>
            @endif
            @if($field->type == 'image')
                <label for="File_{{ $field->name }}">Select {{ $field->placeholder }}</label>
                <input type="file" class="form-control" name="{{ $field->name }}" id="File_{{ $field->name }}">
                @if($field->value)
                    <img style="margin: 10px; display: block;max-width: 200px;" src="/storage/{{ $field->value }}">
                @endif
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
