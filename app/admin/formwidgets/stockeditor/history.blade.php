<div
    id="{{ $this->getId('form-modal-content') }}"
    class="modal-dialog modal-lg"
    role="document"
>
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{ $formTitle ? lang($formTitle) : '' }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        </div>
        <div class="modal-body">
            {!! $formWidget->render() !!}
        </div>
    </div>
</div>
