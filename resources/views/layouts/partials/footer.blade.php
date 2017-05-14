<footer class="page-footer blue-grey">
    <div class="container">
        <div class="row">

            <div class="col l6 s12">
                <h5 class="white-text">Get In Touch</h5>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons white-text prefix">account_circle</i>
                        <input id="name" type="text" class="white-text validate">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons white-text prefix">email</i>
                        <input id="email" type="email" class="white-text validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons white-text prefix">message</i>
                        <textarea id="message" class="materialize-textarea white-text validate"></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <div class="row">
                    <a class="btn-floating btn-large waves-effect waves-light deep-orange">
                        <i class="material-icons white-text prefix">send</i>
                    </a>
                </div>
            </div>

            <div class="col l3 s12">
                <h5><a class="white-text" href="{{ config('url.blog') }}">Blog</a></h5>
                <ul>
                    @foreach($blogPosts as $blogPost)
                        <li class="blog-post">
                            <a class="white-text" href="{{ $blogPost->link }}">{{ $blogPost->title->rendered }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Find Me Elsewhere</h5>
                <a class="btn-floating btn-large waves-effect waves-light icon-github" href="{{ config('url.github') }}" target="_blank"><i class="fa fa-github left" aria-hidden="true"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light icon-stack-overflow" href="{{ config('url.stack-overflow') }}" target="_blank"><i class="fa fa-stack-overflow left" aria-hidden="true"></i></a>
                <a class="btn-floating btn-large waves-effect waves-light icon-twitter" href="{{ config('url.twitter') }}" target="_blank"><i class="fa fa-twitter left" aria-hidden="true"></i></a>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <i class="fa fa-code" aria-hidden="true"></i> with <i class="fa fa-heart" aria-hidden="true"></i> by <a class="blue-grey-text text-lighten-3" href="mailto:mubeen&#64mubeen-inamdar.com">Mubeen Inamdar</a>
        </div>
    </div>
</footer>
