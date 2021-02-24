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
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-stock">
                  <i class="fas fa-plus"></i> Ajouter stock
              </button>
          </div>
          <!-- Content Row -->

            <div class="row">
                
                <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4 border-left-success border-bottom-success">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-success">stock</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover display" id="" width="100%" cellspacing="0">
                                  <thead>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>Nom stock</th>   
                                          <th>Modifier</th>
                                          <th>supprimer</th> 
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($stocks as $stock)
                                    <tr style="font-size:13px;font-family:sans-serif;">
                                      <td>{{$stock->nom_stock}}</td>
                                      <td>
                                        <a href="{{route('editstock',['id_stock'=>$stock->id_stock])}}" data-toggle="modal" data-target="#edit-stock{{$stock->id_stock}}"
                                         class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="tooltip" title="Edit"> 
                                             <i class="fas fa-pen"></i>
                                         </a>  
                                       </td>
                                       <td>
                                        <a href="{{route('deletestock',['id_stock'=>$stock->id_stock])}} " onclick="return confirm('voullez vous vraiment supprimer');" data-toggle="tooltip" title="Edit">
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

                                  {{-- debut edit stock --}}
                                  <div class="modal fade" id="edit-stock{{$stock->id_stock}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modifier stock</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                                    <div class="modal-body">
                                                    <form role="form" method="POST" action="{{route('updatestock',[$stock->id_stock])}}">
                                                      @csrf
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="form-group col-md-8">
                                                                <label for="Complete Name">Nom stock</label>
                                                                <input type="text"name="nom_stock" value="{{$stock->nom_stock}}" class="form-control" id="Complete Name" placeholder="Comlete Name" required>
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
                                  {{-- fin edit stock --}}
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
<div class="modal fade" id="add-stock">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter stock</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                         
            
                    <form role="form" method="POST" action="{{route('creer_stock')}}">
                      @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="Complete Name">Nom stock</label>
                                <input type="text" class="form-control" id="nom_stock" name="nom_stock" placeholder="Nom" required>
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
