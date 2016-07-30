<!DOCTYPE html>
<html>
<head>
    @include('_includes/header')
</head>

<body class="theme-base-08 layout-reverse">

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-73280108-1', 'auto');
    ga('send', 'pageview');

</script>

@include('_includes/sidebar')

<!-- Wrap is the content to shift when toggling the sidebar. We wrap the
     content to avoid any CSS collisions with our real content. -->
<div class="wrap">
    <div class="masthead">
        <div class="container">
            <h3 class="masthead-title">
                <a href="@url('/')" title="Home">{{$siteName}}</a> -
                <small>{{ $siteTagLine }}</small>
            </h3>
        </div>
    </div>

    <div class="container content">
        @yield('body')
    </div>
</div>

<label for="sidebar-checkbox" class="sidebar-toggle"></label>
<script src="@url('assets/js/all.js')"></script>
<script type="text/javascript">
    var disqus_shortname = '{{ $disqusShortname }}';
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
<script>
    (function(document) {
        var toggle = document.querySelector('.sidebar-toggle');
        var sidebar = document.querySelector('#sidebar');
        var checkbox = document.querySelector('#sidebar-checkbox');

        document.addEventListener('click', function(e) {
            var target = e.target;

            if(!checkbox.checked ||
                    sidebar.contains(target) ||
                    (target === checkbox || target === toggle)) return;

            checkbox.checked = false;
        }, false);
    })(document);
</script>
</body>
</html>
