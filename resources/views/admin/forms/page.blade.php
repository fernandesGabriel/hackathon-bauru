@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Edit Page') {{ $page->title }}</h1>
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

        <div class="card card-header mb-3 p-0">
            <div class="card-body">

                <div class="form-group">
                    <label>@lang('Page Title')</label>
                    <input type="text" class="form-control" name="page_title" value="{{ $page->page_title }}">
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label>@lang('Friendly URL')</label>
                            <input type="text" class="form-control" name="url" value="{{ $page->url }}">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="template">@lang('Template')</label>
                            <select class="form-control" id="template" name="scheme">
                                @foreach ($schemes as $row)
                                    <option value="{{ $row->id }}" {{ ($row->id == $page->scheme_id ? 'selected' : null) }}>@lang($row->name)</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($pageScheme as $field => $params)

            @switch($params->type)
                @case('rich-text')
                    <div class="form-group">
                        <label for="{{ $field }}">@lang($params->title)</label>
                        <textarea class="form-control rich-text" id="{{ $field }}" rows="3" name="{{ $params->name }}">{{ $params->value }}</textarea>
                    </div>
                @break

                @case('text-line')
                    <div class="form-group">
                        <label for="{{ $field }}">@lang($params->title)</label>
                        <input type="text" class="form-control" id="{{ $field }}" name="{{ $params->name }}" value="{{ $params->value }}">
                    </div>
                @break

                @default
                <div class="form-group">
                    <label for="{{ $field }}">@lang($params->title)</label>
                    <input type="text" class="form-control" id="{{ $field }}" name="{{ $params->name }}" value="{{ $params->value }}">
                </div>

            @endswitch
        @endforeach

        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    </form>

@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <script>
        $(function() {
            $('.rich-text').each( function () {
                CKEDITOR.replace( this.id , {});
            });
        });
    </script>
@endpush