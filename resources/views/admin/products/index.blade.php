@extends('layouts.app')

@section('title','Listado de productos')
@section('body-class','profile-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" data-parallax="true"
     style="background-image: url('{{asset('img/profile_city.jpg')}}')">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section text-center">
            <h2 class="title">Listado de productos</h2>
            <div class="team">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descrip.</th>
                                <th>Cat.</th>
                                <th>Precio</th>
                                <th style="width: 200px">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>&euro;{{$product->price}}</td>
                                    <td>
                                        <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" title="Ver producto">
                                            <i class="material-icons">info</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" title="Editar producto">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" title="Eliminar producto">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
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
