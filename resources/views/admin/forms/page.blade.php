@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Page'): {{ $page->title }}</h1>
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

    <form action="{{ action('Admin\AdminPageController@update') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="hidden" class="form-control" name="id" value="{{ $page->id }}">

        <input type="hidden" class="form-control" name="menu_id" value="{{ $page->menu_id }}">

        <div class="form-group">
            <label>@lang('Title')</label>
            <input type="text" class="form-control" name="title" value="{{ $page->title }}">
        </div>

        <div class="form-group">
            <label>@lang('Friendly URL')</label>
            <input type="text" class="form-control" name="url" value="{{ $page->url }}">
        </div>

        <div class="form-group">
            <label for="template">@lang('Template')</label>
            <select class="form-control" id="template" name="scheme">
                @foreach ($scheme as $row)
                    <option value="{{ $row->id }}" {{ ($row->id == $page->scheme_id) }}>{{ $row->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control rich-text" id="exampleFormControlTextarea1" rows="3" name="content">{{ $page->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection
