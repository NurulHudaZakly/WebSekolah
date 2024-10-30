 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->

     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                 <i class="fas fa-bars"></i>
             </a>
         </li>
         <li class="nav-item">
             <a href="{{ url('/home') }}" class="nav-link">
                 <i class="nav-icon fas fa-home"></i>
                 <span class="ms-2">Home</span>
             </a>
         </li>
         <li class="nav-item dropdown">
             <a id="dropdownMenuButton" href="#" class="nav-link dropdown-toggle" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Tentang Sekolah
             </a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="{{ url('/visimisi') }}">Visi & Misi</a>
                 <a class="dropdown-item" href="{{ url('/sejarah') }}">Sejarah</a>
             </div>
         </li>

         <li class="nav-item d-none d-sm-inline-block">
             <a href="#" class="nav-link">Guru</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="#" class="nav-link">Siswa</a>
         </li>
     </ul>


     <!-- Right navbar links -->
     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Profil dropdown -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <img src="{{ asset('AdminLTE/dist/img/boys.jpg') }}" class="img-circle elevation-2" alt="User Image"
                     style="inline-size: 30px; block-size: 30px;">
                 Nurul Huda Zakly
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <img src="{{ asset('AdminLTE/dist/img/boys.jpg') }}" alt="User Avatar"
                             class="img-size-50 mr-3 img-circle">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 Nurul Huda Zakly
                                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">Edit Profile</p>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item dropdown-footer">Log Out</a>
             </div>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->
