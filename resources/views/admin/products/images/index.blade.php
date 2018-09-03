@extends('layouts.app')

@section('title','Imagenes de productos')
@section('body-class','profile-page sidebar-collapse')

@section('content')
    <div class="page-header header-filter" data-parallax="true"
         style="background-image: url('{{asset('img/profile_city.jpg')}}')">
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Imagenes del producto "{{$product->name}}"</h2>

                <form method="post" action="" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="photo" required>
                    <button type="submit" class="btn btn-primary btn-round">Subir nueva images</button>
                    <a href="{{url('/admin/products')}}" class="btn btn-default btn-round">Volver al listado del producto</a>
                </form>

                <hr>

                <div class="row">
                @foreach($images as $image)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">

                            <img class="card-img-top" src="{{$image->url}}" alt="Card image cap" width="250" height="250">

                            <div class="card-body">
                                {{--<h5 class="card-title">Card title</h5>--}}
                                {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                <form method="post" action="">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="image_id" value="{{$image->id}}">
                                    <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
                                    @if($image->featured)
                                        <button type="button" class="btn btn-primary btn-fab btn-fab-mini btn-round" rel="tooltip" title="Imagen destacada de este producto">
                                            <i class="material-icons">favorite</i>
                                        </button>
                                    @else
                                        <a href="{{url('/admin/products/'.$product->id.'/images/select/'.$image->id)}}" class="btn btn-default btn-fab btn-fab-mini btn-round">
                                            <i class="material-icons">favorite</i>
                                        </a>
                                    @endif
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

            </div>

        </div>
    </div>

@include('include.footer')
@endsection
