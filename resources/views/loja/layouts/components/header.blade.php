<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
           
           <p><strong>🤖Fale com o Bob 021 97657-9430</strong></p>
              <p><strong> Email: aercaricaturasonline03@gmail.com</strong></p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
               
              @Auth()

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="{{route('login')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
🙂 Bem vindo , {{ auth()->user()->name }}
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{route('login')}}"> Acompanhar Pedido</a>
<a class="dropdown-item" href="{{route('login')}}"> Hostórico de Compra</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="{{route('login')}}"> Logoff</a>
</div>
</li>

@endauth
                
                @guest()
                <li>
                  <a href="{{route('login')}}">
                  👤 Olá , Faça seu login ou cadastre-se   
                  </a>
                </li>
                @endguest
                
                <li>
                <a href="{{route('contact')}}">
                    Pedido Personalizados
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
          <a class="navbar-brand logo_h" href="{{route ('home')}}">
            <img src="img/logo.png" alt="aer caricaturas online"/>
          </a>
           
          <!-- menu  -->
          <div id='cssmenu'>
<ul>
   <li><a href="{{route ('home')}}"><strong>Inicio</strong></a></li>
   <li class='active has-sub'><a href=''><strong>Caricaturas</strong></a>
      <ul>
         <li class='has-sub'><a href=''>Caricaturas Digitais</a>
            <ul>
            <li><a href=''>🧑🏻 Individual</a></li>
            <li><a href=''>👩🏻‍🏫 Temáticas </a></li>
            <li><a href=''>💑 Casal</a></li>
            <li><a href=''>👧🏻 Infantil </a></li>
            <li><a href=''>🤵🏻👰🏻 Noivos</a></li>
            <li><a href=''>🎈  Aniversários</a></li>
            <li><a href=''>🎓 Formatura</a></li>
            <li><a href=''>👯🏻‍♀️ Eventos</a></li>
            <li><a href=''>👨‍👩‍👧‍👦 Grupos</a></li>
            <li><a href=''>🐾 Pet's</a></li>
            </ul>

          
         </li>
         <li class='has-sub'><a href=''>Mascotes 2D</a>
            <ul>
            <li><a href=''>Mascotes Pessoas</a></li>
            <li><a href=''>Mascotes Veículos </a></li>
            <li><a href=''>Mascotes Pet's  </a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href="{{route('about.index')}}"><strong>loja A&R </strong></a></li>
   <li><a href="{{route('about.index')}}"><strong>Estúdio</strong></a></li>
   <li><a href="{{route('contact')}}"><strong>Contatos</strong></a></li>
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
  

