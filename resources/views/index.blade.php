                                <? $reservaPedido; ?>

                                    <!DOCTYPE html>
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

                                                                   <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8">

                                                                       <h1 class="logo">{!! $nome !!} <a id="logoOut" href="{{ url('/logout') }}">~ Logout</a> </h1>

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

                                                                                          <li><a href="#linkReserva">Reservar Mesa</a></li>

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

                                                                                         <a class="addCart glyphicon glyphicon-chevron-right" href="cart/{{ $Produtos->id }}?cod={{ $Produtos->id }}&userID={{$id}}"></a>
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

                                                                                                                          <a class="addCart glyphicon glyphicon-chevron-right" href="cart/{{ $Produtos->id }}?cod={{ $Produtos->id }}&userID={{$id}}"></a>

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

                                                                                                               <a class="addCart glyphicon glyphicon-chevron-right" href="cart/{{ $Produtos->id }}?cod={{ $Produtos->id }}&userID={{$id}}"></a>

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

                                                                                                               <a class="addCart glyphicon glyphicon-chevron-right" href="cart/{{ $Produtos->id }}?cod={{ $Produtos->id }}&userID={{$id}}"></a>

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


                                                            <!------------------------------------------------------- Cart ---------------------------------------------->



                                                            <div>
                                                                       <div class="row">
                                                                        <div class="col-md-6">
                                                                            <h1 id="tituloMeuPedido">Meu Pedido</h1>

                                                                            <div class="colapsable col-md-10 col-md-offset-2  tab-content">


                                                                                    <div class="panel-group" id="accordion"  style="margin: 0; background: white;">


                                                                                        <div class="panel panel-default" id="meuPedido" style="margin:0;">


                                                                                            <div class="panel-heading corHeading">
                                                                                                <h4 class="panel-title corHeading">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style=" color: #2b2d2f; font-size: 12px;" >1. Seleccionar de Items  <span class="
