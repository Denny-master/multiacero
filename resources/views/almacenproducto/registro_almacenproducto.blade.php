<!-- ************** Formulario admin *************** -->
@extends(mb_strtolower('layouts/'.explode(' ',DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo==='Administrador'?'Admin':DB::table('empleados')->where('id',Auth::user()->id)->first()->cargo)[0],'UTF-8'))
@section('titulo_pagina', 'Exintencia de productos')
@section('descripcion_pagina', 'Formulario Registrar Productos en Almacen')
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

<form  action="{{route('almacenar_almacenproducto')}}" enctype="multipart/form-data" method="post" novalidate>
{{ csrf_field() }}
	@include('almacenproducto._formulario_almacenproducto')
    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Guardar</button>        
</form>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@stop