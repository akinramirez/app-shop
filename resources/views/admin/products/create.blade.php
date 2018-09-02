@extends('layouts.app')

@section('title','Bienvenido a App Shop Laravel')
@section('body-class','profile-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Registrar nuevo producto</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{url('/admin/products')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nombre del Producto</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Precio del producto</label>
                            <input id="price" step="0.01" type="number" class="form-control" name="price" value="{{old('price')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Descripcion corta</label>
                            <input id="description" type="text" class="form-control" name="description" value="{{old('description')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control" placeholder="Descripcion extensa del producto" rows="5" name="long_description">{{old('description')}}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar Producto</button>
                <a href="{{url('/admin/products')}}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@include('include.footer')
@endsection