glyphicon glyphicon-shopping-cart"></span></a></a>
                                                                                                </h4>

                                                                                            </div>

                                                                                            <div id="collapse1" class="panel-collapse collapse in" style="background: white;">
                                                                                                <div class="panel-body" style="border: none;" >

                                                                                                    <div>

                                                                                                        <ul class="listaItems">

                                                                                                            <?php $items = \App\Cart::all() ?>

                                                                                                            @foreach($items as $Cart)

                                                                                                                    @if($Cart->pedidoID == null)
                                                                                                                <li>

                                                                                                                    <p class="menuname">{!! $Cart->quant !!}  {!! $Cart->nomeProd !!}</p>

                                                                                                                    <p class="price"> {!! $Cart->price !!} Mtn

                                                                                                                        <a class="addCart glyphicon glyphicon-chevron-left" href="removeCart/{{ $Cart->id }}"></a>

                                                                                                                    </p>

                                                                                                                </li>

                                                                                                                    @endif
                                                                                                            @endforeach
                                                                                                        </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>



                                                                                            <div class="panel-heading corHeading">
                                                                                                <h4 class="panel-title corHeading">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style=" color: #2b2d2f; font-size: 12px;" >2. Preencher Detalhes  <span class="glyphicon glyphicon-list-alt"></span> </a>
                                                                                                </h4>

                                                                                            </div>
                                                                                            <div id="collapse2" class="panel-collapse collapse" style="background: white;">
                                                                                                <div class="panel-body" style="border: none; height: 200px;" >

                                                                                                    <div>
                                                                                                        {!!Form::open(['url'=>'fazerPedido/'.$id, 'method'=>'POST'])!!}
                                                                                                            <label class='corDetalhes horaPedido'>Indique a hora em que gostaria de ter o seu pedido pronto</label>
                                                                                                            <div class='form-group forming'><input type='time' name='horaPedido' class='form-control'></div>
                                                                                                            <div class='form-group forming'>
                                                                                                                <textarea id='txtObsPedido' name='preferencias'  class='form-control' rows='6' placeholder='Observacoes e preferencias...'></textarea>
                                                                                                            </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                </div>
                                                                                    </div>
                                                                                </div>



                                                                                {{--Botao fazer Pedido--}}


                                                                            <div class="row">
                                                                            <div id="fazerReserva" class="forming col-md-12 col-md-offset-2">


                                                                                <?php $items = \App\Cart::all();

                                                                                $total = 0; ?>


                                                                                @foreach($items as $Cart)
                                                                                        @if($Cart->pedidoID == null)
                                                                                        <?php
                                                                                    $preco = $Cart->price;

                                                                                     $total = $total + $preco; ?>
                                                                                        @endif
                                                                                @endforeach


                                                                                <div class="col-md-5 precoTotal">
                                                                                <h3><span class="corTotal">Total: </span>{!! $total  !!} Mts</h3>
                                                                                </div>

                                                                                <div class="col-md-2" id="botaoPedido">

                                                                                    <button type="submit" id="btPedido" class="btn">Fazer Pedido!</button>

                                                                           </div>

                                                                                    {!!Form::close()!!}
                                                                                </div>
                                                                       </div>


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
                                                                <ul class="listaUl">

                                                                     <li class="col-md-3 listaDestaque" id="primeiroDestaque">
                                                                        <div class="team-item thumbnail">
                                                                            <a class="thumb-info team">
                                                                                 <img alt="" height="270" src="images/nobre.jpg">
                                                                                <span class="thumb-info-title">
                                                                                    <span class="thumb-info-inner">Pizzas Em Promoção</span>
                                                                                </span>
                                                                            </a>
                                                                            <div class="thumb-info-caption">
                                                                                <p class="txtItems">
                                                                                    4 Estaçoes<br>
                                                                                    Hawaiian<br>
                                                                                    Americana<br>
                                                                                    Mexicana<br>
                                                                                    Vegetariana<br>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="col-md-3 listaDestaque" >
                                                                        <div class="team-item thumbnail">
                                                                            <a class="thumb-info team">
                                                                                <img alt="" height="270" src="images/mussarela.jpg">
                                                                                <span class="thumb-info-title">
                                                                                    <span class="thumb-info-inner">Pizzas Tradicionais</span>
                                                                                    </span>
                                                                            </a>
                                                                            <div class="thumb-info-caption">
                                                                                <p class="txtItems">
                                                                                    Frango<br>
                                                                                    Marguerita<br>
                                                                                    Regina<br>
                                                                                    Peperoni<br>
                                                                                    Romana<br>
                                                                                </p>



                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="col-md-3 listaDestaque">
                                                                        <div class="team-item thumbnail">
                                                                            <a class="thumb-info team">
                                                                                <img alt="" height="270" src="images/especiais.jpg">
                                                                                <span class="thumb-info-title">
                                                                                    <span class="thumb-info-inner">Pizzas Especiais</span>
                                                                                </span>
                                                                            </a>
                                                                            <div class="thumb-info-caption">
                                                                                <p class="txtItems">
                                                                                    Chiken & Olives<br>
                                                                                    BBQ Chicken<br>
                                                                                    Bacon e Banana<br>
                                                                                    Pepperoni e queijo<br>
                                                                                    Portuguesa<br>
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                              </div>
                                                             </div>
                                                           </section>



                                                             <!-- Reservar Mesa -->

                                                  <div class="row">

                                              <div class="col-md-12 menu-list " style="height: auto; margin-top:20px;">
                                                  <div id="meuMenu">
                                                      <ul id="linkReserva" class="nav nav-tabs col-md-10 col-md-offset-1">
                                                          <li class="active"><a data-toggle="tab" href="#reserva1">Fazer reserva</a></li>

                                                          <li class=""><a data-toggle="tab" href="#reserva2">Ver minhas reservas</a></li>

                                                      </ul>


                                                      <div class="tab-content">

                                                          <div id="reserva1" class="reserva col-md-10 col-md-offset-1 tab-pane fade in active">

                                                                           <p id="tituloReserva">Reserve a sua mesa!</p>

                                                                              {!!Form::open(['url'=>'reserva/'.$id, 'method'=>'POST'])!!}

                                                                                   <div class="form">

                                                                            <div class="col-md-10 col-md-offset-1 forming">

                                                                                  <form role="form" name="form1">

                                                                                    <div class="col-md-6 col-sm-6">

                                                                                      <div class="form-group">

                                                                                          {!!Form::text('nomeCliente',$nome,['class'=>'form-control','placeholder'=>'Digite o seu nome', 'readonly' => 'true'])!!}

                                                                                      </div>

                                                                                      <div class="form-group">
                                                                                          {!!Form::text('email',$email,['class'=>'form-control','placeholder'=>'Digite o seu email', 'readonly' => 'true'])!!}

                                                                                      </div>

                                                                                      <div class="form-group">

                                                                                        {!!Form::number('telefone',null,['class'=>'form-control','placeholder'=>'Digite o seu numero de telefone'])!!}

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


                                                                                      <!-- Div para mostrar erro na validacao de campos  -->

                                                                                       @if($errors->any())
                                                                                          <div class="alert alert-danger">
                                                                                              @foreach($errors->all() as $error)
                                                                                                  <p>{{ $error }}</p>
                                                                                              @endforeach
                                                                                          </div>
                                                                                      @endif

                                                                                    </div>

                                                                                      </form>

                                                                                </div>

                                                                              {!!Form::close()!!}
                                                                           </div>
                                                              </div>




                                                          {{------------------Lista de Reservas------------------------}}


                                                          <div id="reserva2" class="reserva col-md-10 col-md-offset-1 tab-pane fade">

                                                              <p id="tituloReserva">Lista de Reservas</p>

                                                              <ul class="listaReservas">

                                                                  <?php $listaReservas = \App\Reserva::all(); ?>


                                                                          @foreach($listaReservas as $Reserva)

                                                                              @if($Reserva->userID == $id)
                                                                                  <li id="bglista-reservas">

                                                                                      <div  id="atributosReserva">
                                                                                      <p class="menuname"><span class="corDetalhes"> Data da Reserva: </span>{!! $Reserva->data !!}<br>
                                                                                          <span class="corDetalhes">Hora: </span>{!! $Reserva->hora !!}<br>
                                                                                          <span class="corDetalhes">Numero de Acompanhantes: </span>  {!! $Reserva->nrAcompanhantes !!}<br>
                                                                                          <span class="corDetalhes">Observacoes: </span> <small id="textObs">  {!! $Reserva->observacao !!}</small><br>

                                                                                      </p>
                                                                                      </div>


                                                                                      <p class="price">
                                                                                          <a id="btEditarReserva" class="addCart  glyphicon glyphicon-chevron-left" href="javascript:editar()">Editar</a>
                                                                                          <a id="btCancelarReserva" class="addCart  glyphicon glyphicon-chevron-left" href="javascript:confirmDelete('removeReserva/{{ $Reserva->id }}')">Cancelar</a>

                                                                                      </p>

                                                                                  </li>
                                                                            @endif

                                                                          @endforeach

                                                              </ul>

                                                          </div>


                                                          </div>
                                                      </div>
                                                  </div>
                                                      </div>
                                                  </div>




                                                                  <!-- Contacte Nos -->

                                                                   <div class="row" style="background: rgba(1,1,1,.95);">

                                                                        <div class="col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1">

                                                                            <h3 id="tituloContacte">Contacte Nos</h3>

                                                                        </div>

                                                                          {!!Form::open(['route'=>'comentario.store', 'method'=>'POST'])!!}

                                                                         <div class="form">


                                                                             <div class="col-md-7 col-md-offset-1">


                                                                                  <form role="form" id="form2">

                                                                                      <div class="col-md-5">

                                                                                          <div class="form-group contacte">

                                                                                               {!!Form::text('nome',$nome,['class'=>'form-control',
                                                                                               'placeholder'=>'Digite o seu nome', 'readonly' => 'true'])!!}

                                                                                              </div>

                                                                                              <div class="form-group contacte">

                                                                                                {!!Form::email('email',$email,['class'=>'form-control',
                                                                                                'placeholder'=>'Digite o seu email', 'readonly' => 'true'])!!}

                                                                                              </div>

                                                                                        </div>

                                                                              <div class="col-md-5">

                                                                                   <div class="form-group contacte">

                                                                                       {!!Form::textarea('observacao',null,['class'=>'form-control','rows'=>'3', 'id'=>'txtComentario', 'placeholder'=>'Deixe o seu comentario'])!!}

                                                                                  </div>

                                                                              </div>

                                                                                   <div class="col-md-1">
                                                                                         <div class="text-center">

                                                                                             <button type="submit" id="btEnviar" class="btn">Enviar</button>

                                                                                        </div>
                                                                                  </div>

                                                                         </form>
                                                                        {!!Form::close()!!}

                                                                      </div>

                                                                             <div class="row">

                                                                                       <div class="col-md-2 col-md-offset-0 socialNet">
                                                                                      <a href="https://www.facebook.com/inercio.belton" target="_blank"> <img class="social" alt="facebook" src="images/facebook.png"> </a>
                                                                                      <a href="https://www.twitter.com/inercioB" target="_blank"> <img class="social" alt="twitter" src="images/twitter.png"> </a>
                                                                                      <a href="https://plus.google.com/106262656100458648070" target="_blank"> <img class="social" alt="Google Plus" src="images/google.png"> </a>
                                                                                      </div>

                                                                              </div>


                                                                        </div>

                                                      </div>



                                                <!-- Footer -->
                                            <footer class="container-fluid bg-4 text-center">
                                                <a class="up-arrow" href="#myHeader" data-toggle="tooltip" title="Ir ao topo">
                                                    <span class="glyphicon glyphicon-chevron-up"></span><br>

                                                </a>
                                                <p> &copy 2016 - WebTraining - Grupo 6 </p>

                                                <!--  -->
                                            </footer>

                                        </body>







                                    <!-- Mensagens de alerta com SweetAlert -->

                                        <script>

                                            function confirmDelete(delUrl) {

                                                swal({
                                                            title: "Atencao!",
                                                            text: "Deseja cancelar esta reserva?",
                                                            type: 'warning',
                                                            animation: "slide-from-top",
                                                            showConfirmButton: true,
                                                            showCancelButton: true,
                                                            confirmButtonColor: "#f8bd08",
                                                            cancelButtonColor: "#DD6B55",
                                                            confirmButtonText: "Sim",
                                                            cancelButtonText: "Nao",
                                                            closeOnConfirm: true,
                                                            closeOnCancel: true
                                                        },
                                                        function(isConfirm){
                                                            if (isConfirm) {
                                                                document.location = delUrl;
                                                            }else{
                                                                document.location.href = "restaurante#linkReserva";

                                                            }
                                                        });
                                            }




                                          @if(notify()->ready())
                                            @if(notify()->message()=="Obrigado pelo seu comentario!")
                                              swal({
                                                title: "Obrigado pelo seu comentario!",
                                                text: "Comentario enviado com sucesso",
                                                type: 'success',
                                              animation: "slide-from-top",
                                              confirmButtonColor: "#f8bd08",
                                              closeOnConfirm: false,
                                              closeOnCancel: false
                                            });
                                              @endif

                                            @if(notify()->message()=="pedido")
                                            swal({
                                                  title: "Pedido efectuado com sucesso!",
                                                  text: "Aguarde mensagem de confirmacao por email",
                                                  type: 'success',

                                                  confirmButtonColor: "#f8bd08",
                                                  closeOnConfirm: false,
                                                  closeOnCancel: false,
                                                  html: true
                                              });


                                          @endif


                                          @if(notify()->message()=="reserva criada")
                                          swal({
                                                title: "Reserva efectuada com sucesso!",
                                                text: "Deseja fazer pedidos agora?",
                                                type: 'success',
                                                  animation: "slide-from-top",
                                                  showCancelButton: true,
                                                  confirmButtonColor: "#f8bd08",
                                                  cancelButtonColor: "#DD6B55",
                                                  confirmButtonText: "Nao!",
                                                  cancelButtonText: "Sim, fazer pedido",
                                                  closeOnConfirm: false,
                                                  closeOnCancel: true
                                            },
                                                      function(isConfirm){
                                                          if (isConfirm) {
                                                              swal("Obrigado pela preferencia", "Reserva terminada!", "success");
                                                          }else{
                                                            document.location.href = "restaurante#tituloMeuPedido";
                                                              {!!  $reservaPedido = true !!}
                                                          }
                                                      });
                                              @endif


                                            @endif
                                        </script>



                                        <!-- Animated scroll da pagina -->

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

                                        <!--





                                        FIM! -->






                                    </html>