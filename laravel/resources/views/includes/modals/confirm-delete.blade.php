<div class="modal fade" style="display: none;" id="dataConfirmModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Confirmation</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12-xs text-center">
            <p id="modalBodyText"></p>
            <a id="dataConfirmOK" type="button" class="btn btn-success btn-md">Oui</a>
            <button type="button" data-dismiss="modal" class="btn btn-danger btn-md">Non</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
$(function() {
	$('a[data-confirm]').click(function(ev) {
		var href = $(this).attr('href');

		$('#dataConfirmModal').find('#modalBodyText').text("Voulez vous vraiment supprimer " + $(this).attr('data-confirm') + " ?");
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});

		return false;
	});
});
</script>
