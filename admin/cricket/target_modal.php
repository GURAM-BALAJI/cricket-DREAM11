<!-- Not Activate -->
<div class="modal fade" id="suspend">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title suspend_val"><b></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="target_suspend.php">
                <input type="hidden" class="cricket_id" name="id">
                <div class="text-center">
                    <p>SUSPEND CRICKET</p>
                    <h2 class="bold cricket_name"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="suspend"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
        </div>
    </div>
</div> 