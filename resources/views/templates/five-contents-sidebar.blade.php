@extends('base')

@section('content')

    <?php

        $contents = [];
        foreach ($content as $key => $value) {
            if (strpos($key, 'title_') !== false) {
                if (!empty($value)) {
                    $index = str_replace('title_','',$key);
                    $contents[] = [
                        'title' => $value,
                        'description' => $content->{'content_' . $index},
                        'link' => str_slug($value, '-')
                    ];
                }
            }
        }

    ?>

    <section id="template3" class="bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <ul class="side-menu p-5">
                        @foreach($contents as $row)
                            <li><a href="#{{ $row['link'] }}">{{ $row['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-8 offset-lg-1 col-md-12 col-md-0">
                    @foreach($contents as $row)
                        <div id="{{ $row['link'] }}" class="row">
                            <div class="col-md-12">
                                <h2 class="text-center">{{ $row['title'] }}</h2>
                            </div>
                            <div class="col-md-12">
                                <img class="img-fluid rounded mb-md-4" src="https://placeholdit.co//i/800x600?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                                {!! $row['description'] !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
