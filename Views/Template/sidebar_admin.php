   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>/Dashboard">
           <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
           </div>
           <div class="sidebar-brand-text mx-3">BODEGA<sup>2</sup></div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <?php if (!empty($_SESSION['permisos'][1]['r'])) { ?>
           <li class="nav-item">
               <a class="nav-link" href="<?= base_url(); ?>/dashboard">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span></a>
           </li>
       <?php } ?>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
           Administrar Permisos
       </div>

       <!-- Nav Item - Pages Collapse Menu -->
       <?php if (!empty($_SESSION['permisos'][2]['r'])) { ?>
           <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                   <!-- <i class="fas fa-fw fa-cog"></i> -->
                   <i class="fas fa-fw fa-users"></i>
                   <span>Usuarios</span>
               </a>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                   <div class="bg-white py-2 collapse-inner rounded">
                       <h6 class="collapse-header">Usuarios & Roles:</h6>
                       <a class="collapse-item" href="<?= base_url(); ?>/usuarios">Usuarios</a>
                       <a class="collapse-item" href="<?= base_url(); ?>/roles">Roles</a>
                   </div>
               </div>
           </li>
       <?php } ?>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
           Administrar
       </div>

       <!-- Nav Item - Pages Collapse Menu -->

       <li class="nav-item active">
           <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
               <i class="fas fa-fw fa-folder"></i>
               <span>Procesos</span>
           </a>
           <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Mantenimient tablas</h6>
                   <?php if (!empty($_SESSION['permisos'][3]['r'])) { ?>
                       <a class="collapse-item" href="<?= base_url(); ?>/clientes">Clientes</a>
                   <?php } ?>
                   <?php if (!empty($_SESSION['permisos'][4]['r']) || !empty($_SESSION['permisos'][6]['r'])) { ?>
                       <a class="collapse-item" href="register.html">Tienda</a>
                   <?php } ?>
                   <?php if (!empty($_SESSION['permisos'][4]['r'])) { ?>
                       <a class="collapse-item" href="<?= base_url(); ?>/productos">Poductos</a>
                   <?php } ?>
                   <?php if (!empty($_SESSION['permisos'][6]['r'])) { ?>
                       <a class="collapse-item" href="<?= base_url(); ?>/categorias">Categorias</a>
                   <?php } ?>

               </div>
           </div>
       </li>

       <!-- Nav Item - Charts -->
       <?php if (!empty($_SESSION['permisos'][6]['r'])) { ?>
           <li class="nav-item">
               <a class="nav-link" href="<?= base_url(); ?>/categorias">
                   <i class="fas fa-fw fa-chart-area"></i>
                   <span>Charts</span></a>
           </li>
       <?php } ?>


       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">

       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
           <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

   </ul>
   <!-- End of Sidebar -->