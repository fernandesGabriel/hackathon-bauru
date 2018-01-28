@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Contact')</h1>
    </div>

    <form action="{{ action('Admin\AdminSettingController@saveContact') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label>@lang('Phone Number')</label>
            <input type="text" class="form-control" name="settings_phonenumber" value="{{ $settings_phonenumber->value }}">
        </div>

        <div class="form-group">
            <label>@lang('Facebook')</label>
            <input type="text" class="form-control" name="setting_facebooklink" value="{{ $setting_facebooklink->value }}">
        </div>

        <div class="form-group">
            <label>@lang('Contact Email')</label>
            <input type="text" class="form-control" name="setting_contactemail" value="{{ $setting_contactemail->value }}">
        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
