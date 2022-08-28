<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <script src="https://use.fontawesome.com/6dfeb356d9.js"></script>



    <!-- Sidebar - Brand -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> HandyMan </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>



    <hr class="sidebar-divider">




        <li  class="nav-item" @if(Auth::User()->role_as == 'user' or Auth::User()->role_as =='handyman') style="display: none" @endif >
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecategory"
                aria-expanded="true" aria-controls="category">
              <!--  <i class="fas fa-fw fa-cog"></i>-->
                <i class="fas fa-fw fa-cog"></i>
                <span>Category</span>
            </a>
            <div id="collapsecategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">gestion Category:</h6>
                    <a class="collapse-item" href="category-liste">liste category</a>
                    <a class="collapse-item" href="category-create">ajouter category</a>
                </div>
            </div>
        </li>





    <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item"@if(Auth::User()->role_as == 'user' or  Auth::User()->role_as =='provider' or Auth::User()->role_as =='handyman' ) style="display: none" @endif >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubCategory"
            aria-expanded="true" aria-controls="collapsePagestw">
            <i class="fas fa-fw fa-wrench"></i>
            <span>SubCategory</span>
        </a>
        <div id="collapseSubCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">gestion subCategory:</h6>
                <a class="collapse-item" href="subcategory-liste">liste subCategory</a>
                <a class="collapse-item" href="subcategory-create">ajouter subCategory</a>
            </div>
        </div>
    </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item" @if(Auth::User()->role_as == 'user' or Auth::User()->role_as =='handyman') style="display: none" @endif >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseservice"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Service</span>
        </a>
        <div id="collapseservice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">gestion service:</h6>
                <a class="collapse-item" href="service-liste">liste services</a>
                <a class="collapse-item" href="service-create">ajouter service</a>
            </div>
        </div>
    </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item"@if(Auth::User()->role_as == 'user' or Auth::User()->role_as =='provider' or Auth::User()->role_as =='handyman') style="display: none" @endif >
        <a class="nav-link collapsed" href="service" data-toggle="collapse" data-target="#collapseprovider"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Provider</span>
        </a>
        <div id="collapseprovider" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">gestion services:</h6>
                <a class="collapse-item" href="provider-liste">liste providers</a>
                <a class="collapse-item" href="provider-create">ajouter provider</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-address-book" aria-hidden="true"></i>
            <span>Booking</span></a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item"@if(Auth::User()->role_as == 'user' or Auth::User()->role_as =='handyman') style="display: none" @endif >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHandyman"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>handyman</span>
        </a>
        <div id="collapseHandyman" class="collapse" aria-labelledby="headingamir"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion Handyman :</h6>
                <a class="collapse-item" href="handyman-liste">Liste Handyman</a>
                <a class="collapse-item" href="handyman-create">ajouter handyman</a>

            </div>
        </div>
    </li>

    <!-- Divider
    <hr class="sidebar-divider">

      Heading
    <div class="sidebar-heading">
        Addons
    </div> -->


    <!-- Nav Item - Charts -->
    <li class="nav-item"@if(Auth::User()->role_as == 'user' or Auth::User()->role_as =='provider'  or Auth::User()->role_as =='handyman') style="display: none" @endif >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>user</span>
        </a>
        <div id="collapseuser" class="collapse" aria-labelledby="headingamir"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="user-liste">liste user</a>
                <a class="collapse-item" href="user-create">ajouter user</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fa fa-money" aria-hidden="true"></i>
            <span>Payment</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
