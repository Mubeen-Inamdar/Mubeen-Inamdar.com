<div id="{{ $id }}" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="slider fullscreen">
            <ul class="slides">
                {!! $slot !!}
            </ul>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat">Close</a>
    </div>
</div>
