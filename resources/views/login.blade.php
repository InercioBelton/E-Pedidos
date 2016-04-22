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
                                        <div class="col-md-12 loginForm">
                                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                          {!! csrf_field() !!}

                                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                              <label class="col-md-4 control-label">E-Mail</label>

                                              <div class="col-md-6">
                                                  <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                                  @if ($errors->has('email'))
                                                      <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                              <label class="col-md-4 control-label">Password</label>

                                              <div class="col-md-6">
                                                  <input type="password" class="form-control" name="password">

                                                  @if ($errors->has('password'))
                                                      <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <div class="col-md-6 col-md-offset-4">
                                                  <div class="checkbox">

                                                      <input id="chekRemember" type="checkbox" name="remember"><p id="checkRemember"> Lembrar-se de mim</p>

                                                      <li><a class="lkRegistrar" href="{{ url('/registar') }}">Clique aqui para se registar!</a></li>

                                                  </div>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <div class="col-md-6 col-md-offset-4">
                                                  <button id="btEntrar" type="submit" class="btn btn-primary">
                                                      <i class="fa fa-btn fa-sign-in"></i>Login
                                                  </button>


                                              </div>
                                          </div>
                                      </form>
                                        </div>
                                  </div>

                           

                        </div>



               </div>




</body>
</html>