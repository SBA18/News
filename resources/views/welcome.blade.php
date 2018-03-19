@extends('layouts.default')

@section('content')

<h1 class="cover-heading">Channel list</h1>
<hr>
<div class="card-deck" style="text-shadow:none; color:black">
    @foreach($channels as $channel)
    <div class="card">
        <a href="{{route('channels.show', $channel->slug)}}" style="color:#333;">
            <div class="card-body">
                <h5 class="card-title">{{$channel->name}}</h5>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection