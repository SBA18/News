@extends('layouts.default')

@section('content')

<h1 class="cover-heading">{{  $channel->name  }}</h1>
<p class="lead"><iframe width="1070" height="615" src="{{ $channel->url }}" frameborder="0" allowfullscreen=""></iframe></p>

<br>
<a href="{{ URL('/') }}" type="button" class="btn btn-dark">Back home</a>
@endsection
