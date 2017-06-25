<div class="navbar-fixed">
    <nav class="navbar-fixed blue-grey" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo white-text">{{ config('app.name') }}</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ config('url.blog') }}" class="white-text"><i class="material-icons right">comment</i>Blog</a></li>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<ul id="nav-mobile" class="side-nav blue-grey">
    <li><a href="{{ config('url.blog') }}"  class="white-text"><i class="material-icons white-text">comment</i>Blog</a></li>
</ul>
