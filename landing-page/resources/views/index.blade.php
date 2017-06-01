@extends('layouts.master')

@section('title', 'Gestão de Risco')

@section('content')
    <!-- Header -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-sm-5 pull-left">
                    <div class="intro-message">
                        <h1>Curso<br>Gestão de risco</h1>
                        <hr class="intro-divider">
                        <h3>Aprenda a planejar corretamente.</h3>
                        <h3>Assuma metas realizáveis.</h3>
                        <h3>Empreenda sem medo.</h3>
                        <ul class="list-inline intro-social-buttons">
                        </ul>
                    </div>
                </div>
                <a id="contact"></a>
                <div class="col-lg-5 col-sm-7 col-xs-12 intro-form pull-right">
                   <h3>Matricule-se AGORA<br>
                   GRATUITAMENTE<i class="fa fa-arrow-down"></i></h3>
                   <form action="insert" method="post" class="form-horizontal">
                   @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="col-sm-12">
                            {{ csrf_field() }}
                            <label for="nome" class="control-label">Nome *</label>                  
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                            <label for="email" class="control-label">Email *</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                            <label for="telefone" class="control-label">Telefone *</label>
                            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                            <label for="data_de_nascimento" class="control-label">Data de nascimento *</label>
                            <input type="date" name="data_de_nascimento" class="form-control" id="data_de_nascimento" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                            <label for="cep" class="control-label">CEP *</label>
                            <input type="text" name="cep" class="form-control" id="cep" placeholder="">
                            <input type="text" name="street" class="addr form-control" id="street">
                            <input type="text" name="neighb" class="addr form-control" id="neighb">
                            <input type="text" name="city" class="addr form-control" id="city">
                            <input type="text" name="state" class="addr form-control" id="state">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-lg btn-default">Enviar</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
    <a id="about"></a>
    <div class="content-section-b text-center">

        <div class="container">
            <div class="heading">
                <div class="row">
                  <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>Módulos</h2>
                    <hr class="heading-divider">
                  </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 module">
                    <div class="module-icon">
                        <i class="fa fa-building"></i>
                    </div>
                    <div class="module-info">
                        <h3>Imobiliário</h3>
                        <h4 class="lead text">Aprenda a investir em imóveis sem ter prejuízos inesperados.</h4>
                        <p>Carga horária: 80 horas / aula.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 module">
                    <div class="module-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="module-info">
                    <h3>Empresarial</h3>
                        <h4 class="lead text">Saiba como expandir o seu mercado com risco zero.</h4>
                        <p>Carga horária: 80 horas / aula.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 module">
                    <div class="module-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="module-info">
                        <h3>Familiar</h3>
                        <h4 class="lead text">Entenda como fazer a gestão financeira familiar de maneira eficaz.</h4>
                        <p>Carga horária: 60 horas / aula.</p>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <a id="services"></a>
    <div class="content-section-a">

        <div class="container">
           <div class="heading">
                <div class="row">
                  <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>Instituição Reconhecida</h2>
                    <hr class="heading-divider">
                  </div>
                </div> 
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-offset-1 col-xs-4">
                        <img class="img-responsive" src="img/ISO9001.png">
                </div>
                <div class="col-lg-5 col-sm-5 col-xs-6">
                        <img class="img-responsive" src="img/togaf-certified.png">
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <img class="img-responsive" src="img/IBCT.png">
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Não perca tempo. <br><a href="#contact" class="page-scroll"> Matricule-se já! </a> </h2>
                </div>

            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->
@stop