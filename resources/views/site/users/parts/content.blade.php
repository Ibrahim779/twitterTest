<div class="col-lg-6">
    <div class="central-meta">
        <div class="frnds">
            <ul class="nav nav-tabs">
                @if(isset($user))
                <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Followers</a> <span>{{$user->followers()->count()}}</span></li>
                <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Following</a><span>{{$user->following()->count()}}</span></li>
                    @else
                    <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">All Users</a> <span>{{$recommended_users->count()}}</span></li>
                    <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Random Users</a> <span>{{$random_users->count()}}</span></li>
                @endif

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active fade show" id="frends">
                    <ul class="nearby-contct">
                        @forelse($user->followers??$recommended_users as $follower)
                        <li>
                            <div class="nearly-pepls">
                                <figure>
                                    <a href="{{route('users.show', $follower->id)}}" title=""> <img
                                            src="{{str_contains($follower->avatar, 'user/avatar')?'/storage/'.$follower->avatar:$follower->avatar}}"
                                            alt=""
                                        >
                                    </a>
                                </figure>
                                <div class="pepl-info">
                                    <h4><a href="{{route('users.show', $follower->id)}}" title="">{{$follower->name}}</a></h4>
                                    <span>{{$follower->email}}</span>
                                    <a href="{{route('follows.store', $follower->id)}}" title="" class="add-butn">
                                        @if(\App\Follow::whereFollowerId(auth()->id())->whereUserId($follower->id)->first())
                                            unfollow
                                        @else
                                            follow
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </li>
                        @empty
                            <li>
                                Not Found Followers
                            </li>
                        @endforelse
                    </ul>
                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                </div>
                <div class="tab-pane fade" id="frends-req">
                    <ul class="nearby-contct">
                        @forelse($user->following??$random_users as $follower)
                            <li>
                                <div class="nearly-pepls">
                                    <figure>
                                        <a href="{{route('users.show', $follower->id)}}" title=""> <img
                                                src="{{str_contains($follower->avatar, 'user/avatar')?'/storage/'.$follower->avatar:$follower->avatar}}"
                                                alt=""
                                            >
                                        </a>
                                    </figure>
                                    <div class="pepl-info">
                                        <h4><a href="{{route('users.show', $follower->id)}}" title="">{{$follower->name}}</a></h4>
                                        <span>{{$follower->email}}</span>
                                        <a href="{{route('follows.store', $follower->id)}}" title="" class="add-butn">
                                            @if(\App\Follow::whereFollowerId(auth()->id())->whereUserId($follower->id)->first())
                                                unfollow
                                            @else
                                                follow
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li>
                                Not Found Following
                            </li>
                        @endforelse
                    </ul>
                    <button class="btn-view btn-load-more"></button>
                </div>
            </div>
        </div>
    </div>
</div>
