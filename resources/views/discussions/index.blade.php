@extends('layouts.app')

@section('content')

    @foreach($discussions as $discussion)
        <div class="card">

            @include('partials.discussions-header')

            <div class="card-body">
                <div class="text-center font-weight-bold">
                    {{ $discussion->title }}
                </div>
            </div>
        </div>
    @endforeach

    {{ $discussions->links() }}
@endsection
