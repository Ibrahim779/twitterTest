<div class="central-meta new-pst">
    <div class="new-postbox">
        <figure>
            <a href="{{route('users.show', auth()->id())}}">
            <img  src="{{str_contains(auth()->user()->avatar, 'user/avatar')?'/storage/'.auth()->user()->avatar:auth()->user()->avatar}}" alt="">
            </a>
        </figure>
        <div class="newpst-input">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <textarea name="description" rows="2" placeholder="write something">{{old('description')}}</textarea>
                <div class="attachments">
                    <ul>
{{--                        <li>--}}
{{--                            <i class="fa fa-music"></i>--}}
{{--                            <label class="fileContainer">--}}
{{--                                <input type="file">--}}
{{--                            </label>--}}
{{--                        </li>--}}
                        <li>
                            <i class="fa fa-image"></i>
                            <label class="fileContainer">
                                <input name="image" type="file">
                            </label>
                        </li>
{{--                        <li>--}}
{{--                            <i class="fa fa-video-camera"></i>--}}
{{--                            <label class="fileContainer">--}}
{{--                                <input type="file">--}}
{{--                            </label>--}}
{{--                        </li>--}}

                        <li>
                            <button type="submit">Post</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div><!-- add post new box -->
