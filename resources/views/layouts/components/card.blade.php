<div class="card horizontal hide-on-med-and-down">
    @isset($alternate)
        <div class="card-image waves-effect waves-block waves-light">
            <a href="{{ $galleryId }}">
                <img src="{{ $imageSrc }}">
            </a>
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <h4>{{ $title }}</h4>
                {!! $slot !!}
            </div>
            <div class="card-action">
                <a class="btn waves-effect waves-light" href="{{ $caseStudyId }}"><i class="material-icons right">folder</i>Case Study</a>
                <a class="btn waves-effect waves-light blue-grey" href="{{ $galleryId }}"><i class="material-icons right">photo_camera</i>Gallery</a>
            </div>
        </div>
    @else
        <div class="card-stacked">
            <div class="card-content">
                <h4>{{ $title }}</h4>
                {!! $slot !!}
            </div>
            <div class="card-action">
                <a class="btn waves-effect waves-light" href="{{ $caseStudyId }}"><i class="material-icons right">folder</i>Case Study</a>
                <a class="btn waves-effect waves-light blue-grey" href="{{ $galleryId }}"><i class="material-icons right">photo_camera</i>Gallery</a>
            </div>
        </div>
        <div class="card-image waves-effect waves-block waves-light">
            <a href="{{ $galleryId }}">
                <img src="{{ $imageSrc }}">
            </a>
        </div>
    @endisset
</div>

<div class="card hide-on-large-only">
    <div class="card-image waves-effect waves-block waves-light">
        <a href="{{ $galleryId }}">
            <img src="{{ $imageSrc }}">
        </a>
    </div>
    <div class="card-stacked">
        <div class="card-content">
            <h4>{{ $title }}</h4>
            {!! $slot !!}
        </div>
        <div class="card-action">
            <a class="btn waves-effect waves-light" href="{{ $caseStudyId }}"><i class="material-icons right">folder</i>Case Study</a>
            <a class="btn waves-effect waves-light blue-grey" href="{{ $galleryId }}"><i class="material-icons right">photo_camera</i>Gallery</a>
        </div>
    </div>
</div>
