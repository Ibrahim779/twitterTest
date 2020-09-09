<section>
    <div class="feature-photo">
        <figure><img style="width: 100%; height: 450px" src="{{str_contains($user->cover, 'user/cover')?'/storage/'.$user->cover:$user->cover}}" alt=""></figure>
        <div class="add-btn">
            <span>{{$user->followers()->count()}} Followers</span>
            @unless(auth()->id() == $user->id)
                <a href="{{route('follows.store', $user->id)}}" title="" class="underline ml-3">
                    @if(\App\Follow::whereFollowerId(auth()->id())->whereUserId($user->id)->first())
                        unfollow
                    @else
                        follow
                    @endif
                </a>
            @endunless
        </div>
        @if(auth()->user() == $user)
        <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data" class="edit-phto">
            @method('PATCH')
            @csrf
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
                <input name="cover" type="file">
            </label>
            <button type="submit">change</button>
        </form>
        @endif
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="{{str_contains($user->avatar, 'user/avatar')?'/storage/'.$user->avatar:$user->avatar}}"
                                 alt=""
                            >
                            @if(auth()->user() == $user)
                            <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data" class="edit-phto">
                                @method('PATCH')
                                @csrf
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input name="avatar" type="file">
                                </label>
                                <button type="submit">change</button>
                            </form>
                                @endif
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5>{{$user->name}}</h5>
                                <span>{{$user->email}}</span>
                            </li>
                            <li>
                                <a class="{{$show??''}}" href="{{route('users.show', $user->id)}}" title="" data-ripple="">time line</a>
                                <a class="{{$followers??''}}" href="{{route('users.followers', $user->id)}}" title="" data-ripple="">Followers</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- top area -->
