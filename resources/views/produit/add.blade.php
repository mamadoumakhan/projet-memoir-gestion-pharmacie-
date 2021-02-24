{{-- <div class="modal fade" id="add-produit">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter Produit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                                  
                    @if(isset($confirmation))
                    @if($confirmation==1)
                         <div class="alert alert-success">produit ajouter avec success</div>
                   
                    @else
                         <div class="alert alert-danger">produit non ajouter</div>
                    @endif 
                 @endif
                    <form role="form" method="POST" action="{{route('persisteproduit')}}">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">nom</label>
                                <input type="text" class="form-control" id="Name" name="nom" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Amount">date peremption</label>
                                <input class="form-control"type="date" name="date_peremption" id="currency-field" pattern="^\P\d{1,3}(,\d{3})*(\.\d+)?P" value="" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">etat</label>
                                <textarea type="text" class="form-control" name="etat" id="Description" placeholder="etat" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">Quantite</label>
                                <input type="number" class="form-control" name="quantite" id="Quantite" placeholder="Quantity" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Category">Categorie</label>
                                <select class="form-control"id="categorie" name="categorie">
                                    @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id_categorie}}">{{ $categorie->nom_categorie }}</option>
                                    @endforeach 
                                    
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
</div> --}}

<div class="modal fade" id="add-produit">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter Produits</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" method="POST" action="{{route('creer_produit')}}">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">nom</label>
                                <input type="text" class="form-control" id="Name" name="nom" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Amount">date peremption</label>
                                <input class="form-control"type="date" name="date_peremption" id="currency-field" pattern="^\P\d{1,3}(,\d{3})*(\.\d+)?P" value="" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">etat</label>
                                <textarea type="text" class="form-control" name="etat" id="Description" placeholder="etat" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">Quantite</label>
                                <input type="number" class="form-control" name="quantite" id="Quantite" placeholder="Quantity" required>
                            </div>
                            <div class="form-group col-md-12">
                                 <label for="categorie">Category</label>
                                 <select class="form-control" id="categorie" name="id_categorie">
                                     @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id_categorie}}">{{ $categorie->nom_categorie }}</option>
                                    @endforeach 
                                    
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

