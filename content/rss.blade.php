<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">

 <title>{{ $siteName }}</title>
 <link href="http://borhani.pw/feed.rss" rel="self"/>
 <link href="http://borhani.pw/"/>
 <id>https://borhani.pw</id>

@foreach($blogPosts as $post)
 <entry>
   <title>{{ $post->title }}</title>
   <link href="https://borhani.pw{{ $post->path }}"/>
   <updated>{{ DateTime::createFromFormat('U', $post->date)->format(DATE_ATOM) }}</updated>
   <id>https://borhani.pw{{ $post->path }}</id>
   <content type="html">![CDATA[{!! $post->body !!}]]</content>
 </entry>
@endforeach

</feed>