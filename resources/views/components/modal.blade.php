@props(['modalTitle'=>'', 'modelId'=>'', 'modalSize'=>''])
<!-- Modal -->
<div class="modal fade" id="{{ $modelId }}" data-backdrop="static"  data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $modalTitle }}</h5>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        <div class="modal-body">
            {{ $slot }}
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>