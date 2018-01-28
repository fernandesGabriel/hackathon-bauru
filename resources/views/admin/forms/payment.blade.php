@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Payment')</h1>
    </div>

    <form action="{{ action('Admin\AdminSettingController@savePayment') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="">@lang('Snippet Pagseguro')</label>
            <textarea class="form-control" rows="3" name="setting_pagseguro">{{ $setting_pagseguro->value }}</textarea>
        </div>

        <div class="form-group">
            <label for="">@lang("Snippet Paypal")</label>
            <textarea class="form-control" rows="3" name="setting_payment">{{ $setting_payment->value }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
