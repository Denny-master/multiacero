<!-- ************** Formulario admin *************** -->
@extends('layouts\admin')
@section('titulo_pagina', 'Producto')
@section('descripcion_pagina', 'Formulario Registrar productos')
<!-- *********************************************** -->
@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Seccino de errrores-->
@if(Session::has('message'))
    <div class="container">
        <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
            {{ Session::get('message')}}
            @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
 	                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <script>
                $('.alert').slideDown();
                    setTimeout(function(){$('.alert').slideUp(); }, 10000);
            </script>
        </div>
    </div>
@endif

<form  action="{{route('almacenar_producto')}}" class="mt-5" enctype="multipart/form-data" method="post" novalidate>
{{ csrf_field() }}
	@include('producto._formulario_producto')
    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Guardar</button>        
</form>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@stop