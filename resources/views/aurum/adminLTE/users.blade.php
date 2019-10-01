@extends('aurum.adminLTE.layouts.app')


@section('content')


    <div class="content">
        @if(Session::get('message'))

            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        @if(Session::get('message_error'))
            <div class="alert alert-danger">
                {{ Session::get('message_error') }}
            </div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $e)
                <div class="alert alert danger">
                    {{ $e }}
                </div>
            @endforeach
        @endif
        <div class="box">
            <div class="box-body">
                <form action="{{ route('create-user') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" placeholder="name" class="form-control" name="name">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="col-lg-2">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="col-lg-2">
                            <button style="width: 100%;" class="btn btn-success">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="box" style="display: flex; align-items: center;">
            <div class="box-body" style="width: 100%">
                <div class="row" style="width: 100%">
                    <div class="col-lg-4">Name</div>
                    <div class="col-lg-4">
                        Email
                    </div>
                    <div class="col-lg-2">
                        Password
                    </div>
                    <div class="col-lg-2">
                        Actions
                    </div>
                </div>
            </div>
        </div>
        @foreach($users as $user)
            <div class="box" style="display: flex; align-items: center;">
                <div class="box-body" style="width: 100%;display: flex; align-items: center;">
                    <div class="row" style="width: 100%">
                        <div class="col-lg-4">{{ $user->name }}</div>
                        <div class="col-lg-4">
                            {{ $user->email }}
                        </div>
                        <div class="col-lg-2">
                            *******
                        </div>
                        <div class="col-lg-2">
                            <a href="{{ route('user-destroy', ['id' => $user->id]) }}" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
