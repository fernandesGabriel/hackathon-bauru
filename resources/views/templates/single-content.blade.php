@extends('base')

@section('content')

    <section id="template2" class="bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">{{ $content->title_1 }}</h2>
                </div>
                <div class="col-md-12">
                    {!! $content->content_1 !!}
                </div>
            </div>
        </div>
    </section>

@endsection
