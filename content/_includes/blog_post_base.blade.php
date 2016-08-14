@extends('_includes.base')

@section('body')
    <div class="post">
        <h1 class="post-title">@yield('post::title')</h1>
        <span class="post-date">@yield('post::jalali_date')</span>
        @yield('post_body')
    </div>

    <section id="disqus_thread"></section>
@stop