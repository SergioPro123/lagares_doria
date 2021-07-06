 <!-- Side-Nav-->
 <aside class="main-sidebar hidden-print ">
     <section class="sidebar" id="sidebar-scroll">
         <!-- Sidebar Menu-->
         <ul class="sidebar-menu">
             <li class="nav-level">--- Navegación</li>
             <li class="{{ $activeElement[26] }} treeview">
                 <a class="waves-effect waves-dark" href="{{ url('/dashboard') }}">
                     <i class="icon-speedometer"></i><span> Dashboard</span>
                 </a>
             </li>
             <li class="nav-level">--- Productos</li>

             <li class="{{ $activeElement[0] }}{{ $activeElement[1] }} {{ $activeElement[2] }} treeview"><a
                     class="waves-effect waves-dark" href="#!"><i class="icon-directions"></i><span>
                         Comunas</span><span class="label label-success menu-caption">New</span><i
                         class="icon-arrow-down"></i></a>
                 <ul class="treeview-menu">
                     <li class="{{ $activeElement[0] }}"><a class="waves-effect waves-dark"
                             href="{{ url('Obtener/Comunas') }}"><i class="icon-arrow-right"></i>
                             Todas las Comunas</a></li>
                     <li class="{{ $activeElement[1] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Comunas/comuna/0') }}"><i class="icon-arrow-right"></i>
                             Única Comuna</a></li>
                     <li class="{{ $activeElement[2] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Insertar/Comunas') }}"><i class="icon-arrow-right"></i>
                             Insertar Comuna</a></li>
                 </ul>
             </li>

             <li class="{{ $activeElement[3] }}{{ $activeElement[4] }}{{ $activeElement[5] }} treeview"><a
                     class="waves-effect waves-dark" href="#!"><i class="icon-map"></i><span>
                         Barrios</span><span class="label label-success menu-caption">New</span><i
                         class="icon-arrow-down"></i></a>
                 <ul class="treeview-menu">
                     <li class="{{ $activeElement[3] }}"><a class="waves-effect waves-dark"
                             href="{{ url('Obtener/Barrios') }}"><i class="icon-arrow-right"></i>
                             Todos los Barrios</a></li>
                     <li class="{{ $activeElement[4] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Barrios/comuna/0') }}"><i class="icon-arrow-right"></i>
                             Barrios por Comuna</a></li>
                     <li class="{{ $activeElement[5] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Insertar/Barrios') }}"><i class="icon-arrow-right"></i>
                             Insertar Barrio</a></li>
                 </ul>
             </li>

             <li
                 class="{{ $activeElement[6] }}{{ $activeElement[7] }}{{ $activeElement[8] }}{{ $activeElement[9] }} treeview">
                 <a class="waves-effect waves-dark" href="#!"><i class="icon-paypal"></i><span>
                         Bancos</span><span class="label label-success menu-caption">New</span><i
                         class="icon-arrow-down"></i></a>
                 <ul class="treeview-menu">
                     <li class="{{ $activeElement[6] }}"><a class="waves-effect waves-dark"
                             href="{{ url('Obtener/Bancos') }}"><i class="icon-arrow-right"></i>
                             Todos los Bancos</a></li>
                     <li class="{{ $activeElement[7] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Bancos/barrio/0') }}"><i class="icon-arrow-right"></i>
                             Banco por Barrio</a></li>
                     <li class="{{ $activeElement[8] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Bancos/comuna/0') }}"><i class="icon-arrow-right"></i>
                             Banco por Comuna</a></li>
                     <li class="{{ $activeElement[9] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Insertar/Bancos') }}"><i class="icon-arrow-right"></i>
                             Insertar Banco</a></li>
                 </ul>
             </li>

             <li
                 class="{{ $activeElement[10] }}{{ $activeElement[11] }}{{ $activeElement[12] }}{{ $activeElement[13] }} treeview">
                 <a class="waves-effect waves-dark" href="#!"><i class="icon-graduation"></i><span>
                         Colegios</span><span class="label label-success menu-caption">New</span><i
                         class="icon-arrow-down"></i></a>
                 <ul class="treeview-menu">
                     <li class="{{ $activeElement[10] }}"><a class="waves-effect waves-dark"
                             href="{{ url('Obtener/Colegios') }}"><i class="icon-arrow-right"></i>
                             Todos los Colegios</a></li>
                     <li class="{{ $activeElement[11] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Colegios/barrio/0') }}"><i class="icon-arrow-right"></i>
                             Colegios por Barrio</a></li>
                     <li class="{{ $activeElement[12] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Colegios/comuna/0') }}"><i class="icon-arrow-right"></i>
                             Colegios por Comuna</a></li>
                     <li class="{{ $activeElement[13] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Insertar/Colegios') }}"><i class="icon-arrow-right"></i>
                             Insertar Colegio</a></li>
                 </ul>
             </li>

             <li
                 class="{{ $activeElement[14] }}{{ $activeElement[15] }}{{ $activeElement[16] }}{{ $activeElement[17] }} treeview">
                 <a class="waves-effect waves-dark" href="#!"><i class="icon-graduation"></i><span>
                         Universidades</span><span class="label label-success menu-caption">New</span><i
                         class="icon-arrow-down"></i></a>
                 <ul class="treeview-menu">
                     <li class="{{ $activeElement[14] }}"><a class="waves-effect waves-dark"
                             href="{{ url('Obtener/Universidades') }}"><i class="icon-arrow-right"></i>
                             Todas las Universidades</a></li>
                     <li class="{{ $activeElement[15] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Universidades/barrio/0') }}"><i class="icon-arrow-right"></i>
                             Universidad por Barrio</a></li>
                     <li class="{{ $activeElement[16] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Universidades/comuna/0') }}"><i class="icon-arrow-right"></i>
                             Universidad por Comuna</a></li>
                     <li class="{{ $activeElement[17] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Insertar/Universidades') }}"><i class="icon-arrow-right"></i>
                             Insertar Universidad</a></li>
                 </ul>
             </li>
             <li
                 class="{{ $activeElement[18] }}{{ $activeElement[19] }}{{ $activeElement[20] }}{{ $activeElement[21] }} treeview">
                 <a class="waves-effect waves-dark" href="#!"><i class="icon-like"></i><span>
                         Hospitales</span><span class="label label-success menu-caption">New</span><i
                         class="icon-arrow-down"></i></a>
                 <ul class="treeview-menu">
                     <li class="{{ $activeElement[18] }}"><a class="waves-effect waves-dark"
                             href="{{ url('Obtener/Hospitales') }}"><i class="icon-arrow-right"></i>
                             Todos los Hospitales</a></li>
                     <li class="{{ $activeElement[19] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Hospitales/barrio/0') }}"><i class="icon-arrow-right"></i>
                             Hospital por Barrio</a></li>
                     <li class="{{ $activeElement[20] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Hospitales/comuna/0') }}"><i class="icon-arrow-right"></i>
                             Hospital por Comuna</a></li>
                     <li class="{{ $activeElement[21] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Insertar/Hospitales') }}"><i class="icon-arrow-right"></i>
                             Insertar Hospital</a></li>
                 </ul>
             </li>
             <li
                 class="{{ $activeElement[22] }}{{ $activeElement[23] }}{{ $activeElement[24] }}{{ $activeElement[25] }} treeview">
                 <a class="waves-effect waves-dark" href="#!"><i class="icon-envelope"></i><span>
                         Mensajerias</span><span class="label label-success menu-caption">New</span><i
                         class="icon-arrow-down"></i></a>
                 <ul class="treeview-menu">
                     <li class="{{ $activeElement[22] }}"><a class="waves-effect waves-dark"
                             href="{{ url('Obtener/Mensajerias') }}"><i class="icon-arrow-right"></i>
                             Todas las Mensajerias</a></li>
                     <li class="{{ $activeElement[23] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Mensajerias/barrio/0') }}"><i class="icon-arrow-right"></i>
                             Mensajeria por Barrio</a></li>
                     <li class="{{ $activeElement[24] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Obtener/Mensajerias/comuna/0') }}"><i class="icon-arrow-right"></i>
                             Mensajeria por Comuna</a></li>
                     <li class="{{ $activeElement[25] }}"><a class="waves-effect waves-dark"
                             href="{{ url('/Insertar/Mensajerias') }}"><i class="icon-arrow-right"></i>
                             Insertar Mensajeria</a></li>
                 </ul>
             </li>
         </ul>
     </section>
 </aside>
