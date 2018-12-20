@extends('layouts.app')

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">

                <div class="row center">
                    <h1 class="header deep-orange-text">Mubeen Inamdar</h1>
                    <h5 class="header col s12 light">Bespoke Web Apps</h5>
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
                        <h4 class="center">Web Development</h4>
                        <p class="light justify-align">I provide bespoke solutions to meet your business requirements. I specialise in making web applications, accessible from anywhere in the world, to aid you and your business in achieving it's ultimate goal.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-grey-text"><i class="fa fa-database" aria-hidden="true"></i></h2>
                        <h4 class="center">Database Design</h4>
                        <p class="light justify-align">Focusing on scalability and performance, I will design and implement a database to power you business both efficiently and effectively.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center blue-grey-text"><i class="fa fa-terminal" aria-hidden="true"></i></h2>
                        <h4 class="center">System Administration</h4>
                        <p class="light justify-align">Take the stress away from having to provision your own servers. I will provide full server maintenance, from security updates and software installation to domain management.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @component('layouts.components.parallax-row', ['imageSrc' => '/img/banners/banner_01.jpg'])
        <h5 class="header col s12 light">Let's turn your ideas into fully working systems to power your business</h5>
    @endcomponent

    @component('layouts.components.text-row', ['title' => 'A Bit About Me'])
        <p class="left-align light">Not only do I work full time as a PHP developer for an executive recruitment company, but in my spare time, I develop my skills further with both personal, and freelance projects. </p>
        <p class="left-align light">In my full time employment, I work on the internal PHP based system, where I take a pro-active role in creating new features, regular code refactoring, fixing bugs, and tuning algorithms to ensure, and improve, high performance at all times. It is of the utmost importance that the PHP based system, is constantly developed to keep in sync with ever changing new technologies, not only for obvious security reasons, but also to maintain state of the art services, which attracts high paying cliental. </p>
        <button class="btn deep-orange read-more-button"><i class="material-icons right">expand_more</i>Read More</button>
        <div class="read-more-content">
            <p class="left-align light">From a mere idea, to a fully functioning product, as a full stack developer my skills enable me to take the ideas from the drawing board, and progress them into a finished, high-spec product.   </p>
            <p class="left-align light">I pride myself with always writing clean and expressive code, I do this by following concepts such as: OOP, The Gang of Four design patterns and MVC. Most of my work is done in the Laravel framework, however, I also write non-framework based code.</p>
            <p class="left-align light">Databases, the heart of every company’s operations, are commodities which I myself have single-handedly designed, keeping in mind the relationships between data, scalability, data integrity and also flexibility, which allows the client to make changes to the original design. </p>
            <p class="left-align light">I’m fully accustomed to using Git for source control to track, both mine and my teams, changes to the system. In regards to the sysadmin side, I have experience with both Apache and NGINX web servers running on a Linux distro (both CentOS and Debian). I have crafted configuration files and feel very comfortable within the CLI. I also have a fair amount of experience with JavaScript along with the jQuery library and more recently the Vue.js framework.</p>
            <p class="left-align light">Although my domain and main area of interest is not concerned with the front-end, I have, in spite of this, created all the front-ends for my projects, most of which utilise the Bootstrap framework while bespoke styling has been implemented through a pre-compile such as SASS. By doing this, I have gained intermediate graphic skills, such as creating vector graphics, and image editing, these skills which I continue to develop on a daily basis. </p>
            <p class="left-align light">Although my role as a PHP developer has massively developed me in the I.T world, I feel confident in saying that the majority of my knowledge, has been gained from countless hours put into books, blogs, forums and videos. </p>
            <p class="left-align light">I am a self-taught developer with an unstoppable drive, nothing will hold me back, and I continuously strive to push my boundaries, in order to excel myself in both my domain and my personal abilities.</p>
        </div>
    @endcomponent

    @component('layouts.components.parallax-row', ['imageSrc' => '/img/banners/banner_02.jpg'])
        <h5 class="header col s12 light">Is an off-the-shelf package not meeting your business needs? I'll hand craft a bespoke solution for you</h5>
    @endcomponent

    @component('layouts.components.text-row', ['title' => 'Portfolio & Case Studies'])
        <div class="row">
            <div class="col s12">
                @component('layouts.components.card', [
                    'title'       => 'Letting Management System',
                    'galleryId'   => '#letting-management-system-gallery-modal',
                    'caseStudyId' => '#letting-management-system-case-study-modal',
                    'imageSrc'    => '/img/portfolio/letting-management-system/screenshot_01.png'
                ])
                    <p>When Big Blue Lettings came to me, they only wanted a simple application which helped them log payments they received. This quickly turned into an entire system which is used to operate a majority of their business.</p>
                @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                @component('layouts.components.card', [
                    'title'       => 'Stock Check',
                    'galleryId'   => '#stock-check-gallery-modal',
                    'caseStudyId' => '#stock-check-case-study-modal',
                    'imageSrc'    => '/img/portfolio/stock-check/screenshot_01.png'
                ])
                    <p>This was a fun little side project which allowed to experiment with new technologies and ideas. I came up with the idea of a web app which would check the stock of an item at regular intervals and send a notification to the user once it was back in stock.</p>
                @endcomponent
            </div>
        </div>
    @endcomponent

    @component('layouts.components.case-study-modal', ['id' => 'letting-management-system-case-study-modal'])
        @slot('title')
            Letting Management System
        @endslot

        @slot('theProblem')
            <p>The original system was a collection of spreadsheets storing all the data needed and utilising macros to perform multi-step tasks. Although it worked, it was not efficient and it also limited access to only 1 user at a time.</p>
            <p>When Big Blue Lettings came to me, they only wanted a simple application which helped them log payments they received. This quickly turned into a massive system which is used to operate the entirety of their business.</p>
            <p>Upon several meetings, we concluded that the application would need to cover the following areas:</p>
            <ul class="browser-default">
                <li>Financial overviews</li>
                <li>Managing landlords, properties, tenancies, tenants and guarantors</li>
                <li>Logging and distributing received payments</li>
                <li>Logging outgoing payments</li>
                <li>Generating statements</li>
                <li>Generating reports</li>
                <li>Admin only access for specific actions</li>
            </ul>
        @endslot

        @slot('theDesignAndImplementation')
            <p>Once in use, this application would be crucial for the business to operate correctly. Therefore, I started with the database and spent a lot of time figuring out how everything will relate to one another.</p>
            <p>To begin this process I started with pen and paper to mockup designs and theories. Whilst still in the prototype stage, we quickly discovered the current database model was not fitting well with the business needs. After some refactoring, a much more accurate representation was developed and worked perfectly.</p>
            <p>I then transferred this design to the computer and created a database diagram which has been extremely helpful throughout the entire development process.</p>
            <p>Along with this diagram, I also kept several documents in paper format. I pinned these on a board hung above my desk as I feel it encourages new ideas and better concentration.</p>
            <p>Once the database was set up, I started working on the back end, which runs on the Laravel framework. I ensured all routes and responses were set up correctly whilst trying to keep the application as RESTful as possible.</p>
            <p>A lot has been incorporated into this web application and I find it suitable to list some of the key features:</p>
            <ul class="browser-default">
                <li>Managing records for landlords, properties, tenancies, tenants, bank details and guarantors</li>
                <li>Logging received payments and allocating them to the tenant that made the payment</li>
                <li>Producing statements and receipts in .pdf format to be printed out or emailed</li>
                <li>Automatically send emails to tenants when they have a payment due for the next day</li>
                <li>Automatically apply late fees to tenants who have not paid their rent on time</li>
                <li>Log and keep track of tasks that need to be completed</li>
                <li>A notes section in which each user can contribute to for clear communication</li>
                <li>Revoked access to certain areas and actions for non admin users</li>
                <li>Automatic daily backups of the database and statements</li>
                <li>Graphs showing payments data</li>
            </ul>
            <p>The visual layout implements heavy use of the Bootstrap framework as it enabled me to quickly convey ideas. Using Laravel's templating engine: Blade, I was able to follow strict MVC concepts and keep the views as logic free as possible.</p>
            <p>A key element whilst developing this application was to keep everything as simple as possible for the user. I had regular meetings with Big Blue Lettings and this ensured that progress was always heading in the right direction.</p>
        @endslot

        @slot('theOutcome')
            <p>The application has been successfully deployed and is relied upon for operating the entirety of their business. It is completely self manageable and I am not required for any part of running it. It is completely flexible and robust, allowing for easy implementation of new components.</p>
            <p>I am still working with Big Blue Lettings and discussing new ideas for further implementation.</p>
            <p>In summary, it has exceeded every expectation and meets every requirement set. We are both very happy and satisfied with the outcome.</p>
        @endslot
    @endcomponent

    @component('layouts.components.gallery-modal', ['id' => 'letting-management-system-gallery-modal'])
        <li><img src="/img/portfolio/letting-management-system/screenshot_01.png"></li>
        <li><img src="/img/portfolio/letting-management-system/screenshot_02.png"></li>
        <li><img src="/img/portfolio/letting-management-system/screenshot_03.png"></li>
    @endcomponent

    @component('layouts.components.case-study-modal', ['id' => 'stock-check-case-study-modal'])
        @slot('title')
            Stock Check
        @endslot

        @slot('theProblem')
            <p>This was a fun little side project which allowed to experiment with new technologies and ideas.</p>
            <p>My partner was complaining that she was after a certain piece of clothing for a while, however whenever the retailer (ASOS) had it in stock, it was sold out again within a matter of hours.</p>
            <p>There was no system in place on the retailers website to reserve the item once it cam back in stock, so it was a matter of: first come, first serve.</p>
            <p>I then came up with the idea of a web app which would check the stock at regular intervals and send a notification once it was back in stock.</p>
        @endslot

        @slot('theDesignAndImplementation')
            <p>To start with I check if the retailer offered an API to quickly get a JSON response based on a query string. ASOS did happen to offer one, but only to certified developers on their developer programme. Looking into this further, it seemed they no longer supported this as they haven’t seemed to respond to develop requests in months.</p>
            <p>I then checked to see if I could simply perform a GET request to the web page showing the item, and parse the HTML select element to get the sizes in stock. The problem I encountered	however, was that the select options where dynamically populates with an internal Ajax request.</p>
            <p>At this point I realised, I somehow needed to get the rendered DOM itself as apposed to the actual HTML source of the file.</p>
            <p>I came across PhantomJS which is a headless WebKit with a main purpose of running tests. I used this client to request the webpage which then ran the Ajax requests to populate the select options with the sizes in stock.</p>
            <p>The user could now type in a name for the item they where interested in so they can easily remember what it was; they then entered the URL of the item on the retailers website; at this point, using Vue.js, an Ajax request fired to my server which used PhantomJS to parse the rendered DOM and return which sizes where available to choose from.</p>
            <p>The options contained textual data to inform if that particular size was out of stock. I used this information by running a job every 10 minutes to reload the webpage in PhantomJS and check if the out of stock text was no longer there, meaning the item was in stock. If the item was back in stock, an email was sent to the user with a direct link to purchase the item.</p>
        @endslot

        @slot('theOutcome')
            <p>The application fully works and is still used to this day. It allowed me to experiment with new technologies which I now feel comfortable using in the future.</p>
        @endslot
    @endcomponent

    @component('layouts.components.gallery-modal', ['id' => 'stock-check-gallery-modal'])
        <li><img src="/img/portfolio/stock-check/screenshot_01.png"></li>
        <li><img src="/img/portfolio/stock-check/screenshot_02.png"></li>
        <li><img src="/img/portfolio/stock-check/screenshot_03.png"></li>
    @endcomponent
@endsection
