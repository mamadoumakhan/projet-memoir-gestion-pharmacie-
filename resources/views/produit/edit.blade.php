<div class="modal fade" id="edit-jewelry">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Jewelry</h4>
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
                            <div class="form-group col-md-12">
                                <label for="Amount">Amount</label>
                                <input class="form-control"type="text" name="currency-field" id="currency-field" pattern="^\P\d{1,3}(,\d{3})*(\.\d+)?P" value="" data-type="currency" placeholder="P 0.00">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <textarea type="text" class="form-control" id="Description" placeholder="Description" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">Quantity</label>
                                <input type="number" class="form-control" id="Quantity" placeholder="Quantity" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Category">Category</label>
                                <select class="form-control">
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                </select>
                            </div>
                        </div >
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