@extends('layout.site')
@section('content')
    @include('site.users.parts.top', ['followers' => 'active'])
    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            @include('site.parts.sidebar.left.index')
                            @include('site.users.parts.content')
                            {{--                            @include('site.parts.sidebar.right.index')--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
