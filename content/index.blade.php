@extends('_includes.base')

@section('body')

    <div class="posts">
        @foreach($paginatedBlogPosts as $post)
            <div class="post">
                <h1 class="post-title">
                    <a href="@url($post->path)">
                        {{ $post->title }}
                    </a>
                </h1>

                <span class="post-date">{{ $post->jalali_date }}</span>
                {!! explode('<!-- more -->', $post->body)[0] !!}
                <p>
                    <a href="@url($post->path)" role="button">ادامه مطلب ... <i
                                class="fa fa-arrow-circle-right"></i>
                    </a>
                </p>
            </div>
        @endforeach
    </div>

    @include('_includes.blog_paginator')
@stop