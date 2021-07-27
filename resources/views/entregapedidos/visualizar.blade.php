<!-- ************** Formulario admin *************** -->
@extends('layouts\admin')
@section('titulo_pagina', 'Almacen')
@section('descripcion_pagina', 'Formulario Registrar Almacen')
<!-- *********************************************** -->
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.6.1/css/ol.css" type="text/css">
<style>
	.map {
		height: 400px;
		width: 100%;
	}
</style>
<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.6.1/build/ol.js"></script> 	
<div id="map" class="map"></div>
<script type="text/javascript">

	var map = new ol.Map({
		target: 'map',
		layers: [
		new ol.layer.Tile({
			source: new ol.source.OSM()
		})
		],
		view: new ol.View({
			center: ol.proj.fromLonLat([37.41, 8.82]),
			zoom: 4
		})
	});
</script>
@stop