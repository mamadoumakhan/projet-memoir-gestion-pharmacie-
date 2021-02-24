<div class="modal fade" id="add-tableau">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter tableau</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                           
                    @if(isset($confirmation))
                    @if($confirmation==1)
                         <div class="alert alert-success">tableau ajouter avec success</div>
                   
                    @else
                         <div class="alert alert-danger">tableau non ajouter</div>
                    @endif 
                 @endif
                    <form role="form" method="POST" action="{{route('persistetableau')}}">
                        {{-- {{route('creer_tableau')}} --}}
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">nom</label>
                                <input type="text" class="form-control" id="Name" name="nom_tableau" placeholder="Name" required>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="Description">Description</label>
                                <textarea type="text" class="form-control" name="description_tableau" id="Description" placeholder="etat" required></textarea>
                            </div>
                            
                            {{-- <div class="form-group col-md-12">
                                <label for="Category">Category</label>
                                <select class="form-control" name="id_categorie">
                                  @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id_categorie}}">{{ $categorie->nom_categorie }}</option>
                                    @endforeach
                                    
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

<!-- /.modal add-jewelry -->