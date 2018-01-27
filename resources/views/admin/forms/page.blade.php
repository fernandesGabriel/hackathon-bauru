@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Page'): titulo</h1>
    </div>

    <form>
        <div class="form-group">
            <label>@lang('Title')</label>
            <input type="email" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label>@lang('Friendly URL')</label>
            <input type="email" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label for="template">@lang('Template')</label>
            <select class="form-control" id="template">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control rich-text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
