<footer class="page-footer blue-grey">
    <div class="container">
        <div class="row">

            <contact-form></contact-form>

            <div class="col l3 s12">
                <h5><a class="white-text" href="{{ config('url.blog') }}">Blog</a></h5>
                <ul>
                    @foreach($blogPosts as $blogPost)
                        <li class="blog-post">
                            <a href="{{ $blogPost->link }}">{{ $blogPost->title->rendered }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col l3 s12">
                <h5 class="white-text">Find Me Elsewhere</h5>
                <a class="btn-floating btn-large waves-effect waves-light tooltipped icon-github" href="{{ config('url.github') }}" target="_blank" data-position="bottom" data-tooltip="GitHub"><i class="fa fa-github left" aria-hidden="true"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light tooltipped icon-stack-overflow" href="{{ config('url.stack-overflow') }}" target="_blank" data-position="bottom" data-tooltip="Stack Overflow"><i class="fa fa-stack-overflow left" aria-hidden="true"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light tooltipped icon-twitter" href="{{ config('url.twitter') }}" target="_blank" data-position="bottom" data-tooltip="Twitter"><i class="fa fa-twitter left" aria-hidden="true"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light tooltipped icon-wordpress" href="{{ config('url.blog') }}" data-position="bottom" data-tooltip="Blog"><i class="fa fa-wordpress left" aria-hidden="true"></i></a>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <i class="fa fa-code" aria-hidden="true"></i> with <i class="fa fa-heart" aria-hidden="true"></i> by <a class="blue-grey-text text-lighten-3" href="mailto:mubeen&#64mubeen-inamdar.com">Mubeen Inamdar</a>
        </div>
    </div>
</footer>
