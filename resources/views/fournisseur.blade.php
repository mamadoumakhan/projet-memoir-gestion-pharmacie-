<!DOCTYPE html>
<html lang="en">

    @include('dashboard/head')

<body id="page-top" class=" bg-gray-800">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('dashboard/sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('dashboard/navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4"> 
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-fournisseur">
                  <i class="fas fa-plus"></i> Ajouter fournisseur
              </button>
          </div>
          <!-- Content Row -->

            <div class="row">
                
                <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4 border-left-success border-bottom-success">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-success">fournisseur</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover display" id="" width="100%" cellspacing="0">
                                  <thead>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>Nom Fournisseur</th>
                                          <th>Email Fournisseur</th>
                                          <th>Telephone Fournisseur</th>
                                          <th>Modifier</th>
                                          <th>supprimer</th>
                                          <th>mettre en pause</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($fournisseurs as $fournisseur)
                                    <tr style="font-size:13px;font-family:sans-serif;">
                                      <td>{{$fournisseur->nom_fournisseur}}</td>
                                      <td>{{$fournisseur->email_fournisseur}}</td>
                                      <td>{{$fournisseur->telephone_fournisseur}}</td>
                                      
                                      <td>
                                        <a href="{{route('editfournisseur',['id_fournisseur'=>$fournisseur->id_fournisseur])}}" data-toggle="modal" data-target="#edit-fournisseur{{$fournisseur->id_fournisseur}}"
                                         class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="tooltip" title="Edit"> 
                                             <i class="fas fa-pen"></i>
                                         </a>  
                                       </td>
                                       <td>
                                        <a href="{{route('deletefournisseur',['id_fournisseur'=>$fournisseur->id_fournisseur])}} " onclick="return confirm('voullez vous vraiment supprimer');" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" style="font-size:13px;">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                        </a>
                                        </td>
                                        <td>
                                          <a href="#" data-toggle="tooltip" title="Edit">
                                          <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" style="font-size:13px;">
                                              <i class="fas fa-check-square" color="green"></i>
                                          </button>
                                          </a>
                                          </td>

                                  {{-- debut edit fournisseur --}}
                                  <div class="modal fade" id="edit-fournisseur{{$fournisseur->id_fournisseur}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modifier Fournisseur</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                                      <div class="modal-body">
                                                    <form role="form" method="POST" action="{{route('updatefournisseur',[$fournisseur->id_fournisseur])}}">
                                                      @csrf
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="form-group col-md-8">
                                                                <label for="Complete Name">Nom Fournisseur</label>
                                                                <input type="text"name="nom_fournisseur" value="{{$fournisseur->nom_fournisseur}}" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="Email">Email</label>
                                                                <input type="Email"name="email_fournisseur"value="{{$fournisseur->email_fournisseur}}" class="form-control" id="Email" placeholder="Email" required>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="Contact Number">Contact Number</label>
                                                                <input type="number"name="telephone_fournisseur"value="{{$fournisseur->telephone_fournisseur}}" class="form-control" id="Contact Number" placeholder="Contact Number" required>
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
                                  {{-- fin edit fournisseur --}}



                                    @endforeach 
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
            
              </div>    
                
            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    <div class="modal fade" id="add-fournisseur">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter fournisseur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                         
            
                    <form role="form" method="POST" action="{{route('creer_fournisseur')}}">
                      @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="Complete Name">Nom fournisseur</label>
                                <input type="text" class="form-control" id="nom_fournisseur" name="nom_fournisseur" placeholder="Nom" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Email">Email</label>
                                <input type="Email" class="form-control" id="email_fournisseur" name="email_fournisseur" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Zipcode">Telephone</label>
                                <input type="number" class="form-control" id="telephone_fournisseur" name="telephone_fournisseur" placeholder="Telephone" required>
                            </div>
                        </div >
                        <button type="submit" class="btn btn-success">Valider</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button> 
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
<div class="modal fade" id="edit-customer">>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modifier Client</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
        
              </div>
            </div>
            <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

        @include('dashboard/footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
        
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="login/login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  

@include('dashboard/scripts')
<script>
    $(document).ready(function() {
    $('table.display').DataTable();
} );
</script>
</body>

</html>
