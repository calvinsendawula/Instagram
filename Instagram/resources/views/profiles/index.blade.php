@extends('layouts.app')

@section('content')
<div class="container" style="padding: 0px 200px;">
    <div class="row">
        <div class="col-4 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="w-100 rounded-circle">
        </div>
        <div class="col-8 py-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan

            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div style="padding-right: 50px;"><strong>{{ $postCount }}</strong>
                    <?php if( ($postCount) == 1 ){
                        echo('post');
                    }else{
                        echo('posts');
                    }?>
                </div>
                <div style="padding-right: 50px;"><strong>{{ $followersCount }}</strong> 
                    <?php if( ($followersCount) == 1 ){
                        echo('follower');
                    }else{
                        echo('followers');
                    }?>
                </div>
                <div style="padding-right: 50px;"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
                <div><a href="{{ $user->profile->url }}" target="_blank" style="color: #064278; font-weight: bold;">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row">
        @foreach($user->posts as $post)
            <div class="border-light col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                <img class="card-img-top w-100" style="border-radius: 10px;" src="/storage/{{ $post->image }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
