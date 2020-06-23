@extends('layouts.app')

@section('title', 'Tweet reference maker Vancouver edition')
@section('content')
    <div class="container mainContent">
    <div class="col s12 m7">
        <div class="card horizontal">
            <div class="card-image">
                <img class="twitterlogo" src="/img/twitter-logo.png">
            </div>
            <div class="card-stacked ">
                <div class="card-content" id="card-content">
                    <p><span style="color: deepskyblue;"> {{ $tweetInfo->user->name}}.</span>
                        <span style="color: orange;"> {{ $tweetInfo->full_text}}  </span><span style="color:red">[tuit].</span>

                        <span style="color: darkviolet;">{{$created_date}}.</span>
                        <span style="color: darkgray;">Consultado el:  {{ strftime($format)}}</span>
                        <span style="color: forestgreen;">Disponible en: <a href="{{ $tweetUrl}}" >{{ $tweetUrl}}</a></span></p>
                </div>
                <div class="card-action">
                    <a href="/reference">Atras</a>
                    <button class="btn deep-purple" onclick="copyToClip(document.getElementById('card-content'))" > copy to clipboard</button>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection