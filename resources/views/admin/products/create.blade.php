@extends('layouts.app')

@section('title','Bienvenido a App Shop Laravel')
@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" data-parallax="true"
     style="background-image: url('{{asset('img/profile_city.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Bienvenido a </h1>
                <h1 class="title">App Shop.</h1>
                <h4>Realiza pedidos en linea y te contactaremos para coordinar la entrega.</h4>
                <br>
                <a href="#" target="_blank"
                   class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> Como Funciona?
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Por que App Shop?</h2>
                    <h5 class="description">Puedes revisar nuestra relacion completa de productos, comparar precios y realizar tus pedidos cuando estes seguro.</h5>
                </div>
            </div>
            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Atendemos tus dudas</h4>
                            <p>Atendemos tus dudas rapidamente cualquier consulta que tengas via chat. No etsas solo, sino que siempre estamos atento a tus inquietudes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Pago seguro</h4>
                            <p>Todo pedido que realices sera confirmado a traves de una llamada. Si no confias en los pagos en linea puedes pagar contra entrega el valor acordado.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Informacion privada</h4>
                            <p>Los pedidos que realices solo los conoceras tu a traves de tu panel de usuario. Nadie mas tiene acceso a esta informacion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section text-center">
            <h2 class="title">Productos Disponibles</h2>
            <div class="team">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="team-player">
                            <div class="card card-plain">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <img src="{{$product->images()->first()->image}}" alt="Thumbnail Image"
                                         class="img-raised rounded-circle img-fluid">
                                </div>
                                <h4 class="card-title">{{$product->name}}
                                    <br>
                                    <small class="card-description text-muted">{{$product->category->name}}</small>
                                </h4>
                                <div class="card-body">
                                    <p class="card-description">{{$product->description}}
                                    </p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i
                                                class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i
                                                class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-link btn-just-icon"><i
                                                class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="section section-contacts">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Aun no te has registrado?</h2>
                    <h4 class="text-center description">Registrate ingresando tus datos basicos y podras realizar tus pedidos a traves de nuestro carrito de compra. Si aun no te decides, de todas formas, con tu cuenta de usuario podras hacer todas tus consultas sin compromiso.</h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nombre</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Correo Electronico</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleMessage" class="bmd-label-floating">Tu mensaje</label>
                            <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto text-center">
                                <button class="btn btn-primary btn-raised">
                                    Enviar Consulta
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer footer-default">
    <div class="container">
        {{--<nav class="float-left">--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<a href="https://www.creative-tim.com">--}}
                        {{--Creative Tim--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="https://creative-tim.com/presentation">--}}
                        {{--About Us--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="http://blog.creative-tim.com">--}}
                        {{--Blog--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="https://www.creative-tim.com/license">--}}
                        {{--Licenses--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</nav>--}}
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            {{--, made with <i class="material-icons">favorite</i> by--}}
            {{--<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.--}}
        </div>
    </div>
</footer>
@endsection
