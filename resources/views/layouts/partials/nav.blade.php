<div class="navbar-fixed">
    <nav class="navbar-fixed blue-grey" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo white-text">{{ config('app.name') }}</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('storage/Mubeen%20Inamdar%20-%20CV%20July%202016.pdf') }}" class="white-text"><i class="fa fa-file-text right" aria-hidden="true"></i>Download My CV</a></li>
                <li><a href="{{ config('url.blog') }}" class="white-text"><i class="fa fa-comments right" aria-hidden="true"></i>Blog</a></li>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<ul id="nav-mobile" class="side-nav blue-grey">
    <li><a href="{{ url('storage/Mubeen%20Inamdar%20-%20CV%20July%202016.pdf') }}" class="white-text"><i class="fa fa-file-text white-text" aria-hidden="true"></i>Download My CV</a></li>
    <li><a href="{{ config('url.blog') }}"  class="white-text"><i class="fa fa-comments white-text" aria-hidden="true"></i>Blog</a></li>
</ul>
