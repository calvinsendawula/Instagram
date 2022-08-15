@extends('layouts.app')

@section('content')
<div class="container" style="padding: 0px 200px;">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                </div>
                <div>
                    <div class="fw-bold">
                        <a class="px-3" href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        <a href="#">Follow</a>
                    </div>
                </div>
            </div>

            <hr>

            <p>
                <span class="fw-bold" style="padding-right: 10px;">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span>{{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
