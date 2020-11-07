

<style>
@import url(https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap);

:after,
:before {
  box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
  content: '';
  display: table
}

.clearfix:after {
  clear: both;
  display: block
}
ul{
	list-style:none;
	margin: 0;
	padding: 0;
}
a, a:hover, a.active, a:active, a:visited, a:focus{
	color:#2c3234;
	text-decoration:none;
}
.content{
	margin: 50px 100px 0px 100px;
}

.exo-menu{
	width: 190%;
	float: left;
	list-style: none;
	position:relative;
	background: #1c2224;
}
.exo-menu > li {	display: inline-block;float:center;}
.exo-menu > li > a{
	color: rgb(255, 255, 255);
	text-decoration: none;
	text-transform: capitalize;
	border-right: 0px #365670 dotted;
	-webkit-transition: color 0.2s linear, background 0.2s linear;
	-moz-transition: color 0.2s linear, background 0.2s linear;
	-o-transition: color 0.2s linear, background 0.2s linear;
	transition: color 0.2s linear, background 0.2s linear;
}
.exo-menu > li > a.active,
.exo-menu > li > a:hover,
li.drop-down ul > li > a:hover{
	background:chocolate;
	color:rgb(255, 255, 255);
}
.exo-menu i {
  float: center;
  font-size: 18px;
  margin-right: 6px;
  line-height: 20px !important;
}
li.drop-down,
.flyout-right,
.flyout-left{position:relative;}
li.drop-down:before {
  content: "\f103";
  color: #fff;
  font-family: "Fredoka One";
  font-style: normal;
  display: inline;
  position: absolute;
  right: 6px;
  top: 20px;
  font-size: 14px;
}
li.drop-down>ul{
	left: 0px;
	min-width: 230px;

}
h4.row.mega-title {
  color:#eee;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: capitalize;
  border-bottom: 0px solid #ccc;
 }

/*mega menu*/

.mega-menu {
  left: 0;
  right: 0;
  padding: 15px;
  display:none;
  padding-top: 0;
  min-height: 100%;

}
h4.row.mega-title {
  color: #eee;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: capitalize;
  border-bottom: 1px solid #547787;
  padding-top: 15px;
  background-color: #365670
  }
 .mega-menu ul li a {
  line-height: 17px;
  font-size: 102%;
  display: block;
}
ul.stander li a {
    padding: 3px 0px;
}


ul.icon-des li a i {
    color: #fff;
    width: 35px;
    height: 35px;
    border-radius: 10%;
    text-align: center;
    background-color: #cdcdcd;
    line-height: 35px !important;
}

ul.icon-des li {
    width: 100%;
    display: table;
    margin-bottom: 11px;
}

/*common*/
.flyout-right ul>li>a ,
.flyout-left ul>li>a,
.flyout-mega-wrap,
.mega-menu{
	background-color: #fff;
}

/*hover*/
.Blog:hover,
.Images:hover,
.mega-menu:hover,
.drop-down-ul:hover,
li.flyout-left>ul:hover,
li.flyout-right>ul:hover,
.flyout-mega-wrap:hover,
li.flyout-left a:hover +ul,
li.flyout-right a:hover +ul,
.blog-drop-down >a:hover+.Blog,
li.drop-down>a:hover +.drop-down-ul,
.images-drop-down>a:hover +.Images,
.mega-drop-down a:hover+.mega-menu,
li.flyout-mega>a:hover +.flyout-mega-wrap{
	display:block;
}
/*responsive*/
 @media (min-width:767px){
	.exo-menu > li > a{
	display:block;
	padding: 8px 22px;
 }
.mega-menu, .flyout-mega-wrap, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:absolute;
}
 .flyout-right>ul{
	left: 100%;
	}
	.flyout-left>ul{
	right: 100%;
}
 }
