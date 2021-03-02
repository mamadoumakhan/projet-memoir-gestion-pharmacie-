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
                                <input type="text" class="form-control" id="Name" name="nom_produit" placeholder="Name" required>
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
                            {{-- <div class="form-group col-md-12">
                                 <label for="categorie">Category</label>
                                 <select class="form-control" id="categorie" name="id_categorie">
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


<div class="modal fade" id="add-customer">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter Agent</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" method="POST" action="">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">nom</label>
                                <input type="text" class="form-control" id="Name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Amount">prenom</label>
                                <input class="form-control"type="text" name="currency-field" id="currency-field" pattern="^\P\d{1,3}(,\d{3})*(\.\d+)?P" value="" data-type="currency" placeholder="P 0.00">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Description">email</label>
                                <textarea type="text" class="form-control" id="Description" placeholder="Description" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">telephone</label>
                                <input type="number" class="form-control" id="Quantity" placeholder="Quantity" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Quantity">etat</label>
                                <input type="text" class="form-control" id="Quantity" placeholder="Quantity" required>
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



<!-- /.modal add-jewelry -->
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
<!-- /.modal edit-jewelry -->
{{-- <div class="modal fade" id="add-category">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
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

<div class="modal fade" id="add-category">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter Categorie</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" action="{{route('creer_categorie')}}" method="POST">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="nom_categorie" id="Name" placeholder="Name" required>
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
<!-- /.modal add-category -->
{{-- <div class="modal fade" id="edit-category{{$categorie->id_categorie}}">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name"value="{{$categorie->nom_categorie}}" placeholder="Name" required>
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
<!-- /.modal edit-category -->
<div class="modal fade" id="add-sales">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Sales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" method="POST">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Customer">Customer</label>
                                <select class="form-control">
                                    <option>Michael</option>
                                    <option>Fred</option>
                                </select>
                            </div>
                             <div class="form-group col-md-12">
                                 <label for="Select Item">Select Item</label>
                                <div class="input-group">
                                    <select class="form-control bg-light" aria-describedby="basic-addon2"  id="scripts" name="scripts">
                                        <option value="60557" >Saphire</option>
                                    <option value="60058" >Emerald</option>
                                    </select>
                                    <div class="input-group-append">
                                        <input type="button" class="btn btn-info btn-block form-control" id="showVal" value="Select" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Item">Price</label>
                            <input class="form-control" type="text" name="display" id="input1"  readonly/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Quantity">Quantity</label>
                                <input class="form-control" id="input2" type="number" oninput="calculate();" />
                            </div>
                           
                            <div class="form-group col-md-12">
                                <label for="Total">Total</label>
                                 <input type="text" name="sum" id="result" class="form-control" pattern="^\P\d{1,3}(,\d{3})*(\.\d+)?P" data-type="currency" readonly />
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
<!-- /.modal add-sales --> 
<div class="modal fade" id="edit-sales">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Customer">Customer</label>
                                <select class="form-control">
                                    <option>Michael</option>
                                    <option>Fred</option>
                                </select>
                            </div><div class="form-group col-md-12">
                                 <label for="Select Item">Select Item</label>
                                <div class="input-group">
                                    <select class="form-control bg-light" aria-describedby="basic-addon2"  id="scripts2" name="scripts2">
                                        <option value="60557" >Saphire</option>
                                    <option value="60058" >Emerald</option>
                                    </select>
                                    <div class="input-group-append">
                                        <input type="button" class="btn btn-info btn-block form-control" id="showVal2" value="Select" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Item">Price</label>
                            <input class="form-control" type="text" name="display" id="inputs1"  readonly/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Quantity">Quantity</label>
                                <input class="form-control" id="inputs2" type="number" oninput="calculate2();" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Total">Total</label>
                                 <input type="text" name="sum" id="results" class="form-control" pattern="^\P\d{1,3}(,\d{3})*(\.\d+)?P" data-type="currency" readonly />
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
<!-- /.modal edit-sales -->
<div class="modal fade" id="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter fournisseur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form role="form" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="Complete Name"> nom fournisseur</label>
                                <input type="text"  name="nom_fournisseur" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Email">Email fournisseur</label>
                                <input type="Email" name="email_fournisseur" class="form-control" id="Email" placeholder="Email" required>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="Contact Number">Contact fournisseur</label>
                                <input type="number"  name="telephone_fournisseur" class="form-control" id="Contact Number" placeholder="Contact Number" required>
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
<!-- /.modal add-customer -->

{{-- ajout admin --}}
<!-- /.modal edit-sales -->
<div class="modal fade" id="add-customer">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" action="" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="Complete Name"> nom du admin</label>
                                <input type="text"  name="nom_admin" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Complete Name"> prenom du admin</label>
                                <input type="text"  name="prenom_admin" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Email">Email</label>
                                <input type="Email" name="email_admin" class="form-control" id="Email" placeholder="Email" required>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="Contact Number">Contact admin</label>
                                <input type="number"  name="telephone_admin" class="form-control" id="Contact Number" placeholder="Contact Number" required>
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
<!-- /.modal add-customer -->
{{-- fin ajout admin --}}

<div class="modal fade" id="edit-customer">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Customer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="Complete Name">Complete Name</label>
                                <input type="text" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Email">Email</label>
                                <input type="Email" class="form-control" id="Email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Zipcode">Zipcode</label>
                                <input type="text" class="form-control" id="Zipcode" placeholder="Zipcode" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Billing Address">Billing Address</label>
                                <input type="text" class="form-control" id="Billing Address" placeholder="Billing Address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Contact Number">Contact Number</label>
                                <input type="text" class="form-control" id="Contact Number" placeholder="Contact Number" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="City">City</label>
                                <input type="text" class="form-control" id="City" placeholder="City" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Province">Province</label>
                                <input type="text" class="form-control" id="Province" placeholder="Province" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="Username" placeholder="Username" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password" required>
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
<!-- /.modal edit-customer -->

{{--  --}}
<!-- /.modal edit-sales -->
<div class="modal fade" id="add-customer">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Customer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="Complete Name">Complete Name</label>
                                <input type="text" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Email">Email</label>
                                <input type="Email" class="form-control" id="Email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Zipcode">Zipcode</label>
                                <input type="text" class="form-control" id="Zipcode" placeholder="Zipcode" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Billing Address">Billing Address</label>
                                <input type="text" class="form-control" id="Billing Address" placeholder="Billing Address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Contact Number">Contact Number</label>
                                <input type="text" class="form-control" id="Contact Number" placeholder="Contact Number" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="City">City</label>
                                <input type="text" class="form-control" id="City" placeholder="City" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Province">Province</label>
                                <input type="text" class="form-control" id="Province" placeholder="Province" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="Username" placeholder="Username" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password" required>
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
<!-- /.modal add-customer -->
<div class="modal fade" id="edit-customer">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Customer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="Complete Name">Complete Name</label>
                                <input type="text" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Email">Email</label>
                                <input type="Email" class="form-control" id="Email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Zipcode">Zipcode</label>
                                <input type="text" class="form-control" id="Zipcode" placeholder="Zipcode" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="Billing Address">Billing Address</label>
                                <input type="text" class="form-control" id="Billing Address" placeholder="Billing Address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Contact Number">Contact Number</label>
                                <input type="text" class="form-control" id="Contact Number" placeholder="Contact Number" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="City">City</label>
                                <input type="text" class="form-control" id="City" placeholder="City" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Province">Province</label>
                                <input type="text" class="form-control" id="Province" placeholder="Province" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="Username" placeholder="Username" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password" required>
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
<!-- /.modal edit-customer -->
{{--  --}}
<div class="modal fade" id="add-user">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Complete Name">Complete Name</label>
                                <input type="text" class="form-control" id="Complete Name" placeholder="Complete Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact Number">Contact Number</label>
                                <input type="text" class="form-control" id="Contact Number" placeholder="Contact Number" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="User Type">User Type</label>
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
<!-- /.modal add-user -->
<div class="modal fade" id="edit-user">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="User Name">User Name</label>
                                <input type="text" class="form-control" id="User Name" placeholder="User Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input type="text" class="form-control" id="Password" placeholder="Password" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Complete Name">Complete Name</label>
                                <input type="text" class="form-control" id="Complete Name" placeholder="Complete Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Contact Number">Contact Number</label>
                                <input type="text" class="form-control" id="Contact Number" placeholder="Contact Number" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="User Type">User Type</label>
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
<!-- /.modal edit-user -->