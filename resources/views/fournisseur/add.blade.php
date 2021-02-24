<div class="modal fade" id="">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter fournisseur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" method="POST" action="{{route('persistefournisseur')}}">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">nom</label>
                                <input type="text" class="form-control" name="nom_fournisseur" id="Name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">email</label>
                                <textarea type="mail" class="form-control" name="email_fournisseur" id="Description" placeholder="Description" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">telephone</label>
                                <input type="number" class="form-control" name="telephone_fournisseur" id="Quantity" placeholder="Quantity" required>
                            </div>
                            {{-- <div class="form-group col-md-12">
                                <label for="Category">Category</label>
                                <select class="form-control">
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                </select>
                            </div> --}}
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