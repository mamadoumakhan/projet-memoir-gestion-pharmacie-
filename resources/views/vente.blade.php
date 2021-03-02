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
         
          <!-- Content Row -->
    
            <div class="row">
                
              <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4 border-left-success border-bottom-success">
                      <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row color-info align-items-center justify-content-center">
                    <h6 class="m-0 font-weight-bold text-success">Selectionner les Produit</h6>
                      </div>
                      <!-- Card Body -->
                        <div class="card-body">
                          {{-- <div class="table-responsive"> --}}
                            <table class="table table-hover display" id="" width="100%" cellspacing="0">
                              <thead>
                                <tr style="font-size:13px;font-family:sans-serif;">
                                            {{-- <th>barre code</th> --}}
                                          <th>nom produit</th>
                                          <th>date_peremption</th>
                                          {{-- <th>etat</th> --}}
                                          <th>Quantite Stock</th>
                                          <th>Categorie</th>
                                          <th>prix unitaire</th>
                                          <th>total</th>
                                          <th>quantité</th> 
                                          <th>Action</th> 
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($produits as $produit)
                                  <tr style="font-size:13px;font-family:sans-serif;">
                                       <th>{{$produit->nom_produit}}</th>
                                      <th>{{$produit->date_peremption}}</th>
                                      {{-- <th>{{$produit->etat}}</th> --}}
                                      <th>{{$produit->quantite}}</th>
                                      <th>{{$produit->nom_categorie}}</th>
                                      <th></th>
                                      <th></th>
                                      <th><input name="quantite{{$produit->id_produit}}" min="1" max="{{$produit->quantite}}"  type="number"></th>
                                      <th>
                                          <a href="{{route('inserervente',['id_produit'=>$produit->id_produit])}}"
                                           class="btn btn-success btn-icon-text btn-flat btn-sm" title="Edit"> 
                                               {{-- <i class="fas fa-pen"></i> --}}ajouter
                                           </a>   
                                      </th>
                                    @endforeach
                                       </th>
                                      </tr>
                                  </tbody>
                              </table>
                          {{-- </div> --}}
                      </div>
                  </div>
            
              </div>    
              <div class="overflow-auto">
              <div class="row">
                    
                <div class="col-xl-12 col-lg-12">
                  <div class="card shadow mb-4 border-left-success border-bottom-success">
                        <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                      <h6 class="m-0 font-weight-bold text-success">Produit Ajouter sur la liste d'achat</h6>
                        </div>
                        <!-- Card Body -->
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-hover display" id="" width="100%" cellspacing="0">
                                <thead>
                                  <tr style="font-size:13px;font-family:sans-serif;">
                                            <th>nom produit</th>
                                            <th>quantité</th>
                                            <th>prix unitaire</th>
                                            <th>prix total</th>
                                            <th>somme verssaie</th>
                                            <th>montant due</th>
                                            {{-- <th>quantité</th> --}}
                                    </tr>
                                  </thead>
                                  <tbody>
                               @foreach ($prod as $produit)
                                    <tr style="font-size:13px;font-family:sans-serif;">
                                      <th>{{$produit->id_produit}}</th>
                                      {{-- @if ()
                                          
                                      @else
                                          
                                      @endif --}}
                                         {{--<th>{{$produit->nom_produit}}</th>
                                        <th>{{$produit->date_peremption}}</th>
                                        <th>{{$produit->quantite}}</th>
                                        <th>{{$produit->id_categorie}}</th>
                                        <th></th> --}}
                                        
                                     {{-- @endforeach  --}}
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
              <div class="row"></div>
            </div>
        </div>
        <!-- /.container-fluid -->
            {{--debut deuxieme formulaire  --}}
            <div class="container-fluid">
         
              <!-- Content Row -->
    
              
            </div>
            {{-- fin deusieme formulaire --}}
      </div>
      <!-- End of Main Content -->

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

  @include('dashboard/scripts');

 <script>

    // $(document).ready(function() {
    $('table.display').DataTable();
} );
</script>
</body>

</html>
{{-- methode qui permet d'utiliser un button comme un lien --}}
{{-- <input type=button onclick=window.location.href='http://monsite.fr';
 value=Aller sur mon site /> --}}