<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">GESTION PHARMACIE</div>
        {{-- <img class="img-profile rounded-circle" src="{{ asset('img/8.jpg') }}"> --}}
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{url('/dashboard')}}">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{url('/produit')}}">  
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Produit</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/categorie')}}">
          <i class="fa fa-copy"></i>
          <span>Categories</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/tableau')}}">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Tableau</span></a>
      </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{url('/vente')}}">
        <!-- ventes=sales -->
          <i class="fa fa-fw fa-align-right"></i>
          <span>Ventes</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/client')}}">
        <!-- client=custumer -->
          <i class="fa fa-fw fa-users"></i>
          <span>Clients</span></a>
      </li>--}}
      <li class="nav-item">
        <a class="nav-link" href="{{url('/agent')}}">
        <!-- utilisateur=users -->
        <i class="fas fa-stethoscope"></i>
          {{-- <i class="fa fa-fw fa-user"></i> --}}
          <span>Agent</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="{{url('/fournisseur')}}">
        <!-- client=custumer -->
          <i class="fa fa-fw fa-users"></i>
          <span>Fournisseur</span></a>
      </li>
     {{-- <li class="nav-item">
        <a class="nav-link" href="{{url('/admin')}}">
        <!-- utilisateur=users -->
        <i class="fas fa-user-md"></i>
          <i class="fa fa-fw fa-user"></i>
          <span>Admin</span></a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{url('/stock')}}">
        <!-- utilisateur=users -->
          <i class="fa fa-fw fa-user"></i>
          <span>Stock</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/indication')}}">
        <!-- utilisateur=users -->
          <i class="fa fa-fw fa-user"></i>
          <span>Indication</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/notice')}}">
        <!-- utilisateur=users -->
          <i class="fa fa-fw fa-user"></i>
          <span>Notice</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>