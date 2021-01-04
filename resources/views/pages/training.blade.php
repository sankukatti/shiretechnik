@extends('layouts.app')

@section('title', 'Trainings')

@section('content')
<div class="page">
    <section class="imformation-text training-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="title-text bold blue title-spacing">
                        {{$json['title']}}
                    </p>
                    <p class="block text justify">
                        {{$json['text']}}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9">
                    @for ($i = 0; $i < count($json['varients']); $i++)
                        <p class="headding bold blue title-spacing">
                            {{ $json['varients'][$i]['title'] }}
                        </p>
                        <p class="block text justify">
                            {{ $json['varients'][$i]['desc'] }}
                        </p>
                        <a class="block text contact-us-link" target="_blank" href="{{ $json['varients'][$i]['link']['link'] }}">
                            {{ $json['varients'][$i]['link']['text'] }}
                        </a>
                    @endfor
                </div>
                <div class="col-sm-3">
                    <ul class="block image-list">
                    @for ($i = 0; $i < count($json['images']); $i++)
                        <li class="image">
                            <img src="/images/{{ $json['images'][$i]['img'] }}">
                            <a class="block text2 contact-us-link" target="_blank" href="{{ $json['varients'][$i]['link']['link'] }}">
                                {{ $json['images'][$i]['imgTitle'] }}
                            </a>
                        </li>
                    @endfor
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
