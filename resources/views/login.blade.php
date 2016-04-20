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
                    <div class="headLogin col-md-12">



                              <div class="col-md-6 col-md-offset-3 bgLogin">

                                    <div class="row">

                                     <div class="col-md-4 col-md-offset-4">

                                          <h1 class="logo">Login</h1>

                                    </div>

                                    </div>

                                  <div class="row">

                                      {!!Form::open(['route'=>'reserva.store', 'method'=>'POST'])!!}

                                      <div class="col-md-6 col-md-offset-3 loginForm">


                                          <div class="form-group">

                                              {!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Username'])!!}

                                          </div>

                                          <div class="form-group">

                                              {!!Form::password('password',['class'=>'form-control','placeholder'=>'Password'])!!}

                                          </div>


                                          <div class="text-center" >

                                              <button id="btEntrar" type="submit" class="btn">Entrar</button>

                                          </div>

                                          <p class="lkRegistrar">Clique <a href="">aqui</a> para se registar!</p>


                                      </div>

                                      {!!Form::close()!!}

                                  </div>

                           

                        </div>



               </div>




</body>
</html>