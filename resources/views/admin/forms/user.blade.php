@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@if($hasUser) @lang('Edit User') @else @lang('Create User') @endif</h1>
    </div>

    <form>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>@lang('Nome')</label>
                    <input type="email" class="form-control" value="@if($hasUser) {{ $user->name  }} @endif">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>@lang('Sobrenome')</label>
                    <input type="email" class="form-control"  value="@if($hasUser) {{ $user->last_name }} @endif">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>@lang('Registration')</label>
                    <input type="email" class="form-control"  value="@if($hasUser) {{ $user->registration }} @endif">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>@lang('Email')</label>
            <input type="email" class="form-control"  value="@if($hasUser) {{ $user->email }} @endif">
        </div>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="h3">@lang('Access')</h3>
        </div>

        <div class="form-group">
            <label>@lang('Username')</label>
            <input type="email" class="form-control"  value="@if($hasUser) {{ $user->username }} @endif">
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label>@lang('Password')</label>
                    <input type="email" class="form-control">
                </div>
            </div>
            @if($hasUser)
                <div class="col-sm">
                    <div class="form-group">
                        <label>@lang('New password')</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
