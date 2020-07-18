<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p><strong> whatsapp: 021 981840572 / 974096349 </p>
              <p> Email: aercaricaturasonline03@gmail.com</strong></p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="tracking.html">
                    Acompanhar pedido
                  </a>
                </li>
                <li>
                <a href="{{route('contact')}}">
                    Fazer Pedido
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-500">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="img/logo.png" alt="aer caricaturas online" />
          </a>
           
          <!-- menu  -->
          <div id='cssmenu'>
            <ul>
               <li><a href='index.html'><strong>Inicio</strong></a></li>
               <li class='active has-sub'><a href='#'><strong>Caricaturas</strong></a>
                  <ul>
                     <li class='has-sub'><a href='#'>Caricaturas na Caneca </a>
                      
                        <ul>
                           <li><a href='canecas_tematica.html'>Caricatura Temática</a></li>
                           <li><a href='canecas_corpinho.html'>Caricatura Corpinho </a></li>
                           <li><a href='canecas_busto.html'>Caricatura Busto </a></li>
                           <li><a href='canecas_casal.html'>Caricatura Casal</a></li>
                        </ul>
                     </li>
                     <li class='has-sub'><a href='#'>Caricaturas Digital</a>
                        <ul>
                          <li><a href='cari_rb_digital.html'>Busto ou Rosto</a></li>
                          <li><a href='cari_corpinho_digital.html'>Corpinho </a></li>
                          <li><a href='cari_casal_digital.html'>Casal </a></li>
                          <li><a href='cari_noivos_digital.html'>Noivos</a></li>
                          <li><a href='cari_aniver_digital.html'>Aniversários</a></li>
                          <li><a href='cari_format_digital.html'>Formaturas</a></li>
                          <li><a href='cari_eventos_digital.html'>Eventos</a></li>
                          <li><a href='cari_dtespecial_digital.html'>Datas Especiais</a></li>
                          <li><a href='cari_grupos_digital.html'>Grupos</a></li>
                          <li><a href='cari_pet_digital.html'>Pet's</a></li>
                        </ul>
                     </li>
                     <li class='has-sub'><a href='#'>Caricaturas á lápis </a>
                      <ul>
                        <li><a href='cari_cobr_lapis.html'>Busto ou Rosto</a></li>
                        <li><a href='cari_corp_lapis.html'>Corpinho </a></li>
                        <li><a href='cari_casal_lapis.html'>Casal </a></li>
                        <li><a href='cari_noivos_lapis.html'>Noivos</a></li>
                        <li><a href='cari_aniver_lapis.html'>Aniversários</a></li>
                        <li><a href='cari_format_lapis.html'>Formaturas</a></li>
                        <li><a href='cari_event_lapis.html'>Eventos</a></li>
                        <li><a href='cari_dtesp_lapis.html'>Datas Especiais</a></li>
                        <li><a href='cari_grupo_lapis.html'>Grupos</a></li>
                        <li><a href='cari_pet_lapis.html'>Pet's</a></li>
                      </ul>
                   </li>
                   <li class='has-sub'><a href='#'>Caricaturas no quadro</a>
                    <ul>
                           <li><a href='quadro_tematico.html'>Caricatura Temática</a></li>
                           <li><a href='quadro_corpinho.html'>Caricatura Corpinho </a></li>
                           <li><a href='quadro_busto.html'>Caricatura Busto </a></li>
                           <li><a href='quadro_casal.html'>Caricatura Casal</a></li>
                    </ul>
                 </li>
                  </ul>
               </li>
                    <li class='has-sub'><a href='#'><strong>Loja</strong> </a>
                        <ul>
                           <li><a href='shopping.html'>Shopping A&R</a></li>
                           <li><a href='cart.html'>Resumo de pedido</a></li>
                           <li><a href='checkout.html'>Produtos checkout </a></li>
                           
                        </ul>
                     </li>
                     <li class='has-sub'><a href=''><strong>Estúdio</a></strong>
                      <ul>
                      <li><a href='{{route('about.index')}}'> A&R Como tudo começou</a></li>
                        
                      </ul>
                   </li>
                  <li><a href='{{route('contact')}}'><strong>Pedir Online</li></strong>
            </ul>
            </div>
         <br>
         <div class="col-lg-5 pr-0">
          <ul class="nav navbar-nav navbar-right right_nav pull-right">
            <li class="nav-item">
              <a href="#" class="icons">
                <i class="ti-search" aria-hidden="true"data-toggle="tooltip" data-placement="top" title="Buscar Produtos"></i>
                   </a>
            </li>
            @guest()
            <li class="nav-item">
              
              <a href="{{route('login')}}" class="icons">
                <i class="ti-user" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Fazer Login"></i>
              </a>
            </li>
            @endguest
            <li class="nav-item">
              <a href="#" class="icons">
                <i class="ti-heart" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Amei"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="icons">
                <i class="ti-shopping-cart" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Carrinho de compras"></i>
                <span class="badge badge-light">0</span>
              </a>
            </li>
          </ul>
        </div>
        </nav>
      </div>
    </div>
   </header>
  <!--================Header Menu Area =================-->