@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">

                <h1 class="header center deep-orange-text">Mubeen Inamdar</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Web development in Leeds.</h5>
                </div>

                <div class="row center">
                    <a href="#" class="btn-large waves-effect waves-light deep-orange lighten-1">Get In Touch</a>
                </div>

            </div>
        </div>
        <div class="parallax"><img src="/img/banners/banner_03.jpg" alt="Banner"></div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-grey-text"><i class="fa fa-code" aria-hidden="true"></i></h2>
                        <h5 class="center">Web Development</h5>
                        <p class="light justify-align">I provide bespoke solutions to meet your business requirements. I specialise in making web applications, accessible from anywhere in the world, to aid you and your business in achieving it's ultimate goal.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-grey-text"><i class="fa fa-database" aria-hidden="true"></i></h2>
                        <h5 class="center">Database Design</h5>
                        <p class="light justify-align">Focusing on scalability and performance, I will design and implement a database to power you business both efficiently and effectively.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-grey-text"><i class="fa fa-terminal" aria-hidden="true"></i></h2>
                        <h5 class="center">System Administration</h5>
                        <p class="light justify-align">Take the stress away from having to provision your own servers. I will provide full server maintenance, from security updates and software installation to domain management.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @component('layouts.components.parallax-row', ['imageSrc' => '/img/banners/banner_01.jpg'])
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
    @endcomponent

    @component('layouts.components.text-row', ['title' => 'A Bit About Me'])
        <p class="left-align light">Not only do I work full time as a PHP developer for an executive recruitment company, but in my spare time, I develop my skills further with both personal, and freelance projects. </p>
        <p class="left-align light">In my full time employment, I work on the internal PHP based system, where I take a pro-active role in creating new features, regular code refactoring, fixing bugs, and tuning algorithms to ensure, and improve, high performance at all times. It is of the utmost importance that the PHP based system, is constantly developed to keep in sync with ever changing new technologies, not only for obvious security reasons, but also to maintain state of the art services, which attracts high paying cliental. </p>
        <p class="left-align light">From a mere idea, to a fully functioning product, as a full stack developer my skills enable me to take the ideas from the drawing board, and progress them into a finished, high-spec product.   </p>
        <p class="left-align light">I pride myself with always writing clean and expressive code, I do this by following concepts such as: OOP, The Gang of Four design patterns and MVC. Most of my work is done in the Laravel framework, however, I also write non-framework based code.</p>
        <p class="left-align light">Databases, the heart of every company’s operations, are commodities which I myself have single-handedly designed, keeping in mind the relationships between data, scalability, data integrity and also flexibility, which allows the client to make changes to the original design. </p>
        <p class="left-align light">I’m fully accustomed to using Git for source control to track, both mine and my teams, changes to the system. In regards to the sysadmin side, I have experience with both Apache and NGINX web servers running on a Linux distro (both CentOS and Debian). I have crafted configuration files and feel very comfortable within the CLI. I also have a fair amount of experience with JavaScript along with the jQuery library and more recently the Vue.js framework.</p>
        <p class="left-align light">Although my domain and main area of interest is not concerned with the front-end, I have, in spite of this, created all the front-ends for my projects, most of which utilise the Bootstrap framework while bespoke styling has been implemented through a pre-compile such as SASS. By doing this, I have gained intermediate graphic skills, such as creating vector graphics, and image editing, these skills which I continue to develop on a daily basis. </p>
        <p class="left-align light">Although my role as a PHP developer has massively developed me in the I.T world, I feel confident in saying that the majority of my knowledge, has been gained from countless hours put into books, blogs, forums and videos. </p>
        <p class="left-align light">I am a self-taught developer with an unstoppable drive, nothing will hold me back, and I continuously strive to push my boundaries, in order to excel myself in both my domain and my personal abilities.</p>
    @endcomponent

    @component('layouts.components.parallax-row', ['imageSrc' => '/img/banners/banner_01.jpg'])
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
    @endcomponent

    @component('layouts.components.text-row', ['title' => 'Portfolio & Case Studies'])
        <p class="left-align light">Lorem ipsum...</p>
    @endcomponent

    @component('layouts.components.parallax-row', ['imageSrc' => '/img/banners/banner_02.jpg'])
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
    @endcomponent
@endsection
