@extends('admin.base')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">@lang('Users')</h1>
    </div>

    <a href="{{ route('admin/user/form') }}" class="btn btn-primary btn-lg float-right mb-3">@lang('New User')</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">@lang('Name')</th>
                <th scope="col">@lang('Email')</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="align-middle" scope="row">{{ $user->name }}</td>
                    <td class="align-middle">{{ $user->email }}</td>
                    <td>
                        <form class="" action="{{ route('admin/user/delete') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-outline-danger btm-sm pull-right ml-2"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </form>
                        <a href="{{ route('admin/user/form', ['íd' => $user->id]) }}" class="btn btn-outline-primary btm-sm pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
