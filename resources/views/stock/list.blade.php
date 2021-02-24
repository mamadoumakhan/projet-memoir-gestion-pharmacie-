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
        @include('stock/add')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4"> 
            {{-- <a href="{{route('form_stock')}}"> --}}
              <button type="button" class="btn btn-success btn-icon-text btn-md" data-toggle="modal" data-target="#add-stock">
                  <i class="fas fa-plus"></i> Ajout stock
              </button>
            {{-- </a> --}}
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
                                          <th>nom</th>
                                          <th>description</th> 
                                          <th>modifier</th>
                                          <th>supprimer</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($stocks as $stock)
                                    <tr style="font-size:13px;font-family:sans-serif;">
                                      <td>{{$stock->nom_stock}}</td>
                                      <td>{{$stock->description_stock}}</td>
                                      
                                      <td>
                                      <a href="{{route('editstock',['id_stock'=>$stock->id_stock])}}" data-toggle="tooltip" title="Edit">
                                        <button type="button" class="btn btn-success btn-icon-text btn-flat btn-sm"data-toggle="modal" data-target="#edit-stock" style="font-size:13px;">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                      </a>
                                      </td>
                                      <td>
                                      <a href="{{route('deletestock',['id_stock'=>$stock->id_stock])}}" onclick="return confirm('voullez vous supprimer');" data-toggle="tooltip" title="Edit">
                                      <button type="button" class="btn btn-danger btn-icon-text btn-flat btn-sm" style="font-size:13px;">
                                          <i class="fas fa-cut"></i>
                                      </button>
                                      </a>
                                      </td>
                                    @endforeach
                                    
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
    </script>
</body>

</html>