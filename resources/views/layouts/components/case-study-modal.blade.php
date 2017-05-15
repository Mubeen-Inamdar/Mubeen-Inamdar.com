<div id="{{ $id }}" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h3 class="center">{{ $title }}</h3>

        <h4 class="center">The Problem</h4>
        {!! $theProblem !!}

        <h4 class="center">The Design and Implementation</h4>
        {!! $theDesignAndImplementation !!}

        <h4 class="center">The Outcome</h4>
        {!! $theOutcome !!}
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat ">Close</a>
    </div>
</div>
