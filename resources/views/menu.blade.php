 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
   <div class="menu_section">
     <h3>General</h3>
     <ul class="nav side-menu">
       <li><a><i class="fa fa-home"></i> Página Principal <span class="fa fa-chevron-down"></span></a>
         <ul class="nav child_menu">
         <li><a href="{{route('index')}}">Dashboard</a></li>
         </ul>
       </li>
       {{-- <li><a><i class="fa fa-edit"></i> Formulários <span class="fa fa-chevron-down"></span></a>
         <ul class="nav child_menu">
           <li><a href="{{ route('formularioaluno') }}">Cadastro de Alunos</a></li>
           <li><a href="{{ route('formulariochamada') }}">Realizar Chamada</a></li>
         </ul>
       </li>
       <li><a><i class="fa fa-table"></i> Tabelas <span class="fa fa-chevron-down"></span></a>
         <ul class="nav child_menu">
         <li><a href="{{ route('tabelacliente')}}">Tabela Clientes</a></li>
         </ul>
       </li> --}}
     </ul>
   </div>
 </div>
 <!-- /sidebar menu -->