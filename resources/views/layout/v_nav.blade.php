<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
         <li class="{{request()->is('guru') ? 'active' : ''}}"><a href="/guru"><i class="fa fa-user"></i> <span>Guru</span></a></li>
         <li class="{{request()->is('siswa') ? 'active' : ''}}"><a href="/siswa"><i class="fa fa-users"></i> <span>Siswa</span></a></li>
         <li class="{{request()->is('penjualan') ? 'active' : ''}}"><a href="/penjualan"><i class="fa fa-shopping-cart"></i> <span>Penjualan</span></a></li>
         <li class="{{request()->is('user') ? 'active' : ''}}"><a href="/user"><i class="fa fa-book"></i> <span>User</span></a></li>
         
         <li class="{{request()->is('pelanggan') ? 'active' : ''}}"><a href="/pelanggan"><i class="fa fa-users"></i> <span>Pelanggan</span></a></li>
        
      </ul>