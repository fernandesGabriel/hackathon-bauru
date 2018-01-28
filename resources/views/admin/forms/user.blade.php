@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@if($hasUser) @lang('Edit User') @else @lang('Create User') @endif</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ action('Admin\AdminSettingController@saveUser') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if($hasUser)
            <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">
        @endif

        <div class="row">

            <div class="col-sm-5">
                <div class="form-group">
                    <label>@lang('Nome')</label>
                    <input type="text" name="name" class="form-control" value="@if($hasUser) {{ $user->name  }} @endif">
                </div>
            </div>

            <div class="col-sm-5">
                <div class="form-group">
                    <label>@lang('Sobrenome')</label>
                    <input type="text" class="form-control" name="last_name" value="@if($hasUser) {{ $user->last_name }} @endif">
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label>@lang('Registration')</label>
                    <input type="text" class="form-control" name="registration" value="@if($hasUser) {{ $user->registration }} @endif">
                </div>
            </div>

        </div>

        <div class="form-group">
            <label>@lang('Email')</label>
            <input type="email" class="form-control" name="email" value="@if($hasUser) {{ $user->email }} @endif">
        </div>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="h3">@lang('Access')</h3>
        </div>

        <div class="form-group">
            <label>@lang('Username')</label>
            <input type="text" class="form-control" name="username" value="@if($hasUser) {{ $user->username }} @endif">
        </div>

        <div class="row">

            <div class="col-sm">
                <div class="form-group">
                    <label>@lang('Password')</label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            @if($hasUser)
                <div class="col-sm">
                    <div class="form-group">
                        <label>@lang('Repeat password')</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>
            @endif

        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
