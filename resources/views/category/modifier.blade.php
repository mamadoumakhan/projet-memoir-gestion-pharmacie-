<div class="modal fade" id="edit-category">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modifier Categorie</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form"> 
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Name" required>
                            </div>
                        </div >
                        {{-- @method('PUT')
                        @csrf() --}}
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>