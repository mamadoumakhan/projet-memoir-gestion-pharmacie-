<!DOCTYPE html>
<html lang="en">

@include('dashboard/head')

<body id="page-top" class=" bg-gray-800">
  <!--a revoir -->
  {{-- @if (session()->has('sms'))
  <div class="notification is-success">
  
      {{ session('sms') }}
 </div>
  @endif --}}
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
            {{-- <a href="{{route('form_produit')}}"> --}}
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-produit">
                  <i class="fas fa-plus"></i> Ajout Produit
              </button>
            {{-- </a> --}}
          </div>
         
         
          <!-- Content Row -->

            <div class="row">
                
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
                                          <th>nom produit</th>
                                         
                                          <th>Categorie</th>
                                          <th>Tableau</th>
                                          <th>modifier</th>
                                          <th>supprimer</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($produits as $produit)
                                  <tr style="font-size:13px;font-family:sans-serif;">
                                       <th>{{$produit->nom_produit}}</th>
                                      {{-- <th>{{$produit->date_peremption}}</th> --}}
                                      {{-- <th>{{$produit->etat}}</th> --}}
                                      {{-- <th>{{$produit->quantite}}</th> --}}
                                      <th>{{$produit->nom_categorie}}</th>
                                      <th>{{$produit->nom_tableau}}</th> 
                                      <td>
                                        <a href="{{route('editproduit',['id_produit'=>$produit->id_produit])}}" data-toggle="modal" data-target="#edit-produit{{$produit->id_produit}}"
                                         class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="tooltip" title="Edit"> 
                                             <i class="fas fa-pen"></i>
                                         </a>  
                                       </td>
                                       <td>
                                        <a href="{{route('deleteproduit',['id_produit'=>$produit->id_produit])}} " onclick="return confirm('voullez vous vraiment supprimer');" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" style="font-size:13px;">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                        </a>
                                        </td>
                                  {{-- formulaire d'edution produit --}}
                                  <div class="modal fade" id="edit-produit{{$produit->id_produit}}">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modifier Produit</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                                     <div class="modal-body">
                                                        {{-- @if(isset($confirmation))
                                                        @if($confirmation==1)
                                                             <div class="alert alert-success">produit ajouter avec success</div>
                                                       
                                                        @else
                                                             <div class="alert alert-danger">produit non ajouter</div>
                                                        @endif
                                                     @endif --}}
                                                    <form role="form" method="POST" action="{{route('updateproduit',[$produit->id_produit])}}">
                                                      @csrf
                                                    <div class="card-body">
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="Name">nom</label>
                                                            <input type="text" value="{{$produit->nom_produit}}" class="form-control" id="Name" name="nom_produit" placeholder="Name" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Name">Prix Session</label>
                                                          {{-- cette methode permet de mettre le type du champs à text et d'empecher la saisie de texte 
                                                          mais je nesais pas pour le moment comment converture ce texte en number  --}}
                                                          {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, ''); 
                                                          this.value = this.value.replace(/(\..*)\./g, '$1');"  --}}
                                                          <input type="number" min="25" value="{{$produit->prix_session}}" max="10000" maxlength="5" class="form-control" id="Name" name="prix_session" placeholder="" required>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label for="Name">Prix Public</label>
                                                        <input type="number"  value="{{$produit->prix_public}}" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" class="form-control" min="25" max="10000" id="Name" name="prix_public" placeholder="" required>
                                                      </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Description">TVA</label>
                                                          <input type="text" class="form-control" maxlength="10" value="{{$produit->tva}}" name="tva" id="Description" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Description">Code Barre</label>
                                                          <input type="text" class="form-control" maxlength="10" value="{{$produit->code_barre}}" name="code_barre" id="Description" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Description">Posologie</label>
                                                          <textarea type="text" class="form-control"  maxlength="100" value="{{$produit->posologie}}" name="posologie" id="Description" placeholder=""></textarea>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Description">Effet Indesirable</label>
                                                          <textarea type="text" class="form-control" maxlength="100" value="{{$produit->effet_indesirable}}" name="effet_indesirable" id="Description" placeholder=""></textarea>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Description">Interdiction</label>
                                                          <textarea type="text" class="form-control" maxlength="100" value="{{$produit->interdiction_medicamenteuse}}" name="interdiction_medicamenteuse" id="Description" placeholder=""></textarea>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Description">Grossesse</label>
                                                          <textarea type="text" class="form-control" maxlength="100" value="{{$produit->grossesse}}" name="grossesse" id="Description" placeholder=""></textarea>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                          <label for="Description">Allaitement</label>
                                                          <textarea type="text" class="form-control" maxlength="100" value="{{$produit->allaitement}}" name="allaitement" id="Description" placeholder=""></textarea>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="Category">Categorie</label>
                                                            <select class="form-control"id="categorie" value="{{$produit->id_categorie}}" name="id_categorie">
                                                                @foreach ($categories as $categorie)
                                                                <option value="{{$categorie->id_categorie}}">{{ $categorie->nom_categorie }}</option>
                                                                @endforeach 
                                                                
                                                            </select>
                                                        </div>
                                                        <div>
                                                          <P>     </P>
                                                     </div>
                                                     <div class="form-group col-md-4">
                                                       <label for="tableau">Tableau</label>
                                                       <select class="form-control" id="tableau" name="id_tableau">
                                                           @foreach ($tableaus as $tableau)
                                                          <option value="{{$tableau->id_tableau}}">{{ $tableau->nom_tableau }}</option>
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
                                  {{-- fin formulaire d'edution --}}
                                      {{-- <th>
                                      <a href="#" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-jewelry" style="font-size:13px;">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                      </a>
                                      </th>
                                      <th>
                                      <a href="#" data-toggle="tooltip" title="Edit">
                                      <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" data-toggle="modal" data-target="#edit-jewelry" style="font-size:13px;">
                                          <i class="fas fa-cut"></i>
                                      </button>
                                      </a>
                                      </th> --}}


                                    @endforeach
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

      </div>
      <!-- End of Main Content -->
      {{-- formulaire d'ajout de produit  --}}
      <div class="modal fade" id="add-produit">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter Produit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                           <div class="modal-body">
                        <form role="form" method="POST" action="{{route('creer_produit')}}">
                            @csrf
                           
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="nom">nom</label>
                                    <input type="text" oninput="this.value = this.value.replace(/[^a-z.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                                     {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, ''); 
                                     this.value = this.value.replace(/(\..*)\./g, '$1');" --}}
                                     {{-- step="1" pattern="\d*" onkeyup="onlyNumber();" maxlength="10"  --}}
                                     class="form-control" id="nom" name="nom_produit" placeholder="" required>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Name">Prix Session</label>
                                  {{-- cette methode permet de mettre le type du champs à text et d'empecher la saisie de texte 
                                  mais je nesais pas pour le moment comment converture ce texte en number  --}}
                                  {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, ''); 
                                  this.value = this.value.replace(/(\..*)\./g, '$1');"  --}}
                                  <input type="number"min="25" max="10000" maxlength="5" class="form-control" id="Name" name="prix_session" placeholder="" required>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="Name">Prix Public</label>
                                <input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" class="form-control" min="25" max="10000" id="Name" name="prix_public" placeholder="" required>
                              </div>
                                <div class="form-group col-md-4">
                                  <label for="Description">TVA</label>
                                  <input type="text" class="form-control" maxlength="10" name="tva" id="Description" placeholder="">
                                    {{-- @if ($errors->has('tva'))
                                        <p>{{$errors->first('tva')}}</p>
                                    @endif --}}
                                    {{-- le controle si dessus permet de gerrer les messages d'erreurs --}}
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Description">Code Barre</label>
                                  <input type="text" class="form-control" maxlength="10" name="code_barre" id="Description" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Description">Posologie</label>
                                  <textarea type="text" class="form-control"  maxlength="100" name="posologie" id="Description" placeholder=""></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Description">Effet Indesirable</label>
                                  <textarea type="text" class="form-control" maxlength="100" name="effet_indesirable" id="Description" placeholder=""></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Description">Interdiction</label>
                                  <textarea type="text" class="form-control" maxlength="100" name="interdiction_medicamenteuse" id="Description" placeholder=""></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Description">Grossesse</label>
                                  <textarea type="text" class="form-control" maxlength="100" name="grossesse" id="Description" placeholder=""></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="Description">Allaitement</label>
                                  <textarea type="text" class="form-control" maxlength="100" name="allaitement" id="Description" placeholder=""></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                     <label for="categorie">Categorie</label>
                                     <select class="form-control" id="categorie" name="id_categorie">
                                         @foreach ($categories as $categorie)
                                        <option value="{{$categorie->id_categorie}}">{{ $categorie->nom_categorie }}</option>
                                        @endforeach 
                                        
                                    </select> 
                                     
                                </div>
                                <div>
                                     <P>     </P>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="tableau">Tableau</label>
                                  <select class="form-control" id="tableau" name="id_tableau">
                                      @foreach ($tableaus as $tableau)
                                     <option value="{{$tableau->id_tableau}}">{{ $tableau->nom_tableau }}</option>
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
      {{-- fin formulaire d'ajout de produit --}}
      <!-- Footer -->
         
      @include('dashboard/modals')
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
          <a class="btn btn-primary" href="../login/login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  @include('dashboard/scripts')
<script>
    $(document).ready(function() {
    $('table.display').DataTable();
} );

// script pour empecher la saisie de chiffre dans les champs de type text

// function onlyNumber()
//   {
//     var nom = document.getElementById('nom');
//        while (nom.value.match(/[^0-9]/))
//           {
//              nom.value = nom.value.replace(/[^0-9]/,'');
//          }
//   }

// function onlyNumber()
// {
//     var champ=document.getElementById('champ');
//     champ.value=champ.value.replace(/[^0-9]/,'');
// }
</script>
</body>

</html>