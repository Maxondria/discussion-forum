@extends('layouts.app')

@section('content')

    @foreach($discussions as $discussion)
        <div class="card">
            <div class="card-header">
                <img src="{{ Gravatar::src($discussion->author->email) }}" width="40px" height="40px"
                     style="border-radius: 50%" alt="">
                <strong class="ml-2">{{ $discussion->author->name }}</strong>
            </div>

            <div class="card-body">
                {!! $discussion->content !!}
            </div>
        </div>
    @endforeach

    {{ $discussions->links() }}
@endsection
