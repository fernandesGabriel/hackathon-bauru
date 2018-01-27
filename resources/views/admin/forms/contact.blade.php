@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Contact')</h1>
    </div>

    <form>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Facebook</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Email de Contato</label>
            <input type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
