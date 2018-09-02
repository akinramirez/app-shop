@extends('layouts.app')

@section('body-class','login-page sidebar-collapse')

@section('content')
    <div class="page-header header-filter"
         style="background-image: url('{{asset('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">

                        <form class="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Registro</h4>
                            </div>

                            <p class="description text-center">Completa tus datos</p>

                            <div class="card-body">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">face</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="material-icons">mail</i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control" name="email"
                                           placeholder="Correo Electronico" value="{{ old('email') }}" required autofocus>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="material-icons">lock_outline</i></span>
                                    </div>
                                    <input id="password" placeholder="Contraseña" type="password" class="form-control"
                                           name="password" required>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="material-icons">lock_outline</i></span>
                                    </div>
                                    <input id="password-confirm" placeholder="Confirmar Contraseña" type="password"
                                           class="form-control" name="password_confirmation" required>
                                </div>

                            </div>

                            <div class="footer text-center">
                                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Confirmar
                                    Registro
                                </button>
                            </div>

                            {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                            {{--Forgot Your Password?--}}
                            {{--</a>--}}

                        </form>

                    </div>
                </div>
            </div>
        </div>

        @include('include.footer')
    </div>
@endsection
