@extends('base')

@section('body-class',"login no-header no-footer")

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <span class="anchor" id="formLogin"></span>
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">@lang('Administration Panel')</h3>
                            </div>
                            <div class="card-body">

                                <form  id="formLogin"  class="form" role="form" autocomplete="off" method="POST" action="{{ route('login') }}">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="email">@lang('Email')</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="email" value="{{ old('email') }}" required autofocus>
                                         @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">@lang('Password')</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" name="password" required autocomplete="new-password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg float-right">@lang('Login')</button>

                                    <a class="btn btn-link" href="{{ route('password/email') }}">@lang('Forgot my password')</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
