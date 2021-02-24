{{-- <!DOCTYPE html>
<html lang="en">

@include('dashboard/head')

<body id="page-top" class=" bg-gray-800"> --}}
  <!--a revoir -->
  {{-- @if (session()->has('sms'))
  <div class="notification is-success">
  
      {{ session('sms') }}
 </div>
  @endif --}}
  <!-- Page Wrapper -->
  {{-- <div id="wrapper"> --}}

    <!-- Sidebar -->
    {{-- @include('dashboard/sidebar') --}}
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    {{-- <div id="content-wrapper" class="d-flex flex-column"> --}}

      <!-- Main Content -->
      {{-- <div id="content"> --}}

        <!-- Topbar -->
        {{-- @include('dashboard/navbar') --}}
        {{-- @include('produit/add') --}}
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        {{-- <div class="container-fluid"> --}}

          <!-- Page Heading -->
          {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> 
            
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-produit">
                  <i class="fas fa-plus"></i> Ajout produit
              </button>
            
          </div>
          --}}
         
          <!-- Content Row -->

            {{-- <div class="row">
                
                <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4 border-left-success border-bottom-success">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-success">Produit</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover display" id="" width="100%" cellspacing="0">
                                  <thead>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>nom</th>
                                          <th>date_peremption</th>
                                          <th>etat</th>
                                          <th>Quantite</th>
                                          <th>Categorie</th> 
                                          <th>modifier</th>
                                          <th>supprimer</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($produits as $produit)
                                    <tr style="font-size:13px;font-family:sans-serif;">
                                      <th>{{$produit->nom}}</th>
                                      <th>{{$produit->date_peremption}}</th>
                                      <th>{{$produit->etat}}</th>
                                      <th>{{$produit->quantite}}</th>
                                      <th>{{$produit->nom_categorie}}</th>
                                      {{-- <th>
                                      <a href="#" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-produit" style="font-size:13px;">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                      </a>
                                      </th>
                                      <th>
                                      <a href="#" data-toggle="tooltip" title="Edit">
                                      <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-produit" style="font-size:13px;">
                                          <i class="fas fa-cut"></i>
                                      </button>
                                      </a>
                                      </th> --}}
                                      {{-- <td><a href="{{route('editproduit',[$produit->id_produit])}}">editer</a></td>
                                      <td><a href="{{route('deleteproduit',[$produit->id_produit])}}" onclick="return confirm('voullez vous supprimer');">supprimer</a></td>
                                  --}}

                                      {{-- formulaire d'edution produit --}}
                                      {{-- <div class="modal fade" id="edit-produit">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit produit</h4>
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
                                                        <form role="form" method="POST" action="{{route('updateproduit')}}">
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
                                      {{-- fin formulaire d'edution --}}
                                    {{-- @endforeach
                                             
                                          </th>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
            
              </div>    
                
            </div>
        </div>
        <!-- /.container-fluid -->

      </div> --}}
      <!-- End of Main Content -->

      <!-- Footer -->
         
      {{-- @include('dashboard/modals')
          @include('dashboard/footer')
      <!-- End of Footer --> --}}

    {{-- </div> --}}
    <!-- End of Content Wrapper -->
        
  {{-- </div> --}}
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  {{-- <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> --}}

  <!-- Logout Modal-->
  {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../login/login.php">Logout</a>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- @include('dashboard/scripts') --}}
{{-- <script>
    $(document).ready(function() {
    $('table.display').DataTable();
} );
    </script>
</body>

</html> --}}