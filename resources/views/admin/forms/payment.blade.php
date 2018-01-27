@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Payment')</h1>
    </div>

    <form>
        <div class="form-group">
            <label for="">Snippet Pagseguro</label>
            <textarea class="form-control rich-text" id="" rows="3" name></textarea>
        </div>

        <div class="form-group">
            <label for="">Snippet Paypal</label>
            <textarea class="form-control rich-text" id="" rows="3" name></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
