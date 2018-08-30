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
                    <a href="{{url('/admin/products/create')}}" class="btn btn-primary btn-round">Nuevo producto</a>
                    <br><br>
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
                                        <td>{{$product->category ? $product->category->name:'General'}}</td>
                                        <td>&euro;{{$product->price}}</td>
                                        <td>
                                            {{-- ELIMINACION CON GET--}}
                                            {{--<a href="{{url('/admin/products/'.$product->id.'/delete')}}" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" title="Eliminar producto">--}}
                                            {{--<i class="material-icons">close</i>--}}
                                            {{--</a>--}}

                                            {{-- ELIMINACION CON POST--}}
                                            {{--<form  method="post" action="{{url('/admin/products/'.$product->id.'/delete')}}">--}}
                                            {{--{{csrf_field()}}--}}
                                            {{--<button type="submit" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" title="Eliminar">--}}
                                            {{--<i class="material-icons">close</i>--}}
                                            {{--</button>--}}
                                            {{--</form>--}}

                                            {{-- ELIMINACION CON DELETE--}}
                                            <form method="post" action="{{url('/admin/products/'.$product->id)}}">
                                                {{csrf_field()}}
                                                {{--<input type="hidden" name="_token" value="{{csrf_token()}}"> Igual que --> {{csrf_field()}}--}}
                                                {{method_field('DELETE')}}
                                                {{--<input type="hidden" name="_method" value="DELETE"> Igual que --> {{method_field('DELETE')}}--}}

                                                <a type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm"
                                                   title="Ver">
                                                    <i class="material-icons">info</i>
                                                </a>
                                                <a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip"
                                                   class="btn btn-success btn-just-icon btn-sm" title="Editar">
                                                    <i class="material-icons">edit</i>
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
