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
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-notice">
                  <i class="fas fa-plus"></i> Ajouter notice
              </button>
          </div>
          <!-- Content Row -->

            <div class="row">
                
                <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4 border-left-success border-bottom-success">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-success">notice</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-hover display" id="" width="100%" cellspacing="0">
                                  <thead>
                                      <tr style="font-size:13px;font-family:sans-serif;">
                                          <th>Prix Session</th>
                                          <th>Prix Public</th> 
                                          <th>TVA</th>   
                                          <th>Code Barre</th>
                                          <th>Posologie</th> 
                                          <th>Effet Indesirable</th>   
                                          <th>Interaction Medicamenteuse</th>
                                          <th>grossesse</th> 
                                          <th> Allaitement</th>   
                                          <th>Modifier</th>
                                          <th>supprimer</th> 
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($notices as $notice)
                                    <tr style="font-size:13px;font-family:sans-serif;">
                                      <td>{{$notice->prix_session}}</td>
                                      <td>{{$notice->prix_public}}</td>
                                      <td>{{$notice->tva}}</td>
                                      <td>{{$notice->code_barre}}</td>
                                      <td>{{$notice->posologie}}</td>
                                      <td>{{$notice->effet_indesirable}}</td>
                                      <td>{{$notice->interdiction_medicamenteuse}}</td>
                                      <td>{{$notice->grossesse}}</td>
                                      <td>{{$notice->Allaitement}}</td>
                                      <td>
                                        <a href="{{route('editnotice',['id_notice'=>$notice->id_notice])}}" data-toggle="modal" data-target="#edit-notice{{$notice->id_notice}}"
                                         class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="tooltip" title="Edit"> 
                                             <i class="fas fa-pen"></i>
                                         </a>  
                                       </td>
                                       <td>
                                        <a href="{{route('deletenotice',['id_notice'=>$notice->id_notice])}} " onclick="return confirm('voullez vous vraiment supprimer');" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" style="font-size:13px;">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                        </a>
                                        </td>
                                       

                                  {{-- debut edit notice --}}
                                  <div class="modal fade" id="edit-notice{{$notice->id_notice}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modifier notice</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                                    <div class="modal-body">
                                                    <form role="form" method="POST" action="{{route('updatenotice',[$notice->id_notice])}}">
                                                      @csrf
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">prix Session</label>
                                                                <input type="number"name="prix_session" value="{{$notice->prix_session}}" class="form-control" id="Complete Name" placeholder="1000fcfa" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">prix public</label>
                                                                <input type="number"name="prix_public" value="{{$notice->prix_public}}" class="form-control" id="Complete Name" placeholder="3000fcfa" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">tva</label>
                                                                <input type="text"name="tva" value="{{$notice->tva}}" class="form-control" id="Complete Name" placeholder="18/100" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">code barre</label>
                                                                <input type="text"name="nom_notice" value="{{$notice->code_barre}}" class="form-control" id="Complete Name" placeholder="" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">posologie</label>
                                                                <input type="text"name="posologie" value="{{$notice->posologie}}" class="form-control" id="Complete Name" placeholder="" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">posologie</label>
                                                                <input type="text"name="posologie" value="{{$notice->posologie}}" class="form-control" id="Complete Name" placeholder="" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">interdiction medicamenteuse</label>
                                                                <input type="text"name="interdiction_medicamenteuse" value="{{$notice->interdiction_medicamenteuse}}" class="form-control" id="Complete Name" placeholder="" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">grossesse</label>
                                                                <input type="text"name="grossesse" value="{{$notice->grossesse}}" class="form-control" id="Complete Name" placeholder="" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Complete Name">allaitement</label>
                                                                <input type="text"name="allaitement" value="{{$notice->allaitement}}" class="form-control" id="Complete Name" placeholder="" required>
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
                                  {{-- fin edit notice --}}
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
<div class="modal fade" id="add-notice">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter notice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                         
            
                    <form role="form" method="POST" action="{{route('creer_notice')}}">
                      @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Complete Name">prix Session</label>
                                <input type="number"name="prix_session" class="form-control" id="Complete Name" placeholder="1000fcfa" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">prix public</label>
                                <input type="number"name="prix_public" class="form-control" id="Complete Name" placeholder="3000fcfa" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">tva</label>
                                <input type="text"name="tva"  class="form-control" id="Complete Name" placeholder="18/100">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">code barre</label>
                                <input type="text"name="code_barre" class="form-control" id="Complete Name" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">posologie</label>
                                <input type="text"name="posologie" class="form-control" id="Complete Name" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">effet_indesirable</label>
                                <input type="text"name="effet_indesirable" class="form-control" id="Complete Name" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">interdiction medicamenteuse</label>
                                <input type="text"name="interdiction_medicamenteuse"  class="form-control" id="Complete Name" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">grossesse</label>
                                <input type="text"name="grossesse"  class="form-control" id="Complete Name" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Complete Name">allaitement</label>
                                <input type="text"name="allaitement" class="form-control" id="Complete Name" placeholder="" required>
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
