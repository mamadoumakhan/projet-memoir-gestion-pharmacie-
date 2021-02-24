<div class="modal fade" id="edit-stock">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">edit stock</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(isset($confirmation))
                    @if($confirmation==1)
                         <div class="alert alert-success">stock ajouter avec success</div>
                   
                    @else
                         <div class="alert alert-danger">stock non ajouter</div>
                    @endif
                 @endif
                    <form role="form" method="POST"  action="{{route('updatestock')}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" value="{{$stock->nom_stock}}" name="nom_stock" class="form-control" id="Name" placeholder="Name" required>
                            </div>
                           
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <textarea type="text"  value="{{$stock->description_stock}}" name="description_stock" class="form-control" id="Description" placeholder="Description" required></textarea>
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
                        <button type="button"  href="{{route('getAllstock')}}" class="btn btn-default" data-dismiss="modal">Cancel</button> 
                    </div>
                    <!-- /.card-body -->
                    
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>