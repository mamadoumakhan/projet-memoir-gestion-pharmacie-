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
            {{-- <a href="{{route('form_article')}}"> --}}
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-article">
                  <i class="fas fa-plus"></i> Ajout Article
              </button>
            {{-- </a> --}}
          </div>
         
         
          <!-- Content Row -->

            <div class="row">
                
              <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4 border-left-success border-bottom-success">
                      <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Article</h6>
                      </div>
                      <!-- Card Body -->
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-hover display" id="" width="100%" cellspacing="0">
                              <thead>
                                <tr style="font-size:13px;font-family:sans-serif;">
                                          {{-- <th>Nom Article</th> --}}
                                          <th>Referrence</th>
                                          <th>Quantite</th>
                                          <th>Date Peremption</th>
                                          <th>Etat</th>
                                          <th>Fournisseur</th>
                                          <th>modifier</th>
                                          <th>supprimer</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($articles as $article)
                                  <tr style="font-size:13px;font-family:sans-serif;">
                                       {{-- <th>{{$article->nom_article}}</th> --}}
                                       <th>{{$article->nom_produit}}</th>
                                       <th>{{$article->quantite}}</th>
                                      <th>{{$article->date_peremption}}</th>
                                       <th>{{$article->etat}}</th>
                                      <th>{{$article->nom_fournisseur}}</th> 
                                      
                                      <td>
                                        <a href="{{route('editarticle',['id_article'=>$article->id_article])}}" data-toggle="modal" data-target="#edit-article{{$article->id_article}}"
                                         class="btn btn-success btn-icon-text btn-flat btn-sm" data-toggle="tooltip" title="Edit"> 
                                             <i class="fas fa-pen"></i>
                                         </a>  
                                       </td>
                                       <td>
                                        <a href="{{route('deletearticle',['id_article'=>$article->id_article])}} " onclick="return confirm('voullez vous vraiment supprimer');" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" style="font-size:13px;">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                        </a>
                                        </td>
                                  {{-- formulaire d'edution article --}}
                                  <div class="modal fade" id="edit-article{{$article->id_article}}">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modifier Article</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                                     <div class="modal-body">
                                                        {{-- @if(isset($confirmation))
                                                        @if($confirmation==1)
                                                             <div class="alert alert-success">article ajouter avec success</div>
                                                       
                                                        @else
                                                             <div class="alert alert-danger">article non ajouter</div>
                                                        @endif
                                                     @endif --}}
                                                    <form role="form" method="POST" action="{{route('updatearticle',[$article->id_article])}}">
                                                      @csrf
                                                    <div class="card-body">
                                                      <div class="row">
                                                        {{-- <div class="form-group col-md-12">
                                                            <label for="Name">nom</label>
                                                            <input type="text" value="{{$article->nom_article}}" class="form-control" id="Name" name="nom_article" placeholder="Name" required>
                                                        </div> --}}
                                                        {{-- <label for="start">Start date:</label>

                                                              <input type="date" id="start" name="trip-start"
                                                                   value="2018-07-22"
                                                                     min="2018-01-01" max="2018-12-31"> --}}
                                                        <div class="form-group col-md-6">
                                                            <label for="date">Date Peremption</label>
                                                            <input class="form-control" id="date" type="date"value="{{$article->date_peremption}}" min="2021-01-01" max="2022-12-31" name="date_peremption" id="currency-field" pattern="^\P\d{1,3}(,\d{3})*(\.\d+)?P" required>
                                                        </div>
                                                         <div class="form-group col-md-6">
                                                            <label for="Description">Etat</label>
                                                            <input type="text"value="{{$article->etat}}" class="form-control" name="etat" id="Description" placeholder="etat" required>
                                                        </div>
                                                         <div class="form-group col-md-6">
                                                            <label for="Quantity">Quantite</label>
                                                            <input type="number" value="{{$article->quantite}}" class="form-control" name="quantite" id="Quantite" placeholder="Quantity" required>
                                                        </div> 
                                                        <div class="form-group col-md-6">
                                                            <label for="produit">Produit</label>
                                                            <select class="form-control"id="produit" name="id_produit">
                                                                @foreach ($produits as $produit)
                                                                <option value=""></option>
                                                                <option value="{{$produit->id_produit}}">{{ $produit->nom_produit}}</option>
                                                                @endforeach 
                                                                
                                                            </select>
                                                        </div>
                                                        <div>
                                                          <P>     </P>
                                                     </div>
                                                     <div class="form-group col-md-6">
                                                       <label for="fournisseur">Fournisseur</label>
                                                       <select class="form-control" id="fournisseur" name="id_fournisseur">
                                                           @foreach ($fournisseurs as $fournisseur)
                                                           <option value=""></option>
                                                          <option value="{{$fournisseur->id_fournisseur}}">{{ $fournisseur->nom_fournisseur }}</option>
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
      {{-- formulaire d'ajout de article  --}}
      <div class="modal fade" id="add-article">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter Article</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                           <div class="modal-body">
                        <form role="form" method="POST" action="{{route('creer_article')}}">
                            @csrf
                           
                        <div class="card-body">
                            <div class="row">
                                {{-- <div class="form-group col-md-6"> --}}
                                    {{-- <label for="nom">nom</label> --}}
                                    {{-- <input type="text" oninput="this.value = this.value.replace(/[^a-z.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" --}}
                                     {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, ''); 
                                     this.value = this.value.replace(/(\..*)\./g, '$1');" --}}
                                     {{-- step="1" pattern="\d*" onkeyup="onlyNumber();" maxlength="10"  --}}
                                     {{-- class="form-control" id="nom" name="nom_article" placeholder="" required> --}}
                                {{-- </div> --}}
                                
                                <div class="form-group col-md-6">
                                    <label for="quantite">Quantite</label>
                                    <input id="quantite" class="form-control"type="text" name="quantite" id="currency-field" value="" required>
                                </div> <div class="form-group col-md-6">
                                    <label for="date">date peremption</label>
                                    <input id="date" class="form-control"type="date"min="2021-01-01" max="2022-12-31" name="date_peremption" id="currency-field" value="" required >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="etat">Etat</label>
                                    <input id="etat" class="form-control"type="text" name="etat" id="currency-field" value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                     <label for="produit">Produit</label>
                                     <select class="form-control" id="produit" name="id_produit">
                                         @foreach ($produits as $produit)
                                         <option value=""></option>
                                        <option value="{{$produit->id_produit}}">{{ $produit->nom_produit }}</option>
                                        @endforeach 
                                        
                                    </select> 
                                     
                                </div>
                                <div>
                                     <P>     </P>
                                </div>
                                <div class="form-group col-md-12">
                                  <label for="fournisseur">Fournisseur</label>
                                  <select class="form-control" id="fournisseur" name="id_fournisseur">
                                      @foreach ($fournisseurs as $fournisseur)
                                      <option value=""></option>
                                     <option value="{{$fournisseur->id_fournisseur}}">{{ $fournisseur->nom_fournisseur }}</option>
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
      {{-- fin formulaire d'ajout de article --}}
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