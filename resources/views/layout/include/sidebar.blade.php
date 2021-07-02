<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              

              {{-- @if(auth()->user()->level == 1) --}}
              <li class="nav-item">
                <a href="{{url('/laporan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Kerja Harian</p>
                </a>
              </li>
              {{-- @endif --}}
              <li class="nav-item">
                <a href="{{url('/inputData')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Kerja Harian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/pengaturan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengaturan</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>