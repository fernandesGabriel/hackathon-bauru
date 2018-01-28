@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Sponsors')</h1>
    </div>
    <form action="{{ action('Admin\AdminSponsorController@upload') }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        	{{ csrf_field() }}
            <div class="controls">
                <input name="image" type="file">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg float-right">@lang('Save')</button>
    	<ul>
        	@foreach($attachs as $attach)
        		<li>
        			<img src="{{ URL::to($attach->path) }}"  width="10%" />
        			<a href="{{ action('Admin\AdminSponsorController@delete', ['id' => $attach->id]) }}" class="btn btn-outline-error btm-sm pull-right"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        		</li>
    	    @endforeach
    	</ul>
    </form>

@endsection
