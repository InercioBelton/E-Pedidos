<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>E-Pedido - Pedidos e Reservas Online</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        

        {!!Html::style("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css")!!}

        {!!Html::style("https://fonts.googleapis.com/css?family=Poiret+One")!!}

        {!!Html::style("https://fonts.googleapis.com/css?family=Architects+Daughter")!!}

        {!!Html::style("dist/sweetalert.css")!!}

        {!!Html::script("https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js")!!}

        {!!Html::script("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js")!!}

        {!!Html::script("dist/sweetalert.min.js")!!}

        {!!Html::script("dist/sweetalert-dev.js")!!}

        {!!Html::style("style.css")!!}

        {!!Html::style('http://fonts.googleapis.com/css?family=Oxygen:400,300,700')!!}

        {!!Html::style('http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,900,700,700italic,900italic')!!}

        {!!Html::style('http://fonts.googleapis.com/css?family=Niconne')!!}




    </head>
    <body>
          <header id="myHeader">
                    <div class="headbar">

                      <div class="fullbg">

                          <div class="row">

                               <div class="col-md-2 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-8">

                                   <h1 class="logo">E-Pedido</h1>

                              </div>

                               <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">

                                   <nav class="navi navbar navbar-default" role="navigation"> 

                                         <div class="navbar-header">

                                               <button type="button" class="navbar-toggle collapsed navb" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

                                         </div>

                                        <div class="menubox collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                               <ul class="nav navbar-nav menu">

                                                      <li><a href="#myHeader">Home</a></li>

                                                      <li><a href="#menu">Menu</a></li>

                                                      <li><a href="#tituloReserva">Reservar Mesa</a></li>

                                                      <li><a href="#tituloContacte">Contacte Nos</a></li>

                                              </ul>

                                         </div>

                                    </nav>

                              </div>

                          <div class="col-md-8 col-md-offset-2 col-xs-12 text-center text-banner">

                            <h2>Bem Vindo</h2>

                            <p id="subtituloHeader">Encontre aqui as melhores pizzas da cidade</p>

                          </div>

                        </div>

                    </div>

               </div>

        </header>



            <section class="cardapio">
    
                <div class="container">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <h1 id="menu" >Menu</h1>
                                </div>
                                </div>
                                     <div class="col-md-12 menu-list ">
                                        <div id="meuMenu">
                                        <ul class="nav nav-tabs">
                                               <li class="active"><a data-toggle="tab" href="#home">Pizzas</a></li>

                                               <li><a data-toggle="tab" href="#menu1">Bebidas</a></li>

                                               <li><a data-toggle="tab" href="#menu2">Pratos</a></li>

                                               <li><a data-toggle="tab" href="#menu3">Burguers</a></li>
                                        </ul>

                          <div class="tab-content">
                                             <div id="home" class="tab-pane fade in active">
                                               <ul class="listaProdutos">
                                                     @foreach($categorias as $Categoria)
                                                           @if($Categoria->descricao == "Pizzas")

                                              @foreach($produtos as $Produtos)
                                          @if($Produtos->categoria_id == $Categoria->id)

                                         <li>
                                             <p class="menuname">{!! $Produtos->nomeProduto  !!}</p>  

                                             <p class="price"> {!! $Produtos->preco !!} Mtn
                                              <button class="addCart glyphicon glyphicon-plus"></button>
                                              </p>
                                                                  
                                        </li>
                                                                  
                                        @endif

                                     @endforeach

                                    @endif
                                @endforeach
                                  

                                         
                                                      </ul>

                                                    </div>

                                                     <div id="menu1" class="tab-pane fade">


                                                      <ul class="listaProdutos">
                                                      
                                                       @foreach($categorias as $Categoria)
                                                           @if($Categoria->descricao == "Bebidas")

                                                               @foreach($produtos as $Produtos)
                                                                 @if($Produtos->categoria_id == $Categoria->id)
                                                                      <li>


                                                                  <p class="menuname">{!! $Produtos->nomeProduto !!}</p>

                                                <p class="price"> {!! $Produtos->preco !!} Mtn

                                                 <button class="addCart glyphicon glyphicon-plus"></button>

                                                </p>

                                                                  </li>
                                                                  
                                                                 @endif

                                                                 @endforeach

                                                                 @endif
                                                      @endforeach
                                                     
                                            </ul>

                                          </div>



                                                    <div id="menu2" class="tab-pane fade">


                                                      <ul class="listaProdutos">
                                                      
                                                       @foreach($categorias as $Categoria)
                                                           @if($Categoria->descricao == "Pratos")

                                                               @foreach($produtos as $Produtos)
                                                                 @if($Produtos->categoria_id == $Categoria->id)
                                                                      <li>


                                             <p class="menuname">{!! $Produtos->nomeProduto !!}</p>

                                             <p class="price"> {!! $Produtos->preco !!} Mtn

                                              <button class="addCart glyphicon glyphicon-plus"></button>

                                             </p>

                                                                  </li>
                                                                  
                                                                 @endif

                                                                 @endforeach

                                                                 @endif
                                                      @endforeach
                                                     
                                            </ul>

                                          </div>

                                          <div id="menu3" class="tab-pane fade">

                                            <ul class="listaProdutos">

                                                     @foreach($categorias as $Categoria)
                                                           @if($Categoria->descricao == "Burguers")

                                                               @foreach($produtos as $Produtos)
                                                                 @if($Produtos->categoria_id == $Categoria->id)
                                                                      <li>


                                                      <p class="menuname">{!! $Produtos->nomeProduto !!}</p>

                                                     <p class="price"> {!! $Produtos->preco !!} Mtn

                                                      <button class="addCart glyphicon glyphicon-plus"></button>

                                                     </p>

                                                                  </li>
                                                                  
                                                                 @endif

                                                                 @endforeach

                                                                 @endif
                                                      @endforeach

                                            </ul>

                                          </div>

                                        </div>

                                      </div> 

                                    </div>



                                </div>

                                 <div>
                                   <div class="row">
                                    <div class="col-md-6">
                                        <h1 id="tituloMeuPedido">Meu Pedido</h1>

                                        <div class="col-md-10 col-md-offset-2" id="meuPedido">
                                          

                                     </div>
                                        <div class="forming col-md-2 col-md-offset-4">

                                                    <button id="btPedido" type="submit" class="btn">Fazer Pedido!</button>

                                                  </div>
                                   </div>
                                </div>
                              
                                     
                                 

                              </div>

                       </div>

                       

                       </section>

             <!-- Pizzas que aparecem em destaque -->

             <section class="destaque" style="margin-top: 30px;">
                    <div id="rowReserva" class="row" style=" background: rgba(1,1,1,.7);">
                         <div class="col-md-offset-2">
                            <ul class="team-list">
          
                                 <li class="col-md-3 listaDestaque">
                                    <div class="team-item thumbnail">
                                        <a href="" class="thumb-info team">
                                             <img alt="" height="270" src="images/nobre.jpg">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Pizzas Em Promoção</span>
                                            </span>
                                        </a>
                                        <div class="thumb-info-caption">
                                            <p class="txtItems">
                                                4 Estaçoes<br>
                                                Alcatra<br>
                                                Americana<br>
                                                Mexicana<br>
                                                Vegetariana<br>
                                            </p>
                                          
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="col-md-3 listaDestaque" >
                                    <div class="team-item thumbnail">
                                        <a href="" class="thumb-info team">
                                            <img alt="" height="270" src="images/mussarela.jpg">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Pizzas Tradicionais</span>
                                        </a>
                                        <div class="thumb-info-caption">
                                            <p class="txtItems">
                                                Frango<br>
                                                Marguerita<br>
                                                Milho Verde<br>
                                                Napolitana<br>
                                                Palmito<br>
                                                Peperoni<br>
                                                Presunto<br>
                                            </p>


                                        
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3 listaDestaque">
                                    <div class="team-item thumbnail">
                                        <a href="" class="thumb-info team">
                                            <img alt="" height="270" src="images/especiais.jpg">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Pizzas Especiais</span>
                                            </span>
                                        </a>
                                        <div class="thumb-info-caption">
                                            <p class="txtItems">
                                                4 Queijos<br>
                                                Atum<br>
                                                Canadense<br>
                                                Champignon Especial<br>
                                                Frango e Queijo Cheddar<br>
                                                Pepperoni e queijo<br>
                                                Portuguesa<br>
                                                Tomates Secos<br>
                                            </p>
                                          
                                        </div>
                                    </div>
                                </li>                     
                            </ul>
                          </div>
                         </div>
                       </section>
                      
                         <!-- Reservar Mesa -->

                              <div class="row" style="background-color: #fbf1d1"> 
                                   <section class="reserva col-md-10 col-md-offset-1">
                                       <p id="tituloReserva">Reserve a sua mesa!</p>
                                             
                                          {!!Form::open(['route'=>'reserva.store', 'method'=>'POST'])!!}

                                               <div class="form">

                                                  @if($errors->any())
                                                      <div class="alert alert-danger">
                                                          @foreach($errors->all() as $error)
                                                              <p>{{ $error }}</p>
                                                          @endforeach
                                                      </div>
                                                  @endif

                                                  <div class="flash-message">
                                                 @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                   @if(Session::has('alert-' . $msg))

                                                   <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                                   @endif
                                                 @endforeach
                                               </div>

                                        <div class="col-md-10 col-md-offset-1 forming">

                                              <form role="form">

                                                <div class="col-md-6 col-sm-6">

                                                  <div class="form-group">

                                                    {!!Form::text('nomeCliente',null,['class'=>'form-control','placeholder'=>'Digite o seu nome'])!!}

                                                  </div>

                                                  <div class="form-group">

                                                    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Digite o seu email'])!!}

                                                  </div>

                                                  <div class="form-group">

                                                    {!!Form::text('telefone',null,['class'=>'form-control','placeholder'=>'Digite o seu numero de telefone'])!!}

                                                  </div>

                                                </div>

                                                <div class="col-md-6 col-sm-6">

                                                  <div class="form-group">

                                                    {!!Form::date('data',null,['class'=>'form-control'])!!}

                                                  </div>

                                                  <div class="form-group">

                                                   {!!Form::time('hora',null,['class'=>'form-control'])!!}

                                                  </div>

                                                  <div class="form-group">

                                                    {!!Form::number('nrAcompanhantes',null,['class'=>'form-control','placeholder'=>'Digite o numero de acompanhantes'])!!}


                                                  </div>

                                                </div>

                                                <div class="col-md-12 col-sm-12">

                                                  <div class="form-group">

                                                    {!!Form::textarea('observacao',null,['class'=>'form-control','rows'=>'8','placeholder'=>'Observacoes e preferencias'])!!}

                                                  </div>

                                                  <div class="text-center">

                                                    <button type="submit" class="btn">Reservar</button>

                                                  </div>

                                                </div>

                                              </form>

                                            </div>   

                                {!!Form::close()!!}   

                                    </section>
                              </div>
                      


                              <!-- Contacte Nos -->

                               <div class="row" style="background: rgba(1,1,1,.95);">

                                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                                              <h3 id="tituloContacte">Contacte Nos</h3>

                                              </div>

                                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                                              <div class="col-md-6 col-sm-6 address">

                                                <p>Email - inercio28@gmail.com, outros..</p>

                                                <p>Telefones - +258825823292, outros..</p>

                                                <p>Something else....</p>

                                              </div>

                                            </div>

                                          </div>
    

            
            <!-- Footer -->
        <footer class="container-fluid bg-4 text-center">
            <a class="up-arrow" href="#myHeader" data-toggle="tooltip" title="TOPO">
                <span class="glyphicon glyphicon-chevron-up"></span><br>  

            </a>
            <p> &copy 2016 - WebTraining - Grupo 6 </p>

            <!--  -->
        </footer>
        
    </body>
    
    
     <script>
            $(document).ready(function () {
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a").on('click', function (event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });

                $(window).scroll(function () {
                    $(".slideanim").each(function () {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            });
        </script>
    
        
</html>