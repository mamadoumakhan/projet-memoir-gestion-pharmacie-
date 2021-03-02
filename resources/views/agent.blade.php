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
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-agent">
                  <i class="fas fa-plus"></i> Ajouter Agent
              </button>
          </div>
          <!-- Content Row -->

            <div class="row">
                
                <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4 border-left-success border-bottom-success">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-success">Agent</h6>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-hover display" id="" width="100%" cellspacing="0">
                              <thead>
                                <tr style="font-size:13px;font-family:sans-serif;">    
                                          <th>Nom Agent</th>
                                          <th>Prenom Agent</th>
                                          <th>Email</th>
                                          <th>Telephone</th>
                                          <th>Adresse</th>
                                          <th>CNI</th>
                                          <th>Etat</th>
                                          <th>Modifier</th>
                                          <th>Supprimer</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($agents as $agent)
                                    <tr>
                                      <th>{{$agent->nom_utilisateur }}</th>
                                      <th>{{$agent->prenom_utilisateur }}</th>
                                      <th>{{$agent->email_utilisateur }}</th>
                                      <th>{{$agent->telephone_utilisateur }}</th>
                                      <th>{{$agent->adresse_utilisateur }}</th>
                                      <th>{{$agent->cni_utilisateur }}</th>
                                      <th>{{$agent->etat_utilisateur }}</th>
                                      {{-- <th>{{  $agent->adresse_utilisateur }}</th> --}}
                                      <td>
                                        <a href="{{route('agent.edit',['id_utilisateur'=>$utilisateur->id_utilisateur])}}" data-toggle="modal" data-target="#edit-agent{{$utilisateur->id_utilisateur}}"
                                         class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="tooltip" title="Edit"> 
                                             <i class="fas fa-pen"></i>
                                         </a>  
                                       </td>
                                       <td>
                                        <a href="{{route('agent.destroy',['id_utilisateur'=>$utilisateur->id_utilisateur])}} " onclick="return confirm('voullez vous vraiment supprimer');" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" style="font-size:13px;">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                        </a>
                                        </td>

                                      {{-- formulaire d'edution des agents --}}
                                      <div class="modal fade" id="edit-agent{{$agent->id_utilisateur}}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modifier Agent</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                 <div class="modal-body">
                                                        <form role="form" method="POST" action="{{ route('agent.update',[$agent->id_utilisateur]) }}">
                                                          @csrf
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="Complete Name">Nom</label>
                                                                    <input type="text" name="nom_utilisateur" class="form-control" id="nom_client" name="nom_utilisateur" value="{{  $agent->nom_utilisateur }}" placeholder="Nom" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Email">Email</label>
                                                                    <input type="Email" name="email_utilisateur" class="form-control" id="email" name="email_utilisateur" value="{{  $agent->email_utilisateur }}" placeholder="Email" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Address">Prenom</label>
                                                                    <input type="text" name="prenom_utilisateur" class="form-control" id="prenom" name="prenom_utilisateur" value="{{  $agent->prenom_utilisateur }}" placeholder="Prenom" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Zipcode">Telephone</label>
                                                                    <input type="text" name="telephone_utilisateur" class="form-control" id="telephone" name="telephone_utilisateur" placeholder="" value="{{  $agent->telephone_utilisateur }}" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Billing Address">Adresse</label>
                                                                    <input type="text" name="adresse_utilisateur" class="form-control" id="adresse" placeholder="" value="{{  $agent->adresse_utilisateur }}" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                  <label for="Billing Address">CNI</label>
                                                                  <input type="password" name="cni_utilisateur" class="form-control" id="adresse" value="{{  $agent->cni_utilisateur }}" placeholder="" required>
                                                              </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Billing Address">mot de passe</label>
                                                                    <input type="password" name="passe_compte" value="{{  $agent->passe_compte }}" class="form-control" id="adresse" placeholder="" required>
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
                                    </tr>
                                  @endforeach
                              </tbody>
                          </table>
                    
                                      {{-- formulaire d'edution des agents --}}

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
      <div class="modal fade" id="add-agent">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter Agent</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                       <div class="modal-body">
                    <form role="form" method="POST" action="{{route('agent.store')}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Complete Name">Nom</label>
                                <input type="text" class="form-control" id="nom_utilisateur" name="nom_utilisateur" placeholder="Nom" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Email">Email</label>
                                <input type="Email" class="form-control" id="email" name="email_utilisateur" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Address">Prenom</label>
                                <input type="text" class="form-control" id="prenom_utilisateur" name="prenom_utilisateur" placeholder="Prenom" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Zipcode">Telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone_utilisateur" placeholder="Telephone" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="Billing Address">Adresse</label>
                              <input type="text" name="adresse_utilisateur" class="form-control" id="adresse" placeholder="" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="Billing Address">CNI</label>
                            <input type="password" name="cni_utilisateur" class="form-control" id="adresse" placeholder="" required>
                        </div>
                          <div class="form-group col-md-6">
                              <label for="Billing Address">mot de passe</label>
                              <input type="password" name="passe_compte" class="form-control" id="adresse" placeholder="" required>
                          </div>
                            {{-- <div class="form-group col-md-8">
                                <label for="Billing Address">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" required>
                            </div> --}}
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
