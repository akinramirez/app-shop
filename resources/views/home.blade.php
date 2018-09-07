@extends('layouts.app')

@section('title','App Shop Dashboard')
@section('body-class','profile-page sidebar-collapse')

@section('content')
    <div class="page-header header-filter" data-parallax="true"
         style="background-image: url('{{asset('img/profile_city.jpg')}}')">
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section">
                <h2 class="title text-center">Dashboard</h2>

                @if(session('notification'))
                    <div class="alert alert-success">
                        {{session('notification')}}
                    </div>
                @endif

                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                    <!--
                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                    -->
                    <li class="nav-item ">
                        <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Carrito de compras
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Pedidos realizados
                        </a>
                    </li>
                </ul>
                <br><br>
                <hr>
                <p><h4>Tu carrito de compra presenta {{auth()->user()->cart->details->count()}} productos</h4></p>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>SubTotal</th>
                        <th style="width: 200px">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->cart->details as $detail)
                    <tr>
                        <td class="text-center">
                            <img src="{{$detail->product->featured_image_url}}" height="50">
                        </td>
                        <td class="text-center">
                            <a href="{{url('/products/'.$detail->product->id)}}">{{$detail->product->name}}</a>
                        </td>
                        <td>${{$detail->product->price}}</td>
                        <td>{{$detail->quantity}}</td>
                        <td>${{$detail->quantity*$detail->product->price}}</td>
                        <td>
                        {{-- ELIMINACION CON DELETE--}}
                        <form method="post" action="{{url('/cart/')}}">
                            {{csrf_field()}}
                            {{--<input type="hidden" name="_token" value="{{csrf_token()}}"> Igual que --> {{csrf_field()}}--}}
                            {{method_field('DELETE')}}
                            {{--<input type="hidden" name="_method" value="DELETE"> Igual que --> {{method_field('DELETE')}}--}}
                            <input type="hidden" name="cart_detail_id" value="{{$detail->id}}">
                            <a href="{{url('/products/'.$detail->product->id)}}" target="_blank" type="button"
                               rel="tooltip" class="btn btn-info btn-just-icon btn-sm"
                               title="Ver">
                                <i class="material-icons">info</i>
                            </a>
                            <button type="submit" rel="tooltip"
                                    class="btn btn-danger btn-just-icon btn-sm" title="Eliminar">
                                <i class="material-icons">close</i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    <form method="post" action="{{url('/order')}}">
                        {{csrf_field()}}
                        <button class="btn btn-primary btn-round">
                            <i class="material-icons">done</i>Realizar pedido
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    @include('include.footer')
@endsection
