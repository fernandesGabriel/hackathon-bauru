@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Page'): {{ $page->title }}</h1>
    </div>

    <form action="{{ action('Admin\AdminPageController@update') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input type="hidden" class="form-control" name="id" value="{{ $page->id }}">
        <input type="hidden" class="form-control" name="menu_id" value="{{ $page->menu_id }}">
        <div class="form-group">
            <label>@lang('Friendly URL')</label>
            <input type="text" class="form-control" name="url" value="{{ $page->url }}">
        </div>
        <div class="form-group">
            <label for="template">@lang('Template')</label>
            <select class="form-control" id="template" name="scheme">
                @foreach ($allscheme as $row)
                    <option value="{{ $row->id }}" {{ ($row->id == $page->scheme_id ? 'selected' : null) }}>{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
        @foreach ($scheme as $key => $row)
            <?php $name = $row->name; ?>
            @if ($name == "page_title")
                <div class="form-group">
                    <label for="input_{{ $key }}">@lang($row->title)</label>
                    <input type="text" class="form-control" id="input_{{ $key }}" name="{{ $name }}" value="{{ $page->$name }}">
                </div>
            @elseif (isset($row->type) && $row->type == 'textarea')
                <div class="form-group">
                    <label for="input_{{ $key }}">@lang($row->title)</label>
                    <textarea class="form-control rich-text" id="input_{{ $key }}" rows="3" name="{{ $name }}">{{ !empty($page->content->$name) ? $page->content->$name : null }}</textarea>
                </div>
            @else
                <div class="form-group">
                    <label for="input_{{ $key }}">@lang($row->title)</label>
                    <input type="text" class="form-control" id="input_{{ $key }}" name="{{ $name }}" value="{{ !empty($page->content->$name) ? $page->content->$name : null }}">
                </div>
            @endif
        @endforeach
        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
