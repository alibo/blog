<!-- Target for toggling the sidebar `.sidebar-checkbox` is for regular
     styles, `#sidebar-checkbox` for behavior. -->
<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-item">
        <p>{!! $siteDescription !!}</p>
    </div>

    <nav class="sidebar-nav">
        <a class="sidebar-nav-item
        @if($currentUrlPath == $base_url)
                active
        @endif
                " href="@url('/')">Home</a>
        <a class="sidebar-nav-item" href="http://twitter.com/aliborhani1">Twitter</a>
        <a class="sidebar-nav-item" href="http://github.com/alibo">Github</a>
    </nav>

    <div class="sidebar-item">
        <p>
            &copy; {{ date('Y') }}. All rights reserved.
        </p>
    </div>
</div>
