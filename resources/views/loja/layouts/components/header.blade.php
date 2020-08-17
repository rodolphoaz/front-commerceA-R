<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
           
           <p><strong>Fale com o bob -> 021 981840572 </strong></p>
              <p><strong> Email: aercaricaturasonline03@gmail.com</strong></p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
               
                @Auth()
                <li>
                  <a href="{{route('login')}}">
               Olá , Acompanhe seu pedido
                  </a>
                </li>
                @endauth
                
                @guest()
                <li>
                  <a href="{{route('login')}}">
                Olá , Bem vindo , Logar
                  </a>
                </li>
                @endguest
                
                <li>
                <a href="{{route('contact')}}">
                    Fazer Pedido online
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
          <a class="navbar-brand logo_h" href="#">
            <img src="img/logo.png" alt="aer caricaturas online" />
          </a>
           
          <!-- menu  -->
          <div id='cssmenu'>
            <ul>
               <li><a href="{{route ('home')}}"><strong>Inicio</strong></a></li>
               <li class='active has-sub'><a href=''><strong>Caricaturas</strong></a>
                  <ul>
                     <li class='has-sub'><a href=''>Caricaturas na Caneca </a>
                      
                        <ul>
                           <li><a href="{{route ('product.index')}}">Caricatura Individual</a></li>
                           <li><a href="{{route ('Mugtema.index')}}">Caricatura Temática </a></li>
                           <li><a href="{{route ('Muginfantil.index')}}">Caricatura Infantil </a></li>
                           <li><a href="{{route ('Casal.index')}}">Caricatura Casal</a></li>
                        </ul>
                     </li>
                     <li class='has-sub'><a href=''>Caricaturas Digital</a>
                        <ul>
                          <li><a href=''>Individual</a></li>
                          <li><a href=''>Temática </a></li>
                          <li><a href=''>Casal </a></li>
                          <li><a href=''>Infantil </a></li>
                          <li><a href=''>Noivos</a></li>
                          <li><a href=''>Aniversários</a></li>
                          <li><a href=''>Formaturas</a></li>
                          <li><a href=''>Eventos</a></li>
                          <li><a href=''>Datas Especiais</a></li>
                          <li><a href=''>Grupos</a></li>
                          <li><a href=''>Pet's</a></li>
                        </ul>
                     </li>
                    <li class='has-sub'><a href=''>Caricaturas na Moldura</a>
                    <ul>
                           <li><a href=''>Caricatura Individual</a></li>
                           <li><a href=''>Caricatura Temática </a></li>
                           <li><a href=''>Caricatura Infantil </a></li>
                           <li><a href=''>Caricatura Casal</a></li>
                    </ul>
                 </li>
                 <li class='has-sub'><a href=''>Mascotes 2D</a>
                    <ul>
                           <li><a href=''>Caricatura Individual</a></li>
                           <li><a href=''>Caricatura Temática </a></li>
                           <li><a href=''>Caricatura Infantil </a></li>
                           <li><a href=''>Caricatura Casal</a></li>
                    </ul>
                 </li>
                  </ul>
               </li>
                    <li class='has-sub'><a href=''><strong>Loja</strong> </a>
                        <ul>
                           <li><a href='shopping.html'>Shopping A&R</a></li>
                           <li><a href='cart.html'>Resumo de pedido</a></li>
                           <li><a href='checkout.html'>Produtos checkout </a></li>
                           
                        </ul>
                     </li>
                     <li class='has-sub'><a href=''><strong> Estúdio </strong></a>
                      <ul>
                        {{-- 
                          As rotas se criam seguinto o padrao  de funcao 
                          dentro da funcao route(nomedarota) voce adiciona o 
                          Route::get()->name('nomedarota') no arquivo web.php
                        --}}
                    
                      <li><a href="{{route('about.index')}}">Como tudo começou</a></li>
                        
                      </ul>
                   </li>
                  <li><a href="{{route('contact')}}"><strong>Pedir Online</strong></a></li>
            </ul>
            </div>
         <br>
         <div class="col-lg-5 pr-0">
          <ul class="nav navbar-nav navbar-right right_nav pull-right">
            <li class="nav-item">
             <a href="" class="icons">
       
            <i class="ti-search" aria-hidden="true"data-toggle="tooltip" data-placement="top" title="Buscar Produtos"></i>
           </a>
          </li>
          <!-- -->
          @Auth()
               
               <li class="nav-item">
               <a href="" class="icons">
                 <i class="fa-user" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Olá bem vindo!"> Bem vindo </i>
               </a>
             </li>
                 @endauth
                 
                 @guest()
                 <li class="nav-item">
               <a href="{{route('login')}}" class="icons">
                 <i class="ti-user" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Faça o login para acessar"></i>
               </a>
             </li>
                 @endguest
 
             <!-- -->
   
           <!-- -->
              @Auth()
               
              <li class="nav-item">
              <a href="" class="icons">
              <i class="ti-heart" aria-hidden="true" data-toggle="popover" title="Olá , você Amou :" data-content="Caricaturas"></i>
              </a>
            </li>
           
                @endauth
                
                @guest()
                <li class="nav-item">
              <a href="{{route('login')}}" class="icons">
              <i class="ti-heart" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Meus Favoritos"></i>
              </a>
            </li>
                @endguest

                <script>
                $(document).ready(function(){
                $('[data-toggle="popover"]').popover();
                });
                 </script>
            <!-- -->
           
                       <li class="nav-item">
              <a href="" class="icons">
                <i class="ti-shopping-cart" aria-hidden="true" data-toggle="popover" title="Seu carrinho esta vazio" data-content="0"></i>
                <span class="count_wishlist"><sup><strong> 0 </strong></sup></span>
              </a>
              
            </li>
          </ul>
        </div>
        </nav>
      </div>
    </div>
   </header>
  <!--================Header Menu Area =================-->
  