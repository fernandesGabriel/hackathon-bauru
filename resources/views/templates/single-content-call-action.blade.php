@extends('base')

@section('content')

    <section id="template1" class="bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">{{ $content->title_1 }}</h2>
                </div>
                <div class="col-md-12">
                    <img class="img-fluid rounded ml-md-4 mb-md-4 img-half" src="{{ asset('img/01.png') }}" alt="Lorem ipsum">
                    {!! $content->content_1 !!}
                </div>
                <button type="button" class="btn btn-primary mx-auto px-5">Call to action</button>
            </div>
        </div>
    </section>

@endsection
