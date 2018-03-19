@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Create new Channel</h3>
            <br>
            <hr>
            <br>
        <form action="{{ route('channels.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Channels name</label>
                    <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Ex. CNN" aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted">Enter Channel name here !</small>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                  <label for="">Channel Url</label>
                  <input type="text" name="url" id="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="Ex . http://cnn.com/video?64a6sa4d65as465a4sd" aria-describedby="helpId" required>
                  <small id="helpId" class="text-muted">Enter Channel URL here!</small>
                  @if ($errors->has('url'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
