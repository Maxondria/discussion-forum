@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Add Discussion</div>

        <div class="card-body">

            @include('partials.errors')

            <form action="{{ route('discussions.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="">
                </div>

                <div class="form-group">
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="channel_id">Channel</label>
                    <select name="channel_id" id="channel_id" class="form-control">
                        @foreach($channels as $channel)
                            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-success">Create Discussion</button>

            </form>
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
@endsection
