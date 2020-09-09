<div class="loadMore">
    <div class="central-meta item" style="display: inline-block;">
        @forelse($posts as $post)
        <div class="user-post">
            <div class="friend-info">

                    <figure>
                    <img  src="{{str_contains($post->user->avatar, 'user/avatar')?'/storage/'.$post->user->avatar:$post->user->avatar}}" alt="">
                </figure>
                <div class="friend-name">
                    <ins><a href="{{route('users.show', $post->user->id)}}" title="">{{$post->user->name}}</a>
                        @unless(auth()->id() == $post->user->id)
                        <a href="{{route('follows.store', $post->user->id)}}" title="" class="underline ml-3">
                            @if(\App\Follow::whereFollowerId(auth()->id())->whereUserId($post->user->id)->first())
                                unfollow
                               @else
                                follow
                            @endif
                        </a>
                            @endunless
                    </ins>
                    <span>published: {{$post->created_at->diffForHumans()}}</span>
                </div>

                <div class="post-meta">
                    <div class="description">

                        <p>
                            {{$post->description}}
                        </p>
                    </div>
                    @if($post->image)
                        <a href="{{route('posts.show', $post->id)}}">
                    <img src="{{str_contains($post->image, 'posts/images')?'/storage/'.$post->image:$post->image}}" alt="">
                        </a>
                    @endif
                    <div class="we-video-info">
                        <ul>
{{--                            <li>--}}
{{--                                <span class="views" data-toggle="tooltip" title="" data-original-title="views">--}}
{{--                                    <i class="fa fa-eye"></i>--}}
{{--                                    <ins>1.2k</ins>--}}
{{--                                </span>--}}
{{--                            </li>--}}
                            <li>
                                <span class="comment" data-toggle="tooltip" title="" data-original-title="Comments">
                                    <i class="fa fa-comments-o"></i>
                                    <ins>{{$post->comments()->count()}}</ins>
                                </span>
                            </li>
                            <li>
                                <a href="{{route('loves.store', ['status' => 'like', 'post' => $post->id])}}">
                                <span class="like" data-toggle="tooltip" title="" data-original-title="like">
                                   <i class="fas fa-heart"></i>
                                    <ins>{{$post->loves()->like()->count()}}</ins>
                                </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('loves.store', ['status' => 'dislike', 'post' => $post->id])}}">
                                     <span class="dislike" data-toggle="tooltip" title="" data-original-title="dislike">
                                        <i class="fas fa-heart-broken"></i>
                                       <ins>{{$post->loves()->dislike()->count()}}</ins>
                                     </span>
                                </a>
                            </li>


                            <li class="social-media">
                                <div class="menu">
                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                    <div class="rotater">
                                        <div class="btn btn-icon"><a href="https://www.facebook.com/sharer/sharer.php?u={{route('posts.show', $post->id)}}" title=""><i class="fa fa-facebook"></i></a></div>
                                    </div>
                                    <div class="rotater">
                                        <div class="btn btn-icon"><a href="https://twitter.com/intent/tweet?text=Default+share+text&url={{route('posts.show', $post->id)}}" title=""><i class="fa fa-twitter"></i></a></div>
                                    </div>
                                    <div class="rotater">
                                        <div class="btn btn-icon"><a href="http://www.linkedin.com/shareArticle?mini=true&url={{route('posts.show', $post->id)}}" title=""><i class="fa fa-linkedin"></i></a></div>
                                    </div>
                                    <div class="rotater">
                                        <div class="btn btn-icon"><a href="https://wa.me/?text={{route('posts.show', $post->id)}}" title=""><i class="fa fa-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="coment-area">
                <ul class="we-comet">
                    @forelse($post->comments as $comment)
                    <li>
                        <div class="comet-avatar">
                            <img src="{{str_contains($comment->user->avatar, 'user/avatar')?'/storage/'.$comment->user->avatar:$comment->user->avatar}}" alt="">
                        </div>
                        <div class="we-comment">
                            <div class="coment-head">
                                <h5><a href="{{route('users.show', $comment->user->id)}}" title="">{{$comment->user->name}}</a></h5>
                                <span>{{$comment->created_at->diffForHumans()}}</span>

                            </div>
                            <p>
                                {{$comment->description}}
                            </p>
                        </div>
                    </li>
                    @empty
                        @endforelse
                    <li class="post-comment">
                        <div class="comet-avatar">
                            <img src="{{str_contains(auth()->user()->avatar, 'user/avatar')?'/storage/'.auth()->user()->avatar:auth()->user()->avatar}}" alt="">
                        </div>
                        <div class="post-comt-box">
                            <form action="{{route('comments.store', $post->id)}}" method="post">
                                @csrf
                                <textarea name="description" placeholder="Post your comment">{{old('description')}}</textarea>
                                <div class="add-smiles">
                                    <span class="em em-expressionless" title="add icon"></span>
                                </div>
                                <div class="smiles-bunch">
                                    <i class="em em---1"></i>
                                    <i class="em em-smiley"></i>
                                    <i class="em em-anguished"></i>
                                    <i class="em em-laughing"></i>
                                    <i class="em em-angry"></i>
                                    <i class="em em-astonished"></i>
                                    <i class="em em-blush"></i>
                                    <i class="em em-disappointed"></i>
                                    <i class="em em-worried"></i>
                                    <i class="em em-kissing_heart"></i>
                                    <i class="em em-rage"></i>
                                    <i class="em em-stuck_out_tongue"></i>
                                </div>
                                <button class="pb-3" type="submit"><span style="color: #2fa7cd">send</span></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
            @empty
            <div class="user-post">
                Not Found Posts
            </div>
        @endforelse
    </div>
</div>