@media (max-width:767px){

	.exo-menu {
		min-height: 58px;
		background-color: #23364B;
		width: 100%;
	}
	
	.exo-menu > li > a{
		width:190% ;
	    display:none ;
	
	}
	.exo-menu > li{
		width:100%;
	}
	.display.exo-menu > li > a{
	  display:block ;
	  	padding: 7px 22px;
	}
	
.mega-menu, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:relative;
}

}
a.toggle-menu{
    position: absolute;
    right: 0px;
    padding: 20px;
    font-size: 27px;
    background-color: #cecece;
    color: #23364B;
    top: 0px;

    a.toggle-menu{
    position: absolute;
    right: 0px;
    padding: 20px;
    font-size: 27px;
    background-color: #ccc;
    color: #23364B;
    top: 0px;
}
}</style>
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
            <p><img src="img/icontopo/bobwhats.png" alt="whatsappbob"/><strong> Fale com o Bob 021 97657-9430 </strong></p>
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
                <a href="{{route('login')}}"> Olá, Login | Registro   
                  </a>
                  
                </li>
                @endguest
                
                <li>
                <a href="{{route('contact')}}">
                <img src="img/icontopo/bobcall.png" alt="whatsappbob"/> Pedido Personalizados
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
   	 
	
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-500">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{route ('home')}}">
            <img src="img/logolinhanatal.png" alt="aer caricaturas online natal"/>
          </a>
         
          <!-- menu  -->
          <div id='mega-drop-down'>
          <body class="background">
	         <div class="content">
	 
		<ul class="exo-menu">
			<li><a class="active" href="{{route ('home')}}"><i class="fa fa-home"></i> Home</a></li>
			
			<li class="mega-drop-down"><a href=''><i class="fa fa-list"></i>Shopping A&R</a>
				<div class="animated fadeIn mega-menu">
					<div class="mega-menu-wrap">
						<div class="row">
           
				
						<div class="col-md-4">
							<h4 class="row mega-title">Projetos Recentes</h4>
               <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('/img/product/new-product/enf001.png')}}"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('img/product/new-product/poderoso002.png')}}"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/img/product/new-product/infantil001.png')}}"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <a class="view-more btn btn-sm " href="{{route ('produto.show')}}"><i class="fa fa-shopping-cart"></i>veja nosso shopping</a>

  <!--/.Controls-->
</div>
</div>
					
							<div class="col-md-3">
									<h4 class="row mega-title">Caricaturas Digitais |</h4>
								<ul class="stander">
                  <li><a href="{{route('caindividuals.index')}}">Individual</a></li>
                  <li><a href="{{route('catematicas.index')}}">Temáticas</a></li>
                  <li><a href="{{route('cacasals.index')}}">Casal</a></li>
                  <li><a href="{{route('cainfantils.index')}}">Infantil</a></li>
                  <li><a href="{{route('canoivos.index')}}">Noivos</a></li>
                  <li><a href="{{route('caanivers.index')}}">Aniversários</a></li>
                  <li><a href="{{route('caformaturas.index')}}">Formatura</a></li>
                  <li><a href="{{route('caprofissoes.index')}}">Profissões</a></li>
                  <li><a href="{{route('capets.index')}}">Pet's</a></li>
								</ul>
              
											 
								
              </div>
            
							
             
              <div class="col-md-3">
                <h4 class="row mega-title">Caricaturas ao vivo |</h4>
              <ul class="stander">
                <li><a href="{{route('eventos.index')}}">Eventos</a></li>
                <li><a href="{{route('grupos.index')}}">Grupos</a></li>
           
              </ul>
            </div>
            <div class="col-md-2">
              <h4 class="row mega-title">Mascote 2D |</h4>
            <ul class="stander">
            <li><a href="{{route('pessoas.index')}}">Mascotes Pessoas</a></li>
            <li><a href="{{route('veiculos.index')}}">Mascotes Veículos </a></li>
            <li><a href="{{route('animais.index')}}">Mascotes Pet's  </a></li>
            
            </ul>
            
          </div>
								
      <li><a href="{{route('about.index')}}">Estúdio A&R</a>
      <li><a href="{{route('contact')}}">Contatos</a> 
      
		</div>
			</li>
				</ul>
	      	</div>
	 

<!--fim do menu-->

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
  

